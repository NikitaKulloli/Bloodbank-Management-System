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
<th>D_ID</th>
<th>D_NAME</th>
<th>D_PHONE</th>
<th>D_DOB</th>
<th>gender</th>
<th>ADDRESS</th>
    <th>AGE</th>
    <th>WEIGHT</th>
    <th>BP</th>
    <th>HEMOGLOBINE</th>
    <th>BLOOD_TYPE</th>
    <th>UNITS</th>
</tr>
<?php 
$sql = "call dn()";
$res= mysqli_query($conn, $sql);
if(mysqli_num_rows($res) != 0) {
    while($row = mysqli_fetch_assoc($res)) {
        echo "<tr>";  
        echo   "<td>".$row['d_id']."</td>" ;
        echo   "<td>".$row['d_name']."</td>" ;
        echo "<td>".$row['d_phno']."</td>"; 
        echo "<td>".$row['d_dob']."</td>"; 
        echo "<td>".$row['gender']."</td>";
        echo "<td>".$row['d_address']."</td>";
        echo "<td>".$row['age']."</td>";
        echo "<td>".$row['weight']."</td>";
        echo "<td>".$row['bp']."</td>";
        echo "<td>".$row['hemoglobine']."</td>";
        echo "<td>".$row['blood_type']."</td>";
        echo "<td>".$row['units']."</td>";
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