<?php
include('conn.php');
?>

<?php
     
     $id2 = $_GET['id'];

     $sql = "SELECT `name`, `email`, `gender`, `city` FROM `user` WHERE `id`= '$id2' ";
      
     $result= mysqli_query($conn, $sql);
     if(! $result){
         echo "no";
     }
     $row = $result->fetch_assoc() ;
     
    if(isset($_POST['username'])){
        $username = $_POST['username'];
	}
	else{
		$username = ''; 
    }

    if(isset($_POST['email'])){
        $email = $_POST['email'];
	}
	else{
		$email = ''; 
    }
    if(isset($_POST['gender'])){
        $gender = $_POST['gender'];
	}
	else{
		$gender = ''; 
	}
    if(isset($_POST['city'])){
        $city = $_POST['city'];
	}
	else{
		$city = ''; 
    }

    $sql2 = " UPDATE `user` SET `name` = '$username', `email` = '$email', `gender`='$gender', `city`='$city' WHERE `id`= '$id2' ";
    $result2 = mysqli_query($conn, $sql2);
    if(! $result2){
        echo "no";
    }
?>

<html>

<head>
    <title>HTML Forms</title>
</head>

<body>
    <div style="border:5px solid black; text-align:center; ">
        <form method="POST" action="">
            name <input type="text" name="username" value=" <?php  echo $row['name'] ?>" placeholder="<?php  echo $row['name'] ?>" required><br>
            Email <input type="email" name="email"  value=" <?php  echo $row['email'] ?>" placeholder="<?php   echo $row['email']?> " required><br>
            Select gender <select name="gender" >
                <option value="defg"><?php echo $row['gender'] ?></option>
                <option value="male">male</option>
                <option value="female">female</option>
                <option value="others">others</option>
            </select><br>
            Select City <select name="city" >
                <option value="defc"><?php echo $row['city'] ?></option>
                <option value="Dehradun">Dehradun</option> 
                <option value="Delhi">Delhi</option>
                <option value="Jaipur">Jaipur</option>
            </select><br>

            <input type="submit" name="submit" value="Click here to update ">
        </form>

    </div>
</body>

</html>