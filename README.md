# TYPO3 PHP-CS-Fixer

This package provides a [PHP Coding Standards Fixer](https://cs.symfony.com/) configuration with official [rules](https://git.typo3.org/typo3/typo3/-/blob/main/Build/php-cs-fixer/config.php) used by the [TYPO3 CMS](https://www.typo3.org) mixed with rules defined for LST TYPO3 projects.

## Setup

Install the package via composer:
```shell
composer require lst/typo3-phpcsfixer --dev
```

## Configuration

Create a configuration file `.php-cs-fixer.php` in the root of your project and configure the path to the sources, e.g. `packages`:

```php
<?php

$config = \LST\TYPO3PhpCsFixer\CsFixerConfig::create();
$config->getFinder()
    ->in('packages');

return $config;
```

## Usage

Run `composer exec php-cs-fixer fix` to run the fixer.
