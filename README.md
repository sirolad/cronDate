# CronDate

This simple package gives the cron expression of a DateTime string.

## Installation

```php
composer require sirolad/cron-date
```

## Usage
```php
<?php
use Sirolad\CronDate;

$expression = new CronDate('2017-12-2 11:02:25');
echo $expression->getCronDate(); //2 11 2 12 6
```

## Contributors

This package is managed by [Surajudeen Akande](https://github.com/andela-sakande)