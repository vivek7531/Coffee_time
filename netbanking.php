<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COFFEE TIME</title>
    <link rel="stylesheet" href="netbanking.css">
</head>
<body>
    <div class="conn">
        <div class="navbar">
            <img  class="logo" src="images/logo111.png">
        </div>
        <div class="box">
        <form action="sucess.php">
        <h1><b><u>Please Login</u></u></b></h1>
            <label>Select Bank Name</label>
                 <select name="bank">
                  <option value="AXIS">AXIS BANK</option>
                    <option value="HDFC">HDFC BANK</option>
                     <option value="SBI ">SBI BANK</option>
                     <option value="ICICI">ICICI BANK </option>
                     <option value="KOTAK">KOTAK BANK</option>
                 </select><br>

             <label>USERNAME::</label>
             <input type="text" name="username" placeholder="username" required>    <br><br>

             <label>PASSWORD::</label>
             <input type="password" name="password" placeholder="********" required>
                <div class="button">
                <input type="submit" value="Login">
            </form>
          </div>

        </div> 
        <div class="pho">
            <img src="images/net.PNG">
        </div>
    </div>
    </body>
</html>
