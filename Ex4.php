
  
<!doctype html>
<html lang="en">
  <head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head> 
  
  <body >
    <div class="container"  >
        <h1 class="pt-3"style= "font-family:TH SarabunPSK">โปรแกรมคำนวณหาแม่สูตรคูณ</h1>
        <form class="row pt-1 g-1" method="GET" action="Ex4.php">
            <div class="col-auto" >
              <label for="t" class="visually-hidden" >ตัวเลข</label>
              <input type="text"  class="form-control"  placeholder="สูตรคูณแม่"
              id="" name="num" value="">
            </div>
            
            <div class="col-auto">
              <button type="submit" value="submit" name="submit" class="btn btn-primary mb-3">คำนวณ</button>
            </div>
          </form>
    </div>

  

<div class="container px-6" >
  <div class="row g-1">
  <div class="col-3">
<?php
for ($x = 1; $x <= 12; $x++) {
	$mulitiple = $_GET["num"]*$x;
	if ($x%2){
		echo "<div class= 'p-2 border bg-info ' role='alert' align='center'>$_GET[num] x $x = $mulitiple</div>";
	}
	else{		
		echo "<div class='p-2 border bg-Light ' role='alert' align='center'>$_GET[num] x $x = $mulitiple</div>";
	}
}

?>


</div>  </div> </div> 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!doctype html>
<html lang="en">
  <head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title></title>
    </head> 
