<?php
include("connect.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <style>
            body{
                margin-left: 1000px;
                margin-top: 200px;
            }
            Button {
                   background-color: #4CAF50;
                   color: white;
                   padding: 16px 20px;
                   margin: 8px 0px;
                   border: none;
                   cursor: pointer;
                   width: 20%;
                   }
                  button:hover {
                  opacity: 0.8;
                     } 
            body{
                background-image: url(72.jpeg);
               background-repeat: no-repeat;
                background-size: cover;
            }
             a{
                text-decoration: none;
                background-color: #b80811;
                border: 2px solid red;
                padding: 10px;
                float: right;
                color: aliceblue;
                border-radius: 8px;
            }
        </style>
    </head>
    <body>
  <form action="" method="post">
        <h2>Enter the Logs details:</h2>
        <div>
            
             <b>Donor ID &emsp;</b>
            <input type="Number" id='d_id'  name="donor_id" required><br><br>
            
            <b>Date of Donation &emsp;</b>
            <input type="Date" id='dateofdonation'  name="Date_of_donation" required><br><br>
             
            <b>BLood Types &emsp;</b>
            <input type="text" id='bloodtypes' name="blood_types" required><br><br>
        
            <button name="insert">SUBMIT</button>
        </div></form>
        
        <?php
    if(isset($_POST['insert'])) {
         $dd_id = $_POST['donor_id'];
         $dod = $_POST['Date_of_donation'];
         $blood = $_POST['blood_types'];
      
         
       
    $query = "insert into donated_list values('$dd_id ','$dod','$blood')";
    $result = mysqli_query($conn, $query);
    if($result) 
    {
        echo "<script > alert ('data inserted')</script>";
    } else {
        echo "<script > alert ('data  not inserted')</script>";
    }
    }
    ?>
               <div> <a href="home_of_bloodbank.php">back</a></div>
        
    </body>
</html>