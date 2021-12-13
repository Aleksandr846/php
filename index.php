<!DOCTYPE html>
<html>
<head>
    <title>Лабораторная работа 9</title>
    <meta charset="utf-8">
</head>
<body>
    <form id="frm" method="POST" action="">
        <p>Введите число между -1 и 1:</p>
        <input type="text" name="x">
        <p>Введите n:</p>
        <input type="text" name="n">
        <input type="submit" value="OK">
    </form>
    <?php
        $x=$_POST["x"];
        $n=$_POST["n"];
        $b=0;
        for($a=1; $a<=$n; $a++){
            $b=$b+(($x**$a)/$a);
        }
        $b=$b*-1;
        echo $b;
    ?>
</body>
</html>