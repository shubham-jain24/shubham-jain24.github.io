<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="web.css">
    <script>
        function validation()                                    
        {
            var email = document.forms["RegForm"]["email"];    
            var pwd = document.forms["RegForm"]["pwd"];

    if (email.value == "")                                   
    { 
        window.alert("Please enter a valid e-mail address."); 
        email.focus(); 
        return false; 
    }
   
    if (email.value.indexOf("@", 0) < 0)                 
    { 
        window.alert("Please enter a valid e-mail address."); 
        email.focus(); 
        return false; 
    } 
   
    if (email.value.indexOf(".", 0) < 0)                 
    { 
        window.alert("Please enter a valid e-mail address."); 
        email.focus(); 
        return false; 
    } 
   
    if (pwd.value == "")                        
    { 
        window.alert("Please enter your password"); 
        pwd.focus(); 
        return false; 
    } 
   
    return true; 
}
    </script>
</head>
<body background="background.jpg" style="background-attachment: fixed;">
    <header class="logo">
        <img src="Logo.png" width="15%" style="padding: 10px;">
        <span class="heading">Wholesale Bazaar</span>
    </header>



    <div class="box">
        <form method="POST" onsubmit="return validation()" name="RegForm" action="logindb.php">
            <div class="box-heading"> LOGIN </div>

            <label class="lab">User Name:</label><br>
            <input type="text" name="name" style="width: 250px; border-radius: 5px; height: 25px;" placeholder="Username" value=<?php echo Cookie_val(1) ?> ><br><br>
            <label class="lab">Password:</label><br>
            <input type="Password" name="pwd" style="width: 250px; border-radius: 5px; height: 25px;" placeholder="Password" value = <?php echo Cookie_val(2) ?>><br><br>
            <input type="checkbox" name="remuser">Remember Password<br><br>
            <button class="button1">Login</button><br><br>
            <label>If new User <a href="signup.php">Register</a></label>
        </form>
    </div>
    <div class="content">
        <div class="about">About Us</div>
         The market for the sale of goods to a retailer. That is, a wholesaler receives large quantities of goods from a manufacturer and distributes them to stores, where they are sold to consumers. A wholesaler is generally able to extract a better price from the manufacturer because it buys so many good relative to an individual retailer. In theory, this enables the retailer to sell the good at a better price for the consumer. See also: Economies of scale.
    </div>
    <br><br>
    <center><br><br><br>
    <div class="head1">Description of our Site</div>
    <div>
        <video width="50%" controls>
        <source src="video.mkv">
        </video>
    </div>

    <audio controls>
      <source src="audio.mp3">
    </audio>
    </center>


    <footer class="foot-style">
        Contact us<br>
        <div class="info">info@wolesalerbazaar.com</div><br>
        <input type="email" name="subscribe" placeholder="Enter Your Email-Id" style="width: 500px; height: 30px; padding: 5px;">
        <button type="submit" class="subscribe">Subscribe</button>
    </footer>

</body>

<?php
    function Cookie_val($ch){
    if ($ch==1)
    {   
        if (isset($_COOKIE['UName']))
        {
            return $_COOKIE['UName'];
        }
        else 
            return;
    }
    else
    {
        if (isset($_COOKIE['Pwd']))
        {
            return $_COOKIE['Pwd'];
        }
        else 
            return;
    }
    }
?>

</html>