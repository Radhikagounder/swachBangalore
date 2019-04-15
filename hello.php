<?php include('server.php') ?>
<?php
while ($query_executed = mysqli_fetch_assoc ($results)) 
    { 
        // these four line is for four column 
        echo $query_executed['id'].' '; 
        echo $query_executed['name'].' '; 
        echo $query_executed['email'].' '; 
        echo $query_executed['address'].'<br>'; 
    }
?>