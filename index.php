<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Exercise</title>
    </head>
    <body>
        <p>En allant de 1 à 100 avec un pas de 15, afficher le message On tient le bon bout.</p>
        <?php
        for ($a=1; $a <= 100; $a += 15) {
           echo $a.' - On tient le bon bout'.'<br />';
        }
         ?>
    </body>
</html>
