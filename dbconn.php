<?php
require __DIR__ . '/vendor/autoload.php';

use Kreait\Firebase\Factory;

$factory = (new Factory())
    ->withProjectId('data.json')
    ->withDatabaseUri('https://php-firebase-crud-29fdc-default-rtdb.firebaseio.com/');

$database = $factory->createDatabase();
