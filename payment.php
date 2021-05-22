<?php
            if ($_SERVER['REQUEST_METHOD']=="POST"){
                
                if($_POST['pay']=="card"){
                    header('location: card.php');
                } 
                elseif($_POST['pay']=="net"){
                    header('location: netbanking.php');
                } 
                elseif($_POST['pay']=="upi"){
                    header('location: upi.php');
                } 
                else{
                    header('location: order.php');
                } 

            }
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COFFEE TIME</title>
    <link rel="stylesheet" href="payment.css">
</head>
<body>
    <div class="conn">
        <div class="navbar">
            <img  class="logo" src="images/logo111.png">
        </div>
        <div class="box">
        <h1><b><u>Please Select Method Of Payment</u></b></h1>
        <form method="post" action=#>
            <label class="container">DEBIT CARD OR CREDIT CARD
                <input type="radio" checked="checked" name="pay" value="card">
                <span class="checkmark"></span>
           </label>
           <label class="container">NET BANKING
               <input type="radio" name="pay" value="net">
               <span class="checkmark"></span>
           </label>
           <label class="container">UPI
               <input type="radio" name="pay" value="upi">
               <span class="checkmark"></span>
           </label>
           <label class="container">CASH ON DELIVERY
               <input type="radio" name="pay" value="cod">
               <span class="checkmark"></span>
           </label>   
             <div class="button">
                   <input type="submit" name="next" value="Next">
             </div>
        </form>

     

      </div>

    </div>
    </body>
</html>