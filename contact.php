<?php include_once "config.php"; ?>
<!DOCTYPE HTML>

<html>
	<head>
		<?php include_once "template/head.php"; ?>
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<div class="logo"><a href="index.php">Universe key <span>by Andrej</span></a></div>
				<a href="#menu">Menu</a>
			</header>

		<?php include_once "template/navbar.php"; ?>

		<!-- One -->
			<section id="One" class="wrapper style3">
				<div class="inner">
					<header class="align-center">
					
						<h2>Contact</h2>
					</header>
				</div>
			</section>

		<!-- Main -->
			<div id="main" class="container">

				<p>You want one of your favorite quotes to be published on my page? All you have to do is send me a message about it. </p>

					
					<div class="row 200%">
						<div class="6u 12u$(medium)">


							<!-- Form -->
								<h3>Contact me</h3>

								<form method="post" action="#">
									<div class="row uniform">
										<div class="6u 12u$(xsmall)">
											<input type="text" name="name" id="name" value="" placeholder="Name" />
										</div>
										<div class="6u$ 12u$(xsmall)">
											<input type="email" name="email" id="email" value="" placeholder="Email" />
										</div>
										<!-- Break -->
										<div class="12u$">
											<div class="select-wrapper">
												<select name="kategorija" id="kategorija">
													<option value="0">- Category -</option>

													<?php 

														$query = $connect->prepare("select * from kategorija");
														$query->execute();
														$result = $query->fetchAll(PDO::FETCH_OBJ);
														foreach($result as $row):

													?>

													<option value="<?php echo $row->sifra; ?>"><?php echo $row->naziv; ?></option>

													<?php endforeach; ?>
												</select>
											</div>
										</div>
										<!-- Break -->
									
										<!-- Break -->
										<div class="6u 12u$(small)">
											<input type="checkbox" id="copy" name="copy">
											<label for="copy">Email me a copy of this message</label>
										</div>
										
										<!-- Break -->
										<div class="12u$">
											<textarea name="message" id="message" placeholder="Enter your message" rows="6"></textarea>
											<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">

</form>
										</div>
										<!-- Break -->

										<div class="12u$">

											<ul class="actions">

												<li><input type="submit" value="Send Message" class="alt" method "POST"  /></li>
												<li><input type="reset" value="Reset" class="alt" /></li>
											</ul>

										</div>
									</div>
								</form>

								<hr />

								
							


						</div>
					</div>

			</div>

		<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<ul class="icons">
						<li><a href="https://twitter.com" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="https://www.facebook.com" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="https://www.instagram.com/?hl=hr" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="https://mail.google.com/mail/u/0/" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
					</ul>
				</div>
				<div class="copyright">
					&copy; Universe key by Andrej All rights reserved.
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>