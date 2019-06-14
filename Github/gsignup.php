<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<link rel="stylesheet" type="text/css" href="mycss.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap-gri
	d.css">
	<script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> 
	<script src="http://threejs.org/examples/js/libs/stats.min.js"></script>
	<script>
 	particlesJS("particles-js", {
	  "particles": {
	    "number": {
	      "value": 380,
	      "density": {
	        "enable": true,
	        "value_area": 4000
	      }
	    },
	    "color": {
	      "value": "#ffffff"
	    },
	    "shape": {
	      "type": "circle",
	      "stroke": {
	        "width": 0,
	        "color": "#000000"
	      },
	      "polygon": {
	        "nb_sides": 5
	      },
	      "image": {
	        "src": "img/github.svg",
	        "width": 100,
	        "height": 100
	      }
	    },
	    "opacity": {
	      "value": 0.5,
	      "random": false,
	      "anim": {
	        "enable": false,
	        "speed": 1,
	        "opacity_min": 0.1,
	        "sync": false
	      }
	    },
	    "size": {
	      "value": 3,
	      "random": true,
	      "anim": {
	        "enable": false,
	        "speed": 40,
	        "size_min": 0.1,
	        "sync": false
	      }
	    },
	    "line_linked": {
	      "enable": true,
	      "distance": 150,
	      "color": "#ffffff",
	      "opacity": 0.4,
	      "width": 1
	    },
	    "move": {
	      "enable": true,
	      "speed": 6,
	      "direction": "none",
	      "random": false,
	      "straight": false,
	      "out_mode": "out",
	      "bounce": false,
	      "attract": {
	        "enable": false,
	        "rotateX": 600,
	        "rotateY": 1200
	      }
	    }
	  },
	  "interactivity": {
	    "detect_on": "canvas",
	    "events": {
	      "onhover": {
	        "enable": true,
	        "mode": "grab"
	      },
	      "onclick": {
	        "enable": true,
	        "mode": "push"
	      },
	      "resize": true
	    },
	    "modes": {
	      "grab": {
	        "distance": 140,
	        "line_linked": {
	          "opacity": 1
	        }
	      },
	      "bubble": {
	        "distance": 400,
	        "size": 40,
	        "duration": 2,
	        "opacity": 8,
	        "speed": 3
	      },
	      "repulse": {
	        "distance": 200,
	        "duration": 0.4
	      },
	      "push": {
	        "particles_nb": 4
	      },
	      "remove": {
	        "particles_nb": 2
	      }
	    }
	  },
	  "retina_detect": true
	});

 </script>

</head>
<body>
	<div class ="panel">
		<header>
			<div class="row">
				<div class="col-md-6" > Logo </div>
				<div class="col-md-6 heading"> My Website</div>
			</div>
		</header>
		<div class="row">
			<hr>
		</div>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4 signup">Signup</div>
			<div class="col-md-4"></div>
		</div>

		<div class="row">
			<div class="col-md-5"></div>
			<div class="col-md-2 box">
				<form method="POST" onsubmit="return validation()" name="RegForm" action="signupdb.php">
				
	    	
			        <label>Name:</label><br>
			        <input type="text" name="username" class="input-box1"><br>
			        
			        <br>
			        <label>Reg. No:</label><br>
			        <input type="number" name="rollno" class="input-box1"><br><br>
			        <label>Date Of Birth:</label><br>
			        <input type="date" name="age" class="input-box1"><br><br>
			        <label>Gender:</label><br>
			            <input type="radio" name="gender" value="male"> Male
			        	<input type="radio" name="gender" value="female"> Female
			        	<input type="radio" name="gender" value="other"> Other <br><br>
			        <label>Email:</label><br>
			        <input type="text" name="email" class="input-box1"><br><br>
			        <label>Password:</label><br>
			        <input type="Password" name="pwd" class="input-box1"><br><br>
			        <button class="register-button">Submit</button>
			        <br>
			        If already Registered?<a href="login.php">Login</a>



				</form>

			</div>
			<div class="col-md-5"></div>
		</div>

		<footer>
			<div class="row">
				<div class="col-md-4" ></div>
				<div class="col-md-4"> Contact Us
					<br>
					<form>
						<input type="email" name="query" placeholder="Enter Your Mail">
						<input type="Submit" name="subscribe">
					</form>

				</div>
				<div class="col-md-4"></div>
			</div>
		</footer>>
	</div>
	

</body>
</html>