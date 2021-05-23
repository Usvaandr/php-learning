<?php
// like a factory file. Where it build the QueryBuilder.

App::bind('config', require 'config.php');

// die(var_dump(App::get('config')));


// App::bind('foo', 'bar');
// die(App::get('foo'));


// $config = App::get('config');


App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));