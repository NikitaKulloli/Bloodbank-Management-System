<?php
include("connect.php");
?>

<html>
<head>
    <style>
        body {
            background-image:url(52.jpg);
            background-repeat: no-repeat;
            background-position: center;
            background-size:contain;
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
<th>Hospital_ID</th>
<th>Hospital_name</th>
<th>hospital_addres</th>
<th>hospital_phno</th>

</tr>
<?php 
$sql = "call dnr()";
$res= mysqli_query($conn, $sql);
if(mysqli_num_rows($res) != 0) {
    while($row = mysqli_fetch_assoc($res)) {
        echo "<tr>";  
        echo   "<td>".$row['hospital_id']."</td>" ;
        echo   "<td>".$row['hospital_name']."</td>" ;
        echo "<td>".$row['hospital_address']."</td>";
        echo "<td>".$row['hospital_phno']."</td>"; 
      
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