<?php
// like a factory file. Where it build the QueryBuilder.

$app = [];

$app['config'] = require 'config.php';

// removed all the links below because we installed composer autoloader

// require 'core/Router.php';
// require 'core/Request.php';
// require 'core/database/Connection.php';
// require 'core/database/QueryBuilder.php';

$app['database'] = new QueryBuilder(
    Connection::make($app['config']['database'])
);