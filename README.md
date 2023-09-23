# Simple Calendar


A very simple, easy to use PHP calendar rendering class. 

## Credits

This is forked for other use without compromising the core functionalities from (https://github.com/donatj/SimpleCalendar).

## Installing

Install the latest version with:

```bash
composer require 'aingelc12ell/simplecalendar'
```

## Examples

```php
<?php

require '../vendor/autoload.php';

echo '<link rel="stylesheet" href="../src/css/SimpleCalendar.css" />';

$calendar = new ACCESS\SimpleCalendar('June 2010');

echo $calendar->render();

```

```php
<?php
require '../vendor/autoload.php';

echo '<link rel="stylesheet" href="../src/css/SimpleCalendar.css" />';

$calendar = new ACCESS\SimpleCalendar();

$calendar->setStartOfWeek('Sunday');
$calendar->addDailyHtml('Sample Event', 'today', 'tomorrow');

$calendar->setWeekDayNames([ 'Sun', 'Mon', 'Tu', 'W', 'Th', 'F', 'Sa' ]);
$calendar->setStartOfWeek('Monday');

echo $calendar->render();

```