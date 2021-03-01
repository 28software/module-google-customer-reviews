<div align="center">
  <img src="https://img.shields.io/badge/magento-2.X-brightgreen.svg?logo=magento&longCache=true&style=flat-square" alt="Supported Magento Versions" />
  <a href="https://opensource.org/licenses/MIT" target="_blank"><img src="https://img.shields.io/badge/license-MIT-blue.svg" /></a>
</div>

# Google Customer Reviews Extension for Magento 2
Google Customer Reviews extension for Magento 2.

# Installation
## Composer

Download composer `wget http://getcomposer.org/composer.phar`

```bash
composer config repositories.28software-google-customer-reviews git git@bitbucket.org:28software/module-google-customer-reviews.git
composer require 28software/module-google-customer-reviews
```

## Modman
Download [modman](https://github.com/colinmollenhour/modman) `bash < <(wget -q --no-check-certificate -O - https://raw.github.com/colinmollenhour/modman/master/modman-installer)`

In the Magento 2 directory
```bash
modman init
```

Clone the repository, run the command from Magento 2 root directory:
```bash
modman clone git@bitbucket.org:28software/module-google-customer-reviews.git
```

In order to update the repository with the changes from remote branch run the command:
```bash
modman update 28software/module-google-customer-reviews
``` 

# Authors

* [Serhii Koval](mailto:serhiyk@28software.com)

# License
Google Customer Reviews extension for Magento 2 is licensed under the MIT License - see the LICENSE file for details
