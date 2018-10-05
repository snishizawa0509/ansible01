# ansible_study
https://qiita.com/leedohyung-dba/items/59be7006182a8a0b4cc0

#TODO-LIST
・インベントリファイルにIPを記入
・group_vars/all.ymlを設定する
※firewall_set_type: "file"の場合は該当ファイルを設定 ansible/roles/common/templates/iptables.j2

・roles/common/files/id_rsa.pubへ登録したいパブリックキーを書く。
・インベントリファイルとymlファイルを選んでコマンド実行: ansible-playbook -i inventory/development site.yml
