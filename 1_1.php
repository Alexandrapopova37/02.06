<html>
<head>
    <title>#1</title>
    <style>
        form{
          margin: auto;
            text-align: left;
        }
    </style>
</head>
<body>
    <form method="POST">
        <h3>От 0  до 360 градусов</h3>
        <input type="text" name="gradusi" placeholder="Введите">
        <br>
        <input type="submit" value="Применить">
    </form>
    <?php
    $a = $_POST["gradusi"];
    if(!is_numeric($a))
        echo 'Ошибка!';
    else{
        $a = $a*12/360;
        $a = floor($a);
        echo $a;
    }
    ?>
</body>
</html>