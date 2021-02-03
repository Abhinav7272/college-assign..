<?php
include('conn.php');
?>
<?php
if (isset($_POST['username'])) {
    $username = $_POST['username'];
} else {
    $username = '';
}
$sql = "SELECT `id`, `name`, `email`, `gender`, `city` FROM `user` WHERE `name`= '$username'";
$result = mysqli_query($conn, $sql);
while ($row = $result->fetch_assoc()) {
    echo "id:   " .$row["id"] . "- Name:   " . $row["name"] . "    -email:   " . $row["email"]  ." -gender: " . $row["gender"] ." -city: " . $row["city"];
    echo "<br>";
}
?>
<html>
<body>
    <div style="border:5px solid black; text-align:center; ">
        <form method="POST" action="">
            name <input type="text" name="username" placeholder="Type Your Username" required><br>

            <input type="submit" name="submit" value="Click Here To search">
        </form>
    </div>
</body>

</html>