# Well

An Acquia Reservoir and Acquia BLT based project.

Acquia Reservoir is a service based Drupal 8 profile to power frontend frameworks.

Acquia BLT is a local development and CI tool for Drupal based projects.

## BLT

Please see the [BLT documentation](http://blt.readthedocs.io/en/latest/) for information on build, testing, and deployment processes.

## Resources

* GitHub - [https://github.com/damontgomery/well](https://github.com/damontgomery/well)
* Acquia Cloud subscription - link me!
* TravisCI - link me!

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
If you used BLT to install the site, like in the quickstart, you will have skipped the browser-based install step that creates OAuth keys.

Once logged in, go to `admin/config/people/simple_oauth` and hit save to create the keys. It's also good to set the expiration time to something longer like 1h (3600) if you are doing development with Postman.
