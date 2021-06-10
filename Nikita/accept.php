<?php
include("connect.php");
    $request=$_GET['rn'];

    $query="UPDATE orders SET request='ACCEPTED' where request_id='$request'";
    $query_run=mysqli_query($conn,$query);
    
    if($query_run)
    {
           header("Location: requestorders.php");
    }
?>