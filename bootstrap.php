<?php
// like a factory file. Where it build the QueryBuilder.

require 'database/Connection.php';
require 'database/QueryBuilder.php';


$query = new QueryBuilder(
    Connection::make()
);