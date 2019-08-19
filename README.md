# Composer Demo

## Useful Commands:

Initialize a new composer config file
```bash
composer init
```

Generate / Refresh the autoloader:
```bash
composer dump-autoload
```

Adding a new third-party library to the project
```bash
composer require league/climate
```

Adding a new third-party dev library to the project
```bash
composer require-dev phpunit/phpunit
```

Running unit tests:
```bash
vendor/bin/phpunit --bootstrap vendor/autoload.php tests/AnimalTest.php --texdox
```