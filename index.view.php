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

        <ul>

            <?php foreach ($task as $what => $how): ?>

                <li> <strong> <?= $what ?> </strong> <?= $how; ?> </li>

            <?php endforeach; ?>
        </ul>

    </body>

</html>