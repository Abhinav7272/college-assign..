<?php
include('conn.php');
?>

<?php
$id2 = $_GET['id'];
$sql = "SELECT `name` FROM `user` WHERE `id`= '$id2' ";
$result= mysqli_query($conn, $sql);

$row = $result->fetch_assoc();
$sql2 ="DELETE FROM `user` WHERE `id`='$id2'";
mysqli_query($conn,$sql2);
header("Location:editanddelete.php"); /* Redirect browser */
?>
<!-- <html>
<body>
    <div style="border:5px solid black; text-align:center; ">
        <form method="POST" action="editanddelete.php">
            name <input type="text" name="username"  value="<?php  echo $row['name'] ?>" placeholder="<?php  echo $row['name'] ?>" required><br>

            <input type="submit" name="submit" value=" confirm to delete ">
        </form>
    </div>
</body>

</html> -->