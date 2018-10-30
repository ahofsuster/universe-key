<?php include_once "../../config.php"; 
if(!isset($_SESSION["a"])){
  header("location: " . $pathAPP . "logout.php");
}


?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<head>
  <?php include_once "../../template/head.php"; ?>
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
						<h2>Citati</h2>
					</header>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style2">
				<div class="inner">
					<div class="box">
						<div class="content">
							<header class="align-center">
								<?php 

									$query = $connect->prepare("select a.sifra, concat(b.ime,' ',b.prezime) as korisnik, a.citat from citat a
																inner join korisnik b
																on a.korisnik=b.sifra");
									$query->execute();
									$result = $query->fetchAll(PDO::FETCH_OBJ);

								?>
								<a href="new.php" class="button alt margin">Dodaj novi citat</a>
								<table>
									<thead>
										<th>Korisnik</th>
										<th>Citat</th>
										<th>Akcija</th>
									</thead>
									<tbody>
										<?php foreach($result as $row): ?>
										<tr>
											<td><?php echo $row->korisnik; ?></td>
											<td><?php echo $row->citat; ?></td>
											<td>
												<a href="update.php?sifra=<?php echo $row->sifra; ?>">
								                    <i class="fas fa-edit fa-2x"></i>
								                </a>
								                <a onclick="return confirm('Sigurno obrisati <?php echo $row->ime; ?> <?php echo $row->prezime; ?>')" href="	delete.php?sifra=<?php echo $row->sifra; ?>">
							                      	<i class="fas fa-trash fa-2x"></i>
							                    </a>
											</td>
										</tr>
										<?php endforeach; ?>
									</tbody>
								</table>
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