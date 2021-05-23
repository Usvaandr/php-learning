<?php
// $tasks = $app['database']->selectAll('todos'); //this is where we list all tasks from todo table.


$users = App::get('database')->selectAll('users');

require 'views/index.view.php'; 