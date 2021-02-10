<?php
include('conn.php');
?>
<?php
if (isset($_POST['username'])) {
    $username = $_POST['username'];
} else {
    $username = '';
}
$sql = "SELECT `id`, `name`, `email`, `gender`, `city` FROM `user`";
$result = mysqli_query($conn, $sql);
?>
<table>
  <thead>
  <tr>
     <th>ID</th>
     <th>NAME</th>
     <th>email</th>
     <th>Gender</th>
     <th>city</th>
  </tr>
  </thead>
  <tbody>
    <?php
    while($row =$result->fetch_assoc()){ ?>
    <tr>
    <td><?php echo $row['id'] ?> </td>
    <td><?php echo $row['name'] ?> </td>
    <td><?php echo $row['email'] ?> </td>      
    <td><?php echo $row['gender'] ?> </td>
    <td><?php echo $row['city'] ?> </td>
    <td><a href="update.php?id=<?php echo $row['id']?>" ><input type="button" value="Edit" > </a></td>
    <td><a href="delete.php?id=<?php echo $row['id']?>"> <input type="button" value="delete"></a></td>

    </tr>
    <?php } ?>
  </tbody>
</table>