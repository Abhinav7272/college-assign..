<?php
include('conn.php');
?>

<?php
// if (isset($_POST['submit'])) {
if (isset($_POST['username'])) {
    $username = $_POST['username'];
} else {
    $username = '';
}

if (isset($_POST['email'])) {
    $email = $_POST['email'];
} else {
    $email = '';
}
if (isset($_POST['gender'])) {
    $gender = $_POST['gender'];
} else {
    $gender = '';
}
if (isset($_POST['city'])) {
    $city = $_POST['city'];
} else {
    $city = '';
}
$sql = "INSERT INTO `user` (`name`, `email`, `gender`, `city`) VALUES ('$username', '$email', '$gender', '$city')";
mysqli_query($conn, $sql);

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
            Select City <select name="city">
                <option value="Dehradun">Dehradun</option>
                <option value="Delhi">Delhi</option>
                <option value="Jaipur">Jaipur</option>
            </select><br>
            Select gender
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label>
            <input type="radio" id="other" name="gender" value="other">
            <label for="other">Other</label><br>

            <input type="submit" name="submit" value="Click Here To Submit Your Data">
        </form>

    </div>
</body>

</html>