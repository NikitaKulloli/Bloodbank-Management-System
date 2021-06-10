<?php
include("connect.php");
?>

<!DOCTYPE html>
<html>

<head>
<title> </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display:none;
    margin-top: 5px;
    position: relative;
   
    }
    body {
    font-family: Arial, Helvetica, sans-serif;
    animation: name 4s infinite;
    background-color:  #f8e5e6;
    background-image: url(64.jpeg);
    /*background-repeat: no-repeat;*/
    background-size: cover;
    }
   /* @keyframes name {
        0% {
            background: url(342.PNG);
            background-repeat: no-repeat;
        }
        20% {
            background: url(Blood%20Donation%20-%20Experience%20in%20Style1.jpeg);
            background-repeat: no-repeat;
        }
        100% {
            background: url(1245.png);
            background-repeat: no-repeat;
        }
        
    }*/
/*@keyframesll-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 30px 40px;
  /*margin: 20px 0px;*/
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 20%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  } 
  .cancelbtn {
     width: 100%;
  }
}
    .blood {
        margin: 30px;
        margin-left: 50px;
        margin-top: 100px;
    }
    /*body{
      margin-top: 300px;
      margin-left:470px
    }*/
    .acb{
        margin-left: 500px;
    }
</style>
</head>

<body>

<!--<h2 class="w3-center">Automatic Slideshow</h2>-->

<div class="w3-content w3-section" style="max-width:800px">
  <img class="mySlides" src="342.PNG" style="width:100%">
  <img class="mySlides" src="21.jpeg" style="width:100%">
  <img class="mySlides" src="23.jpeg" style="width:100%">
  <img class="mySlides" src="10.jpeg" style="width:100%">
  <img class="mySlides" src="hCapture2.PNG" style="width:100%">
</div>
     <div class="acb">
     <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;" class="blood">HOSPITAL LOGIN</button> 
<button onclick="document.getElementById('id02').style.display='block'" style="width:auto;" class="blood">BLOODBANK LOGIN</button> </div>
<!-- HOSPITAL LOGIN -->
<div id="id01" class="modal"> 
  
  <form class="modal-content animate" action="hospital_login.php" method="post">
      <?php if(isset($_GET['error'])){
        $get = $_GET['error'];?>
    <?php echo "<script type='text/javascript'> alert('$get')</script>"; ?>
    <?php   } ?>
      
    <div class="imgcontainer">
      <img src="hospital123.png" alt="Avatar" class="avatar">
         <!--<h4>HOSPITAL LOGIN</h4>-->
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
        
       <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<!--BLOODBANK LOGIN -->
<div id="id02" class="modal"> 
  
  <form class="modal-content animate" action="bloodbank_login.php" method="post">
    <div class="imgcontainer">
      <img src="1245.png" alt="Avatar" class="avatar">
       <!-- <h4>BLOODBANK LOGIN</h4> -->
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
        <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

<div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>


<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
<script>
    // Get the modal
var modal = document.getElementById('id01');
var modal = document.getElementById('id02');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

    
    
    </script>
</body>
</html>
