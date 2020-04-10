##### Requirements
* PHP >= 7.1.3
* Composer
* Laravel

## PHP upgrade (for mac OS with homebrew)

```.sh
$ php -v
PHP 7.1.19
```
if your php version is lower than 7.1.3 

### homebrew

```.sh
# install brew
$ /usr/bin/ruby -e "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install)"

# or just update if you already have
$ brew update
```

```.sh
$ brew install php@7.2

$ echo 'export PATH="/usr/local/opt/php@7.2/bin:$PATH"' >> ~/.bash_profile
$ echo 'export PATH="/usr/local/opt/php@7.2/sbin:$PATH"' >> ~/.bash_profile

$ php -v
PHP 7.2.14
```

## Composer installation
see https://getcomposer.org

```.sh
$ php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
$ php -r "if (hash_file('sha384', 'composer-setup.php') === '48e3236262b34d30969dca3c37281b3b4bbe3221bda826ac6a9a62d6444cdb0dcd0615698a5cbe587c3f0fe57a54d8f5') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
$ php composer-setup.php
$ php -r "unlink('composer-setup.php');"

$ mv composer.phar /usr/local/bin/composer

$ which composer
/usr/local/bin/composer
```

## Laravel installation
see https://laravel.com/docs/5.6/installation

```.sh
$ composer global require "laravel/installer"

$ ~/.composer/vendor/bin/laravel new ${PROJECT_NAME}
```

## Add a remote then pull

```.sh
$ git remote add origin https://github.com/${USER_NAME}/${REPOSITORY_NAME}.git
$ git pull --rebase origin
```

## Start server

```.sh
$ cd ${PROJECT_NAME}

$ php artisan serve
```

