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

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Enter email">
						<input class="input100" type="email" name="email">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
						<input class="input100" type="password" name="pass">
						<span class="focus-input100" data-placeholder="Fjalekalimi"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Kyqu
						</button>
					</div>

					<ul class="p-t-190">
						<li>
							<span class="txt1">
								Nuk keni llogari?
							</span>

							<a href="signup.php" class="txt2">
								Hape nje te re!
							</a>
						</li>
					</ul>
				</form>
			</div>
		</div>
	</div>

<?php
include("footer.php");
?>

</body>
</html>