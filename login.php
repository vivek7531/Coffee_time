<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="login.css">
    
</head>
<body>
    <div class="conn">
        <div class="navbar">
            <img src="images/Capture-removebg-preview (2).png" class="logo">
            <ul>
            <li><a href="index.php">Home</a> &emsp; &emsp;|</li>
             <li><a href="coffee.php">Coffee's </a>&emsp; &emsp;|</li>
             <li><a href="accessories.php">Accessories </a> &emsp;|</li>
             <li><a href="about.php">&ensp;About</a> &emsp;|</li>
             <li><a href="cart.php">Cart</a>&emsp;&emsp;|</li>
             <li><a href="login.php">Account</a></li>
           </ul>
        </div>
           <div class="loginbox">
            <img  class="avatar" src="images/avatar.png" alt="avatar">
              <h1>Login Here</h1>

              <?php
                session_start();
                include('config.php');
                if (isset($_POST['USERNAME'])) 
                {
                $USERNAME = $_POST['USERNAME'];
                $PASSWORD = $_POST['PASSWORD'];
                $query = $connection->prepare("SELECT * FROM register WHERE USERNAME='$USERNAME'");
                $query->bindParam("USERNAME", $USERNAME, PDO::PARAM_STR);
                $query->execute();
                $result = $query->fetch(PDO::FETCH_ASSOC);
                if (!$result)
                 {
                     echo '<p class="error">Username password combination is not found please Register!</p>';
                 } 
                 else 
                   {
                     if($PASSWORD==$result['PASSWORD'])
                      {
                             $_SESSION['user_id'] = $result['USERNAME'];
                             echo '<p class="success">Congratulations, you are logged in!</p>';
                      }
                     else
                      {
                      echo '<p class="error">Invalid Password!!</p>';
                      }
                   }      
                }

            ?>

              <form action="#" method="post">
                  <p>Username</p>
                  <input type="text" name="USERNAME" placeholder="Enter Username" required>
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
                
                  <input type="submit" value="Login">
                  <a href="#">Lost your password?</a><br>
                  <a1 href="#">Don't have an account?....</a1>
                  <a href="register.php"><b> Register Here</b></a>
              </form>
           </div>
        </div>
    </div>
    
</body>
</html>8