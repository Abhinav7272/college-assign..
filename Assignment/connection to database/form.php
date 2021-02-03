<?php
include('conn.php');
?>

<?php
// if (isset($_POST['submit'])) {
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

    if(isset($_POST['branch'])){
        $branch = $_POST['branch'];
	}
	else{
		$branch = ''; 
    }

    if(isset($_POST['year'])){
        $year  = $_POST['year'];
	}
	else{
		$year = ''; 
    }
    
    
    

    $sql = "INSERT INTO `user` (`name`, `email`, `gender`, `city`) VALUES ('$username', '$email', '$gender', '$city')";
    mysqli_query($conn, $sql);

    $sql = "INSERT INTO `details` (`username`, `branch`, `year`) VALUES ('$username', '$branch', '$year')";
    mysqli_query($conn, $sql);
// else {
//     echo "Please click submit button to submit the data..";
// }
?>

<html>

<head>
    <title>HTML Forms</title>
</head>

<body>
    <div style="border:5px solid black; text-align:center; ">
        <form method="POST" action="">
            name <input type="text" name="username" placeholder="Type Your Username" required><br>
            Email <input type="email" name="email" placeholder="Type Your E-mail" required><br>
            Select gender <select name="gender">
                <option value="male">male</option>
                <option value="female">female</option>
                <option value="others">others</option>
            </select><br>
            Select City <select name="city">
                <option value="Dehradun">Dehradun</option>
                <option value="Delhi">Delhi</option>
                <option value="Jaipur">Jaipur</option>
            </select><br>
            Select Branch <select name="branch">
                <option value="CSE">CSE</option>
                <option value="EC">EC</option>
            </select><br>
            year <input type="text" name="year" placeholder="input your passing year" required><br>

            <input type="submit" name="submit" value="Click Here To Submit Your Data">
        </form>

    </div>
    <div>
        <table>
            <tr>
                <td>Name</td>
                <td>Email</td>
                <td>Gender</td>
                <td>City</td>
                <td>Branch</td>
                <td>Year</td>
            </tr>
            <tr>
                <td><?php echo $username ?></td>
                <td><?php echo $email ?></td>
                <td><?php echo $gender ?></td>
                <td><?php echo $city ?></td>
                <td><?php echo $branch ?></td>
                <td><?php echo $year ?></td>
            </tr>
        </table>
    </div>
</body>

</html>