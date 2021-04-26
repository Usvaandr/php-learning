<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTS-8">
        <title>Learning PHP</title>

        <style>
            body {
                background: #e3e3e3;
                padding: 2em;
                text-align: center;
        }
        </style>
    </head>


    <body>

        <h1>
            Hello
        </h1>

        <p>
            <ul>
                <!-- <li></li> -->

                <?php
                foreach ($farm as $animal) {
                    echo "<li>$animal</li>";
                }
                ?>
            </ul>
        </p>

        <p>
            <ol>
                <?php foreach ($farm as $animal) : ?>

                    <li><?= $animal; ?></li>

                <?php endforeach; ?>
            </ol>
        </p>

        <p>
            <ul>
                <?php foreach ($cars as $brand) {
                    echo "<li>$brand</li>"; 
                } ?>
            </ul>
        </p>

        <p>
            <ol>
                <?php foreach ($cars as $brand) : ?>
                <li><?= $brand;?> </li>
                <?php endforeach; ?>
            </ol>
        </p>

    </body>

</html>