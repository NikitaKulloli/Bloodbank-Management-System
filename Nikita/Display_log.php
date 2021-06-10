<?php
include("connect.php");
?>

<html>
<head>
    <style>
        body {
            background-image:url(55.png);
            background-repeat: no-repeat;
            background-position: center;
            background-size:cover;
            background-color: rgb(245, 226, 229);
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
<th>DONOR ID</th>
<th>DATE OF DONATION</th>
<th>BLOOD TYPES</th>


</tr>
<?php 
$sql = "call dns()";
$res= mysqli_query($conn, $sql);
if(mysqli_num_rows($res) != 0) {
    while($row = mysqli_fetch_assoc($res)) {
        echo "<tr>";  
        echo   "<td>".$row['d_id']."</td>" ;
        echo   "<td>".$row['date_of_donation']."</td>" ;
        echo "<td>".$row['blood_type']."</td>";
         
      
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