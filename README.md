##Test Project##

Instructions:

1. git

```sh
git clone http://github.com/cordoval/FormModelProjectBundle.git testproject
```

2. bin/vendors install

```sh
cd testproject
bin/vendors install --reinstall
```

3. adjust

adjust app/config/parameters.ini
adjust /etc/hosts and /etc/apache2/sites-available/default

4. run

// PHPSpec Symfon2 integration
vendor/phpspec/scripts/phpspec.php vendor/bundles/Cordova/Bundle/FormModelBundle/Specs/views/IndexSpec.php

// Behat Symfony2 integration
php app/console -e=test behat @CordovaFormModelBundle/member.feature