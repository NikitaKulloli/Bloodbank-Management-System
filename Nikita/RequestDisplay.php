<?php
include("connect.php");
?>

<html>
<head>
    <style>
        body {
            background-image: linear-gradient(to bottom, yellow,orange);
        }
    table {
            border-collapse: collapse;
            width: 70%;
            margin-left: 150px;
            margin-top: 50px;
            margin-bottom: 50px;
             font-family: arial, sans-serif; 
             
        }
        td, th {
           border: 2px solid #ddd;
           text-align: center;
           padding: 8px;
        }
        th {
            background-color: red;
            color: whitesmoke;
        }
    </style>
    </head>
<body>
<table>
<tr>
<th>Blood Type</th>
<th>Units</th>
<th>Hospital ID</th>

    
</tr>
<?php 
$sql = "select * from orders";
$res= mysqli_query($conn, $sql);
if(mysqli_num_rows($res) != 0) {
    while($row = mysqli_fetch_assoc($res)) {
        echo "<tr>";  
        echo   "<td>".$row['blood']."</td>" ;
        echo   "<td>".$row['units']."</td>" ;
        echo "<td>".$row['hospital']."</td>"; 
    
    } 
} 
else
{
    echo "0 results" ;
}
mysqli_close($conn);
        ?>
    </table>
     
    </body>
</html>