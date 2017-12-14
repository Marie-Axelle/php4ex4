<html>
    <head>
        <title>Php fonctions</title>
    </head>
    <body>

        <?php

        function number($one, $two) {

            if ($one > $two) {
                return 'Le premier nombre est plus grand';
            } elseif ($one < $two) {
                return 'le premier nombre est plus petit';
            } elseif ($one == $two) {
                return 'les nombres sont égaux';
            }
        }
        echo number(21, 18);
        ?>
    </body>
</html>