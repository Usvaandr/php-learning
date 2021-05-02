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

hello
    <body>
        <ul>
            <?php foreach ($tasks as $task) : ?>             
                <li> 
                    <?php if ($task->completed) : ?>
                        <strike> <?= $task->description; ?> </strike>
                    <?php else: ?>
                    <?= $task->description; ?>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </body>

</html>