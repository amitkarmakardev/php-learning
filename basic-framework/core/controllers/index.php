<?php

$tasks = $app['qb']->selectAll('tasks');

require 'views/home.php';