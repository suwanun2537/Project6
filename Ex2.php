<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>โปรแกรมบวกเลข</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
        <input type="text" name="number1" value="0" /><br>
        <input type="text" name="number2" value="0" /><p>
        <input type="submit" name="add" value="บวกเลข" />
        <input type="submit" name="sub" value="ลบเลข" />
        <input type="submit" name="mul" value="คูณเลข" />
        <input type="submit" name="div" value="หารเลข" /><p>
        <input type="reset" name="reset" value="reset" />
    </form>

</body>
</html>
<?php 
   
    if(isset($_GET['add'])){ 

        $n1 = $_GET['number1'];
        $n2 = $_GET['number2'];

        if (!empty ($n1) && !empty ($n2)){
        echo  "${n1} + ${n2} = " . ($n1 + $n2);
    }
}
    if(isset($_GET['sub'])){ 

        $n1 = $_GET['number1'];
        $n2 = $_GET['number2'];
        if (!empty ($n1) && !empty ($n2)){
        echo  "${n1} - ${n2} = " . ($n1 - $n2);
        }
    }
        if(isset($_GET['mul'])){ 

            $n1 = $_GET['number1'];
            $n2 = $_GET['number2'];
            if (!empty ($n1) && !empty ($n2)){
            echo  "${n1} * ${n2} = " . ($n1 * $n2);
        }
    }
        if(isset($_GET['div'])){ 

            $n1 = $_GET['number1'];
            $n2 = $_GET['number2'];
            if (!empty ($n1) && !empty ($n2)){
            echo  "${n1} / ${n2} = " . ($n1 / $n2);
        }
    }
?>

</html>