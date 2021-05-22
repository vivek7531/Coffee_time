<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> COFFEE TIME</title>
      <link rel="stylesheet" href="register.css">
</head>
<body>
    <div class="conn">
        <div class="navbar">
            <img src="images/Capture-removebg-preview (2).png" class="logo">
            <ul>
            <li><a href="index.php">Home</a> &emsp; &emsp;|</li>
             <li><a href="coffee.php">Coffee's </a>&emsp; &emsp;|</li>
             <li><a href="accessories.php">Accessories </a> &emsp;|</li>
             <li><a href="login.php">&ensp;Account</a> &emsp;|</li>
             <li><a href="about.php">About</a>&emsp;&emsp;|</li>
              <li><a href="cart.php">Cart</a></li>
           </ul>
        </div>

         <div class="loginbox">
           <img  class="avatar" src="images/avatar.png" alt="avatar">
            <h1>Register Here</h1>

<?php
session_start();
include('config.php');
$result=false;
$result_not=false;
if (isset($_POST['NAME'])) {
    $NAME=$_POST['NAME'];
    $USERNAME = $_POST['USERNAME'];
    $MOBILE=$_POST['MOBILE'];
    $PASSWORD = $_POST['PASSWORD'];
    $query = $connection->prepare("SELECT * FROM register WHERE USERNAME='$USERNAME'");
    $query->bindParam("USERNAME", $USERNAME, PDO::PARAM_STR);
    $query->execute();
    if ($query->rowCount() > 0) {
        echo '<p class="error"> Username is already registered.!</p>';
    }
    if ($query->rowCount() == 0) {
        $query = $connection->prepare("INSERT INTO `register` (`NAME`, `USERNAME`, `MOBILE`, `PASSWORD`) VALUES ('$NAME', '$USERNAME','$MOBILE','$PASSWORD')");
        $query->bindParam("Name",$NAME,PDO::PARAM_STR);
        $query->bindParam("USERNAME", $USERNAME, PDO::PARAM_STR);
        $query->bindParam("MOBILE", $MOBILE, PDO::PARAM_STR);
        $query->bindParam("PASSWORD", $PASSWORD, PDO::PARAM_STR);
        $result = $query->execute();
        if($result== true)
        {
            $result=true;
        }
        else
        {
             $result_not=true; 
        }
    }
}
                  if ($result== true) {
                    echo '<p class="success">Your registration was successful!</p>';
                    
                } 
                if($result_not== true) {
                    echo '<p class="error">Something went wrong!</p>';
                }
            
 ?>

              <form action="#" method="post" autocomplete="off">
                 <p>Name</p>
                 <input type="text" name="NAME" placeholder="Enter Name" required>
                 <p>Username</p>
                 <input type="text" name="USERNAME" placeholder="Enter USERNAME" required>
                 <p>Mobile Number</p>
                 <input type="text" name="MOBILE" placeholder="Enter Mobile Number" required>
                 <p>Password</p>
                 <input type="PASSWORD" name="PASSWORD" id="pass" placeholder="Enter PASSWORD" required>
                 <input type="checkbox" onclick="myFunction()">Show Password 

                <script>
                    function myFunction() {
                        var x = document.getElementById("pass");
                        if (x.type === "password") {
                        x.type = "text";
                        } else {
                        x.type = "password";
                        }
                        }
                </script>


                 <input type="submit" value="Submit">
              </form>
        </div>
    </div>
</body>
</html>