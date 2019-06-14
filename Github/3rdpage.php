<!DOCTYPE html>
<html>
<head>
	<title>List of Items</title>
	<link rel="stylesheet" type="text/css" href="web.css">
    <style>
        .info
        {
            color: #445257;
            margin: 10px;
            margin-bottom: 10px;
        }
        .review-but
        {
            background-color: #C9A470;
            color: #445257 ;
            font-size: 20px;
            padding: 5px;
        }
    </style>
</head>
<body>
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
    

		<br><br>




    <div class="head1">Review Us</div><br><br>
    <table align="center">
    	<tr>
    		<th>
    			<img src="https://previews.123rf.com/images/mrcocoa/mrcocoa1605/mrcocoa160501383/55936792-hand-shake-icon-customer-service-icon-suitable-for-info-graphics-websites-and-print-media-and-interf.jpg" class="tab-image">
    		</th>
    		<th>
    			<img src="https://cdn2.iconfinder.com/data/icons/real-estate-60/300/04-512.png" class="tab-image">
    		</th>
    		<th>
    			<img src="https://png.pngtree.com/svg/20160713/a1290ba39d.svg" class="tab-image">
    		</th>
    	</tr>
    	<tr>
    		<th>
    			<form action="prod1.php">
                   <div class="info"> Our Service at store<br>
    				<button class="review-but" >Add Review</button>
    			</form>
    		</th>
    		<th>
    			<form action="prod2.php">
                   <div class="info">Infrastructure<br>
                    <button class="review-but" >Add Review</button>
                </form>
    		</th>
    		<th>
                <form action="prod3.php">
                   <div class="info"> Customer Care Support<br>
                    <button class="review-but" >Add Review</button>
                </form>
    			
    		</th>
    	</tr>
    	<tr>
    		<th>
    			<img src="https://vector.me/files/images/1/3/134498/parking_or_garage_clip_art.jpg" class="tab-image">
    		</th>
    		<th>
    			<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/49/Pictograms-nps-litter_receptacle.svg/1024px-Pictograms-nps-litter_receptacle.svg.png" class="tab-image" style="margin: 20px;">
    		</th>
    		<th>
    			<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJyv-cGtiw8y5v19BYj4AdkPY8V-w83vvimRTIvDcqFf-dAG9y" class="tab-image">
    		</th>
    	</tr>
    	<tr>
    		<th>
    			<form action="prod4.php">
                   <div class="info">Parking Service<br>
                    <button class="review-but" >Add Review</button>
                </form>
    		</th>
    		<th>
                <form action="prod5.php">
                   <div class="info">Cleanliness of Store<br>
                    <button class="review-but" >Add Review</button>
                </form>
            </th>
    		<th>
                <form action="prod6.php">
                   <div class="info">Any Other <br>
                    <button class="review-but" >Add Review</button>
                </form>
            </th>
    	</tr>
    </table>





    <footer class="foot-style">
        Contact us<br>
        <div class="info">info@wolesalerbazaar.com</div><br>
        <input type="email" name="subscribe" placeholder="Enter Your Email-Id" style="width: 500px; height: 30px; padding: 5px;">
        <button type="submit" class="subscribe">Subscribe</button>
    </footer>


</body>
</html>