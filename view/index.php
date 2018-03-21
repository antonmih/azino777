<html>
    <head>
        <title>Azino</title>
        <link href="/style/style.css" rel="stylesheet">
    </head>
    <body>
    <?php
    echo "Ваш баланс:"," " ,$b;
    ?>
        <form action="controller.php" method="post">
            <p> <input type="text" class="w3-input w3-border" name="stavka" value="<? echo $stavka; ?>"></p>
            <p> <input type="text" class="w3-input w3-border" name="vibor" value="<? echo $vibor; ?>"> </p> <br>
            <input type="submit" value="Поставить">
        </form>

    <p> Выпало число: <span class="w3-badge w3-red"><?php echo $rannd?></span> </p>
    <?php echo "Ваш выйгрыш:"," " ?> <span class="w3-badge w3-green"><? echo $g ?></span>
    </body>


</html>