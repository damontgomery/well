# Well

An Acquia Lightning (Content API) and Acquia BLT based project.

Acquia Lightning (Content API) is a service based Drupal 8 profile to power frontend frameworks.

Acquia BLT is a local development and CI tool for Drupal based projects.

## BLT

Please see the [BLT documentation](http://blt.readthedocs.io/en/latest/) for information on build, testing, and deployment processes.

## Resources

* GitHub - [https://github.com/damontgomery/well](https://github.com/damontgomery/well)

# Installation dependencies

_Tested on OSX_

- Install Composer globally on your local machine [https://getcomposer.org/](https://getcomposer.org/)
- Install dependencies for Drupal VM, but do NOT install Drupal VM, [https://github.com/geerlingguy/drupal-vm#quick-start-guide](https://github.com/geerlingguy/drupal-vm#quick-start-guide)

## Recommended Vagrant plugins
see [https://www.vagrantup.com/docs/cli/plugin.html#plugin-install](https://www.vagrantup.com/docs/cli/plugin.html#plugin-install) 
- vagrant-hostsupdater (creates nice names automatically for /etc/hosts)
- vagrant-auto_network (allows Vagrant to pick an IP for you so there are no conflicts with other VMs)
- vagrant-vbguest (help with ssh key management in case you connect to a server)

```
# Show plugins
vagrant plugin list

# Install plugins
vagrant plugin install vagrant-hostsupdater vagrant-auto_network vagrant-vbguest
```

# Quickstart
```
# Clone the repository to your local machine.
git clone git@github.com:damontgomery/well.git --branch develop

# Go to the repository.
cd well

# Use composer to install the project.
composer install

# Use blt to install the virtual machine.
blt vm

# Use blt to run other necessary setup steps and install the site.
blt setup

# Log in to your site.
drush @well.local uli
```

## Create OAuth keys
See [Reservoir Quick Start Guide: Setting Up OAuth Keys](https://github.com/acquia/reservoir/wiki/Quick-Start-Guide#setting-up-oauth-keys)

# Extending well

While not intended as a starting point for real sites, you might want to try out configuration management with Well. Well uses the Acquia BLT recommended method for configuration management which includes Drupal core configuration synchronization as well as Config Split.

## Importing on site install

When Acquia BLT is used to install the site, `blt local:setup`, the configuration in `/config/default` will be used. The configuration provided by the `develop` branch of Well contains the default configuration as it exists after running a normal Acquia BLT install. This however, provides a convenient way to see which additions and changes you are making when doing future exports.

## Exporting configuration

`drush @well.local cex --y`

From here, you can use your Git to review the changes exported.

## Importing configuration

`drush @well.local cim --y`

## Creating a Lightning sub profile

The Well sub profile was created with Drupal Console and Acquia Lightning.

```
# Log in to the VM so Drupal Console is accessible.
vagrant ssh

# Use Drupal Console to create a sub profile.
vendor/bin/drupal lightning:subprofile
```
