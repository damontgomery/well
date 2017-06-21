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
