# -*- mode: ruby -*-
# vi: set ft=ruby :

# All Vagrant configuration is done below. The "2" in Vagrant.configure
# configures the configuration version (we support older styles for
# backwards compatibility). Please don't change it unless you know what
# you're doing.
Vagrant.configure("2") do |config|
  # The most common configuration options are documented and commented below.
  # For a complete reference, please see the online documentation at
  # https://docs.vagrantup.com.

  # Every Vagrant development environment requires a box. You can search for
  # boxes at https://atlas.hashicorp.com/search.
  config.vm.box = "ubuntu/xenial64"

  # Disable automatic box update checking. If you disable this, then
  # boxes will only be checked for updates when the user runs
  # `vagrant box outdated`. This is not recommended.
  # config.vm.box_check_update = false

  # Create a forwarded port mapping which allows access to a specific port
  # within the machine from a port on the host machine. In the example below,
  # accessing "localhost:8080" will access port 80 on the guest machine.

  # Symfony server on port 8000, port 8080 is forwarded
  config.vm.network "forwarded_port", guest: 8000, host: 8080
  config.vm.network "forwarded_port", guest: 8081, host: 8081
  # config.vm.network "forwarded_port", guest: 3306, host: 3306

  # Create a private network, which allows host-only access to the machine
  # using a specific IP.
  # config.vm.network "private_network", ip: "192.168.33.10"

  # Create a public network, which generally matched to bridged network.
  # Bridged networks make the machine appear as another physical device on
  # your network.
  # config.vm.network "public_network"

  # Share an additional folder to the guest VM. The first argument is
  # the path on the host to the actual folder. The second argument is
  # the path on the guest to mount the folder. And the optional third
  # argument is a set of non-required options.
  config.vm.synced_folder ".", "/home/ubuntu/project/", user: "www-data", group: "www-data", type: "nfs"

  # Provider-specific configuration so you can fine-tune various
  # backing providers for Vagrant. These expose provider-specific options.
  # Example for VirtualBox:
  #
  config.vm.provider "virtualbox" do |vb|
    # Display the VirtualBox GUI when booting the machine
    vb.gui = false

    # Customize the amount of memory on the VM:
    vb.memory = "2048"
    vb.cpus = "2"
  end
  #
  # View the documentation for the provider you are using for more
  # information on available options.

  # Enable provisioning with a shell script. Additional provisioners such as
  # Puppet, Chef, Ansible, Salt, and Docker are also available. Please see the
  # documentation for more information about their specific syntax and use.
  config.vm.provision "shell", inline: <<-SHELL
    # Update apt-get
    sudo apt-get update -y

    # First, apache and php
    sudo apt-get install -y apache2 php7.0

    # seeding values for mysql root account creation prompt
    sudo debconf-set-selections <<< 'mysql-server-5.5 mysql-server/root_password password rootpass'
    sudo debconf-set-selections <<< 'mysql-server-5.5 mysql-server/root_password_again password rootpass'
    sudo apt-get install -y mysql-server php7.0-mysql

    # Install symfony
    sudo mkdir -p /usr/local/bin
    sudo curl -LsS https://symfony.com/installer -o /usr/local/bin/symfony
    sudo chmod a+x /usr/local/bin/symfony

    # php-xml needed for symfony, gd needed for a composer package, curl is need for spotify package
    sudo apt-get install php-xml php7.0-gd php7.0-curl -y

    # restart apache for good measure
    sudo service apache2 restart

    # Installing php composer
    sudo apt-get install composer -y

    # After composer installed, build composer dependencies
    cd /home/ubuntu/project/
    composer install

    # Installing SASS for css compiling
    sudo apt-get install -y ruby-sass


    # Add .bashrc to the VM user
    rm /home/ubuntu/.bashrc
    echo "source ~/project/Vagrantbashconfig" >> /home/ubuntu/.bashrc

    # Use the custom php.ini by copying it over
    rm /etc/php/7.0/cli/php.ini
    cp /home/ubuntu/project/Vagrantphpini /etc/php/7.0/cli/php.ini

    # After everything is installed, upgrade to latest versions
    # Would this be bad practice since working version of library might
    # unexpectedly change in a box?
    # sudo apt-get upgrade -y
    SHELL
end
