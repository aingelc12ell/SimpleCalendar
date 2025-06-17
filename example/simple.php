<?php

require '../vendor/autoload.php';

echo '<link rel="stylesheet" href="../src/css/SimpleCalendar.css" />';

$calendar = new ACCESS\SimpleCalendar('June 2010');

echo $calendar->render();
