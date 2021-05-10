<?php
// like a factory file. Where it build the QueryBuilder.

$config = require 'config.php';
require 'database/Connection.php';
require 'database/QueryBuilder.php';


$query = new QueryBuilder(
    Connection::make($config['database'])
);