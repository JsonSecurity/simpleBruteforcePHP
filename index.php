<?php session_start();?>
<!DOCTYPE html>
<html>
	<head>
		<title>BruteForceLab</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>	
	<div class="container mt-5">		
		<div class="card" style="width: 18rem; margin-left:2rem;">
		  <div class="card-body">
		    <h2 class="card-title text-center p-4">Login</h2>
		    	<form action="login.php" method="POST">
					<div class="row g-3 align-items-center">
					  <div class="col-12">
					  	<input type="text" name="user" placeholder="Username" class="form-control">
					  </div>
					  <div class="col-12">										
					    <input type="password" name="pass" placeholder="Password" class="form-control">
					  </div>
					  <div class="col-12">
		                <button class="btn btn-primary" type="submit" style="width: 100%;" >Log in</button><br>
		              </div>
		              <div class="col-12 text-center">
		              	<?php
		              		if (isset($_SESSION['error'])){
		              			echo $_SESSION['error'];
		              			unset($_SESSION['error']);
		              		}
		              	?>
		              </div>
					</div>
		        </form>
		  </div>
		</div>
	</div>
	</body>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
