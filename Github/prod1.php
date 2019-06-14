<!DOCTYPE html>
<html>
<head>
	<title>List of Items</title>
	<link rel="stylesheet" type="text/css" href="web.css">
    <style>
    .box2
    {
        border: 1px solid black;
        color: #C9A470;
        margin-left: 37%;
        margin-right: 37%;
        background-color: black;
        padding: 10px;
        margin-top: 100px;

    }
    .lab
    {
        font-size: 20px;
        font-family: 'Indie Flower', cursive; 
    }
    </style>
</head>
<body background="https://i.ebayimg.com/images/g/FR8AAOSwQJ5UUFgL/s-l300.jpg" style="background-attachment: fixed;">
	<header class="logo">
        <img src="Logo.png" width="15%" style="padding: 10px;">
        <span class="heading">Wholesale Bazaar</span>
        <form action="login.php">
            <button style="background-color: black; float: right; font-size: 20px; color: white;
            padding: 10px; margin-right: 10px;">Logout</button>
        </form>
        
        <span style="float: left; text-align: left; padding: 5px;">
        <?php
        session_start();
        if (isset($_SESSION['SName'])){
            //$username = $_SESSION['SName'];
            echo "<h2>Welcome, ".$_SESSION['SName']."!</h2>";
        }
        ?>
    </span>

    
    </header>

    <center>
        <br><br><br><br>
        <div class="head1" >Our Services At Store</div>
        <br><br><br><br>
        <img src="https://image.flaticon.com/icons/png/512/114/114245.png" class="tab-image main_image">
        
        
    </center>
        <div class="box2">
     <form method="POST" onsubmit="return validation()" name="RegForm" action="truckdb.php">
        
        
        <label class="lab">Email:</label><br>
        <input type="email" name="email" class="input-box"><br><br>
        <label class="lab">Enter Your View:</label><br>
        <textarea name="review" rows="10" cols="35"></textarea><br><br>
        <button class="register-button">Submit</button>
        <br>
    </form>
</div>





    <footer class="foot-style">
        Contact us<br>
        <div class="info">info@wolesalerbazaar.com</div><br>
        <input type="email" name="subscribe" placeholder="Enter Your Email-Id" style="width: 500px; height: 30px; padding: 5px;">
        <button type="submit" class="subscribe">Subscribe</button>
    </footer>


</body>
</html>