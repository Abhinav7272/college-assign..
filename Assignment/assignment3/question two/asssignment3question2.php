
<?php
  
    if(isset($_POST['numberone'])){
        $numberone = $_POST['numberone'];
	}
	else{
		$numberone= 0; 
    }
    if(isset($_POST['numbertwo'])){
        $numbertwo = $_POST['numbertwo'];
	}
	else{
		$numbertwo= 0; 
    }
    
?>

<html>

<head>
    <title>HTML Forms</title>
</head>

<body>
    <div style="  margin:auto; border:5px solid black; text-align:center; width: 300px; height: 100px;">
        <form method="POST" action="">
            NUMBER 1: <input type="number" name="numberone" placeholder="Input first number"><br>
            NUMBER 2: <input type="number" name="numbertwo" placeholder="Input second number"><br>
            <input type="submit" name="submit" value="SUM">
            <div  style=" margin:auto ;border:1px solid black; text-align:center; width: 200px; height: 30px;" > 
            <?php if($numberone+$numbertwo!=0){
                   ?>
                <?php echo $numberone+$numbertwo ?>
          <?php  }
          ?>
         
            </div>
        </form>
    </div>
</body>

</html>