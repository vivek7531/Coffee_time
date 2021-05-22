<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COFFEE TIME</title>
    <link rel="stylesheet" href="card.css">
</head>
<body>
    <div class="conn">
        <div class="navbar">
            <img  class="logo" src="images/logo111.png">
        </div>
        <div class="box">
        <form action="sucess.php">
        <h1><b><u>Please Enter The Card Detail's</u></u></b></h1>
            <label>Card Type</label>
                 <select name="ct">
                  <option value="VISA">VISA</option>
                    <option value="RUPAY">RUPAY</option>
                     <option value="MASTERCARD">MASTERCARD</option>
                 </select><br>

            <label>Card Number</label>
            <input type="text" placeholder="XXXX-XXXX-XXXX-XXXX" required><br>

             <label>Expiry</label>
             <select name="month">
                   <option value="month">Month</option>
                   <option value="01">01</option>
                   <option value="02">02</option>
                   <option value="03">03</option>
                   <option value="04">04</option>
                   <option value="05">05</option>
                   <option value="06">06</option>
                   <option value="07">07</option>
                   <option value="08">08</option>
                   <option value="09">09</option>
                   <option value="10">10</option>
                   <option value="11">11</option>
                   <option value="12">12</option>
               </select>

               <select name="year">
                <option value="01">Year</option>
                <option value="02">2021</option>
                <option value="03">2022</option>
                <option value="03">2023</option>
                <option value="03">2024</option>
                <option value="03">2025</option>
                <option value="03">2026</option>
                <option value="03">2027</option>
                <option value="03">2028</option>
                <option value="03">2029</option>
                <option value="03">2030</option>
                <option value="03">2031</option>
               </select>


             <label>CVV</label>
             <input type="text" placeholder="***" required><br>

             <label>Name On Card</label>
             <input type="text" name="cname" placeholder="Card Holdername" required><br><br>

             
             <input type="checkbox" checked="checked" name="radio">
             <label class="container">We'll remember your card details for next future payments.
            <span class="checkmark"></span>
             </label>
                <div class="button">
                <input type="submit" value="Pay">
                 </div>
                    </form>


      </div>
      <div class="pho"> <img src="images/crd.png"> </div>
     

    </div>
    </body>
</html>
