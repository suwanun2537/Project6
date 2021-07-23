<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>โปรแกรมบวกเลข</title>
</head>
<body>
    <form action="Ex1.php" method="GET">
        <input type="text" name="number1" value="" />
        <input type="text" name="number2" value="" />
        <input type="submit" name="add" value="บวกเลข" />
        <input type="reset" name="reset" value="reset" />
    </form>

</body>
</html>

<!-- <?php 
    if($_GET['add'] == 'บวกเลข' && $_GET['number1'] != null && $_GET['number2'] != null){

        $n1 = $_GET['number1'];
        $n2 = $_GET['number2'];
        echo  $n1 + $n2;
    }
?> -->

<?php 
    if(isset($_GET['add']) &&  isset($_GET['number1']) && isset($_GET['number2']) != null){

        $n1 = $_GET['number1'];
        $n2 = $_GET['number2'];
        echo  $n1 + $n2;
    }
?>