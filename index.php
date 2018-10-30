<?php include_once "config.php"; ?>
<!DOCTYPE HTML>

<html>
	<head>
		<?php include_once "template/head.php"; ?>
		<style>
			.box {
				height: 350px;
			}
		</style>
	</head>
	<body>

		<!-- Header -->
			<header id="header" class="alt">
				<div class="logo"><a href="index.php">Universe key <span>by Andrej</span></a></div>
				<a href="#menu">Menu</a>
			</header>

		<?php include_once "template/navbar.php"; ?>

		<!-- Banner -->
			<section class="banner full">
				<article>
					<img src="images/naslovna1.jpg" alt="" />
					<div class="inner">
						<header>
							<h2>Universe key</h2>
						</header>
					</div>
				</article>
				<article>
					<img src="images/slide02.jpg" alt="" />
					<div class="inner">
						<header>
							<p>"Lights a fire in you."</p>
							<h2>Passion</h2>
						</header>
					</div>
				</article>
				<article>
					<img src="images/slide03.jpg"  alt="" />
					<div class="inner">
						<header>
							<p>"Helps your forgive."</p>
							<h2>Courage</h2>
						</header>
					</div>
				</article>
				<article>
					<img src="images/slide04.jpg"  alt="" />
					<div class="inner">
						<header>
							<p>"Brings out the best in you."</p>
							<h2>Love</h2>
						</header>
					</div>
				</article>
				<article>
					<img src="images/slide05.jpg"  alt="" />
					<div class="inner">
						<header>
							<p>"Doesn't let you give up."</p>
							<h2>Strength</h2>
						</header>
					</div>
				</article>
			</section>

		<!-- One -->
			<section id="one" class="wrapper style2">
				<?php 

					$query = $connect->prepare("select a.sifra, a.citat, b.naziv as kategorija from citatkategorija c 
												inner join citat a
												on c.citat=a.sifra 
												inner join kategorija b 
												on c.kategorija=b.sifra");
					$query->execute();
					$result = $query->fetchAll(PDO::FETCH_OBJ);

				?>
				<div class="inner">
					<div class="grid-style">
						<?php foreach($result as $row): ?>
						<div>
							<div class="box">
								<div class="content">
									<header class="align-center">
										<h2>Famous quotes about <?php echo $row->kategorija; ?></h2>
									</header>
									<p>"<?php echo $row->citat; ?>"</p>
								</div>
							</div>
						</div>
						<?php endforeach; ?>
					</div>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style3">
				<div class="inner">
					<header class="align-center">
						<p>"Be happy for this moment. This moment is your life."</p>
						<h2>Omar Khayyam</h2>
					</header>
				</div>
			</section>

		<!-- Three -->
			<section id="three" class="wrapper style2">
				<div class="inner">
					<header class="align-center">
						
						<h2>Quotes of the week</h2>
					</header>
					<div class="gallery">
						<div>
							<div class="image fit">
								<a href="#"><img src="images/pic07.jpg" alt="" /></a>
							</div>
						</div>
						<div>
							<div class="image fit">
								<a href="#"><img src="images/pic08.jpg" alt="" /></a>
							</div>
						</div>
						<div>
							<div class="image fit">
								<a href="#"><img src="images/pic09.jpg" alt="" /></a>
							</div>
						</div>
						<div>
							<div class="image fit">
								<a href="#"><img src="images/pic10.jpg" alt="" /></a>
							</div>
						</div>
					</div>
				</div>

<div class="div-contact-me"><p>You want one of your quotes to be posted on my page? Click <a href="contact.php"> here </a> to contact me.</p></div>
			</section>

		


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