<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Brezplačni tekaški priročnik vam bo pomagal odgovoriti na vprašanja, kako postati uspešen tekač. Preverite, kaj svetujejo vrhunski slovenski atleti!">
    <link rel="shortcut icon" href="favicon.ico">

    <title>Brezplačni tekaški priročnik - Hervis</title>

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

  </head>
<body>

	<!--
		<?php
		print_r($_POST);
		?>
	 -->


	<header style="height: 75px;">
		<div class="header">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<img src="images/logo.png" class="logo" alt="">
					</div>
					<div class="col-md-6">
						<!--<nav class="navbar">
						    <div class="navbar-header">
						      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse-1" aria-expanded="false">
						      </button>
						    </div>

						    <div class="collapse navbar-collapse" id="bs-navbar-collapse-1">
						      <ul class="nav navbar-nav navbar-right">
						        <li><a href="#">Teniški priročnik</a></li>
						        <li><a href="#">Teniški trening</a></li>
						      </ul>
						  </div>
						</nav>-->
					</div>
				</div>
			</div>
		</div>
	</header>

	<div class="main" id="kaj-najdete-v-prirocniku">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>Hvala za zaupanje!</h2>
					Priročnik lahko <b>takoj prevzamete</b> s klikom na <b>spodnjo povezavo:</b> </br> </br><a href="http://www.dosezicilj.si/Tekaski_prirocnik_Hervis.pdf">TEKAŠKI PRIROČNIK</a>

					<br>
					<br>

					<?php
					if(isset($_POST['submit'])) {
						$to = "jakablazon@gmail.com";
						$subject = "New Subsrciber";
						$email_field = $_POST['email'];

						$body = "Here are lead's data:\n\n Email: $email_field\n";

						echo "Priročnik vam bomo poslali tudi na vaš e-mail. Želimo vam veliko uspeha pri vadbi!";
						mail($to, $subject, $body);
					} else {
						echo "Ooops, napaka! Prosim poiskusite ponovno.";
					}
					?>

				</div>
			</div>
		</div>
	</div>

</body>
</html>
Add Comment
