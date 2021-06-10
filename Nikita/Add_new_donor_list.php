<?php
include("connect.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <style>
            body{
                margin-left:700px;
                margin-top:100px;
                background-image: url(47.png);
                background-repeat: no-repeat;
                background-size: 535px
                
            }
               Button {
                   background-color: #b80811;
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
                background-color: #c0b9b9;
                
            }
            input::-webkit-outer-spin-button,
              input::-webkit-inner-spin-button {
           appearance: none;
            margin: 0;
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
        <h1>Add New Donor</h1>
        <div class="abc">
            <form action="" method="post">
               <!-- <b>Donor ID &emsp;</b>
                <input type ="Number" id="d_id" placeholder=" " name="d_id"  required><br><br> -->


                  
                <b>Full Name &emsp;</b>
                <input type ="text" id="name" placeholder=" " name="name"  required><br><br>

                
                  <b>Mobile Number &emsp;</b>
                <input type="number" id="mobile_number" name="phno" placeholder=" "required><br><br>
                
                <b>Date of Birth &emsp;</b>
                <input type="date"  name="date_of_birth" required><br><br>
                
              <b>Gender&emsp;</b>
               <input type="text" id="gender" name="gender" required><br><br>
                

                <b>Complete Address &emsp;</b>
                <input type="text" id="address" name="address" required><br><br>
                
                <b>Age &emsp;</b>
                <input type="number" id="age" name="age" placeholder=" " required><br><br>
                
                <b>Weight &emsp;</b>
                <input type ="number" id="weight" name="weight" placeholder="    " required><br><br>
                
                <b>Blood Pressure &emsp;</b>
                <input type ="text" id="bp" name="bp" placeholder=" " required><br><br>

                <b>Hemoglobine &emsp;</b>
                <input type="number" id="hemoglobine" name="hemoglobin" placeholder=" " required><br><br>
                
                <b>Blood Group &emsp;</b>
                    <input type="text" id="Blood_type" name="bloodtype" placeholder=" " required><br><br>
                
                <b>Units &emsp;</b>
                    <input type="Number" id="unit" name="units" placeholder=" " required><br><br>
                
                 <button name="insert">SUBMIT</button>
            </form>
        </div>
    <?php
       if(isset($_POST['insert'])) {
       $name = $_POST['name'];
       $phno = $_POST['phno'];
       $date_of_birth = $_POST['date_of_birth'];
       $gender = $_POST['gender'];
       $address = $_POST['address'];
       $age = $_POST['age'];
       $weight = $_POST['weight'];
       $bp = $_POST['bp'];
       $hemoglobin = $_POST['hemoglobin'];
       $boodtype = $_POST['bloodtype'];
      $unit = $_POST['units'];
        
       
    $query = "insert into donors values(' ','$name','$phno','$date_of_birth','$gender','$address','$age','$weight','$bp',' $hemoglobin','$boodtype','$unit')";
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