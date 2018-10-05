# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure(2) do |config|
  config.vm.define "host" do |node|
    node.vm.box = "geerlingguy/centos6"
    node.vm.hostname = "host"
    node.vm.network :private_network, ip: "192.168.43.51"
  end

  config.vm.define "web.a" do |node|
    node.vm.box = "geerlingguy/centos6"
    node.vm.hostname = "web.a"
    node.vm.network :private_network, ip: "192.168.43.52"
  end

  config.vm.define "db" do |node|
    node.vm.box = "geerlingguy/centos6"
    node.vm.hostname = "db"
    node.vm.network :private_network, ip: "192.168.43.55"
  end

  config.vm.provider "virtualbox" do |vb|
    vb.customize ["modifyvm", :id, "--cableconnected1", "on"]
  end
end
