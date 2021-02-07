<?php
include('conn.php');
?>
<?php


if (isset($_POST['username'])) {
    $username = $_POST['username'];
} else {
    $username = '';
}
$id2 = $_GET['id'];
$sql = "SELECT `name`, `email`, `gender`, `city` FROM `user` WHERE `id`= '$id2' ";
$result= mysqli_query($conn, $sql);

$row = $result->fetch_assoc();

$sql2 ="DELETE FROM `user` WHERE `id`='$id2'";
mysqli_query($conn,$sql2);

?>
<html>
<body>
    <div style="border:5px solid black; text-align:center; ">
        <form method="POST" action="">
            name <input type="text" name="username" placeholder="<?php  echo $row['name'] ?>" required><br>

            <input type="submit" name="submit" value=" write name again to Delete">
        </form>
    </div>
</body>

</html>