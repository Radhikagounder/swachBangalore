<?php
include("connection.php");
$id=$_GET['rn'];
$query=" DELETE FROM LOCATION  WHERE ID ='$id'";
$data = mysqli_query($conn, $query);
if($data)
{
  echo "<font color='green'> record deleted from table";
}
else {
  echo "<font color='red'> deleted process failed";
}

 ?>
