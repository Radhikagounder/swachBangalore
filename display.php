<?php
include("connection.php");
error_reporting(0);

$query="SELECT * FROM LOCATION";
$data= mysqli_query($conn,$query);
$total= mysqli_num_rows($data) ;


if($total!=0)
{
?>
<table align="center" border="1px" style="width:600px; line-height:40px">
  <tr>
    <th>id</th>
    <th> name</th>
    <th>email</th>
    <th>address</th>
  </tr>

<?php
   while($result= mysqli_fetch_assoc($data))
   {
          echo "<tr>
            <td>".$result['id']."</td>
            <td> ".$result['name']. " </td>
            <td>".$result['email']."</td>
            <td>".$result['address']."</td>
            <td><a href='delete.php?rn=$result[id]' onclick=' return checkdelete()'>delete</a></td>
          </tr>";

   }
}
else {

  echo "no";
}

/*if(total!=0)
{
  while($result= mysqli_fetch_assoc($data))
  {
    echo $result['id']." ".$result['name']." ".$result['email']." ".$result['address']."<br/>";

  }
}
else {
echo "no record";  # code...
}
*/
?>
</table>
<script>
function checkdelete()
{
  return confirm(' are sure want to delete and the place is cleaned');


}
</script>
