<?php
include("connect.php");
?>

<html>
<head>
    <style>
        body {
           //* background-image:url(55.png);*//
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
<th>BLOOD TYPE</th>
<th>STOCKS</th>
<!--<th>BLOOD TYPES</th>-->


</tr>

        <?php 
$sql = "select b.blood_type,count(*) as total from blood_types b,donors d where b.blood_type=d.blood_type group by b.blood_type;";
$res= mysqli_query($conn, $sql);
if(mysqli_num_rows($res) != 0) {
    while($row = mysqli_fetch_assoc($res)) {
        
        echo "<tr>";  
        echo "<td>".$row['blood_type']."</td>" ;
        echo "<td>" . $row['total'] . "</td>";
         echo"</tr>";
        
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