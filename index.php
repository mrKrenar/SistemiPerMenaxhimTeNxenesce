<!DOCTYPE html>
<html lang="en">
<head>
	<title>SMN</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>

	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">

	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body>
	<?php
	include("header.php");
	?>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-85 p-b-20">
				<form class="login100-form validate-form">
					
					<span class="login100-form-avatar">
						<img src="images/avatar-01.jpg" alt="AVATAR">
					</span> 

					<div class=" m-t-85 m-b-35">
						Ky sistem mundeson kyqjen e profesoreve dhe stafit te shkolles, dhe notimin e nxenesve.
					</div>

					<div class="container-login100-form-btn m-t-85 m-b-35">
						<button class="login100-form-btn" onClick= window.open('login.php')>
							Kyqu
						</button>
					</div>
					<div class="container-login100-form-btn m-t-50 m-b-50">
						<button class="login100-form-btn" onClick= window.open('signup.php')>
							Regjistrohu
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>

<?php
include("footer.php");
?>
</body>
</html>