<?php

App::get('database')->insert('users', [
    'name' => $_POST['name'],
]);

header('Location: /'); // after the function above is executed, this returns us to homepage