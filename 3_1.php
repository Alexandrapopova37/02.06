<html>
<head>
    <meta charset="utf-8">
    <title>#3</title>
    <style>
        form{
            margin: auto;
            text-align: left;

        }
    </style>
</head>
<body>
    <form method="POST">
        <h3>ФИО</h3>
        <input type="text" name="surname" placeholder="Фамилия">
        <br>
        <input type="text" name="name" placeholder="Имя">
        <br>
        <input type="text" name="patronimyc" placeholder="Отчество">
        <br>
        <input type="submit" value="Применить">
    </form>
    <?php
    $s = $_POST["surname"];
    $n = $_POST["name"];
    $p = $_POST["patronimyc"];
    
    $name = str_split($n);
    $patron = str_split($p);
    
    $n = $name[0];
    $p = $patron[0];
    $vivod = $s." ".$n.". ".$p.".";
    echo $vivod;
    ?>
</body>
</html>