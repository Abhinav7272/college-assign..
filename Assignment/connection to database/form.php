<?php
include('conn.php');
?>

<?php
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];
    $branch = $_POST['branch'];
    $year  = $_POST['year'];

    $sql = "INSERT INTO `user` (`name`, `email`, `gender`, `city`) VALUES ('$username', '$email', '$gender', '$city')";
    mysqli_query($conn, $sql);
    
    $sql = "INSERT INTO `details` (`username`, `branch`, `year`) VALUES ('$username', '$branch', '$year')";
    mysqli_query($conn, $sql);

}
else{
    echo "Please click submit button to submit the data..";
}
?>

<html>
    <head>
        <title>HTML Forms</title>
    </head>
<body>
<div  style="border:5px solid black; text-align:center; " >
<form method="POST" action="">
    name  <input type="text" name="username" placeholder="Type Your Username" required><br>
    Email <input type="email" name="email" placeholder="Type Your E-mail" required><br>
    gender <input type="text" name="gender" placeholder="input your gender" required><br>
    Select City <select name="city">
        <option value="Dehradun">Dehradun</option>
        <option value="Delhi">Delhi</option>
        <option value="Jaipur">Jaipur</option>
    </select><br>
    branch <input type="text" name="branch" placeholder="enter your branch " required><br>
    year <input type="text" name="year" placeholder="input your passing year" required><br
    >

    <input type="submit" name="submit" value="Click Here To Submit Your Data">
</form>
</div>
</body>
</html>