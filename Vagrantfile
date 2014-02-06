Vagrant.configure("2") do |config|
  config.hostmanager.enabled      = true
  config.hostmanager.manage_host  = true
  config.hostmanager.aliases = %w(ludus.dev)

  config.vm.box = "precise64"
  config.vm.box_url = "http://files.vagrantup.com/precise64.box"
  config.vm.hostname = 'ludusdev'
  config.vm.network :private_network, ip: "12.12.12.12"
    config.ssh.forward_agent = true

  config.vm.provider :virtualbox do |v|
    v.customize ["modifyvm", :id, "--natdnshostresolver1", "on"]
    v.customize ["modifyvm", :id, "--memory", 1024]
    v.customize ["modifyvm", :id, "--name", "ludus-box"]
  end

  nfs_setting = RUBY_PLATFORM =~ /darwin/ || RUBY_PLATFORM =~ /linux/
  config.vm.synced_folder "./", "/var/www", id: "vagrant-root" , :nfs => nfs_setting
  config.vm.provision :shell, :inline => "sudo apt-get update"


  config.vm.provision :shell, :inline => 'echo -e "mysql_root_password=simplepass
controluser_password=awesome" > /etc/phpmyadmin.facts;'

  config.vm.provision :puppet do |puppet|
    puppet.manifests_path = "manifests"
    puppet.module_path = "modules"
    puppet.options = ['--verbose']
  end

  config.vm.provision :shell, :path => "./bin/bootstrap.sh"

end
