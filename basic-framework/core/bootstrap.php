<?php

$app = ['name' => 'basic-framework'];
$app['config'] = require 'config.php';

$app['qb'] = new QueryBuilder(Connection::make($app['config']['database']));