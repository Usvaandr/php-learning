<?php


// $dbtask = $app['database']->insertData('todos', $_POST); //??


// $dbtask = $app['database']->selectAll('todos');

// insert into todos (description, completed) values ($_POST, true);

$app['database']->insert('users', [
    'name' => $_POST['name'],
]);

header('Location: /');