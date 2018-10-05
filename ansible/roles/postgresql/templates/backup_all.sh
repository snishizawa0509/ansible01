#!/bin/sh

# テーブル一覧を取得して配列に格納
# NOT IN条件に除外したいDBを記載する。
# オプションはテーブル名のみをキレイに取得するためのオプション
PG_RESULT=(`psql -t -U postgres -q -c "SELECT datname FROM pg_database WHERE datname NOT IN ('template1','template0','postgres');" postgres`)

# データベースの個数だけバックアップを回す
# この設定ではファイル名は　『DB名_weekly_曜日番号.backup』となります
for database in ${PG_RESULT[@]}; do
    pg_dump -U postgres -b -Fc -f /home/{{ main_username }}/backup/${database}_weekly_`date +\%w`.backup ${database}
    chmod 600 /home/{{ main_username }}/backup/${database}_weekly_`date +\%w`.backup
    aws s3 cp /home/{{ main_username }}/backup/${database}_weekly_`date +\%w`.backup s3://lee-backup/ --acl public-read --profile=backup
done
