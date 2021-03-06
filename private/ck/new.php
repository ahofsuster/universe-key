<?php include_once "../../config.php"; 
if(!isset($_SESSION["a"])){
  header("location: " . $pathAPP . "logout.php");
}

	if(isset($_POST["dodaj"])){
		$query = $connect->prepare("insert into citatkategorija (citat,kategorija) values
		    (:citat,:kategorija)");
	  	unset($_POST["dodaj"]);
	  	$query->execute($_POST);
	  	header("location: index.php");
	}


?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<head>
  <?php include_once "../../template/head.php"; ?>
  <style>
  	input[type="submit"] {
		margin-top: 20px;
		width: 100%;
	}
  </style>
</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<div class="logo"><a href="index.php">Universe key <span>by Andrej</span></a></div>
				<a href="#menu">Menu</a>
			</header>

		<?php include_once "../../template/navbar.php"; ?>

		<!-- One -->
			<section id="One" class="wrapper style3">
				<div class="inner">
					<header class="align-center">
						<h2>Dodaj</h2>
					</header>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style2">
				<div class="inner">
					<div class="box">
						<div class="content">
							<header class="align-center">
								<form method="POST" action="<?php echo $_SERVER["PHP_SELF"] ?>">
									<label for="citat">Citat</label>
									<select name="citat" id="citat">
										<option value="0">Odaberi citat</option>

										<?php 

											$query = $connect->prepare("select * from citat");
											$query->execute();
											$result = $query->fetchAll(PDO::FETCH_OBJ);
											foreach($result as $row):

										?>

										<option value="<?php echo $row->sifra; ?>"><?php echo $row->citat; ?></option>

										<?php endforeach; ?>
									</select>
									<label for="kategorija">Kategorija</label>
									<select name="kategorija" id="kategorija">
										<option value="0">Odaberi kategoriju</option>

										<?php 

											$query = $connect->prepare("select * from kategorija");
											$query->execute();
											$result = $query->fetchAll(PDO::FETCH_OBJ);
											foreach($result as $row):

										?>

										<option value="<?php echo $row->sifra; ?>"><?php echo $row->naziv; ?></option>

										<?php endforeach; ?>
									</select>
									<input type="submit" name="dodaj" value="Dodaj">
									<a href="index.php" class="button alt back">Nazad</a>
								</form>
							</header>
						</div>
					</div>
				</div>
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
					&copy;  Universe key by Andrej All rights reserved.
				</div>
			</footer>
		<?php include_once "../../template/scripts.php"; ?>
	</body>
</html>