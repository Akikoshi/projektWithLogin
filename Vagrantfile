# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure(2) do |config|
  config.vm.box = "bfwdefault"
  config.vm.box_url = "http://vagrant.web4train.local/bfwdefault.json"
  config.vm.box_check_update = true
  config.vm.box_version = '1.0.4'
  config.vm.hostname = "www.projekt.de"
  config.vm.post_up_message = "Mashine www.projekt.de is running"
  config.vm.network "private_network", ip: "192.168.56.120"
  config.vm.provision "shell", inline: "showconfig projekt.de"
end