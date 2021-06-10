<!DOCTYPE html>
<html>
    <head>
        <style>
            body {
                margin: 0;
                padding: 0;
                background-image: url(68.jpeg);
                background-repeat: no-repeat;
                background-size: cover;
            }
        .container {
    position: relative;
    width: 300px; 
    display: inline-block;
    margin-left: 90px;
    margin-top: 10px;
    box-shadow: 0 1px 30px rgba(0,0,0,0.25), 0 6px 6px rgba(0,0,0,0.23);
   /* border-radius: 10px;*/
}

/*.abc{
    position: relative;
  width: 30%;
}*/
.image {
        opacity: 1;
        width: 400px;
        height:300px;
        transition: .5s ease;
        backface-visibility: hidden;
}
.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}

.container:hover .image {
  opacity: 0.3;
}

.container:hover .middle {
  opacity: 1;
}
/*.abc:hover.image{
    opacity: 0.3;
}
.abc:hover .middle {
  opacity: 1;
}*/
.text {
  background-color: #4CAF50;
  color: white;
  font-size: 16px;
  padding: 16px 32px;
}

Button {
    background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0px;
  border: none;
  cursor: pointer;
  width: 100%;
}
 button:hover {
  opacity: 0.8;
} 
 .blood {
          margin-left: 300px;
     margin-top: 200px;
        }
            .dropbtn{
                text-decoration: none;
                float: right;
                position: absolute;
                top:0px;
                right: 0px;
            }
</style>

    </head>
    <body>
         <a href="FirstPage.php" class= "dropbtn"><button >LOGOUT</button> </a>
    <div class="blood">
        <div class="container">
            <img src="p1.PNG" alt="Avatar" class="image" style="width:100%">
            <div class="middle"><button><a href='request.php'>REQUEST</a></button></div>
        </div>
        <div class="container">
             <img src="p2.PNG" alt="Avatar" class="image" style="width:100%">
            <div class="middle"><button><a href="stocks_of_hospital.php">STOCKS</a></button></div>
        </div>
    </div>
    </body>
</html>