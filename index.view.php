<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTS-8">
        <title>Learning PHP</title>

        <style>
            body {
                background: #e3e3e3;
                padding: 2em;
                text-align: left;
        }
        </style>
    </head>


    <body>

        <h1>Task of the day</h1>

        <ul>

            <?php foreach ($task as $what => $how): ?>

                <li> <strong> <?= ucwords($what) ?> </strong> <?= $how; ?> </li>

            <?php endforeach; ?>
        </ul>

        <li>
            <strong>Name: </strong> <?= $task['title:']; ?>
        </li>
        <li>
            <strong>Due Date: </strong> <?= $task['due:']; ?>
        </li>
        <li>
            <strong>Person responsible: </strong> <?= $task['assigned to:']; ?>
        </li>
        <li>
            <strong>Status: </strong> <?= $task['completed:'] ? 'Complete' : 'Incomplete'; ?>
        </li>
    </body>

</html>