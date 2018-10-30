<!-- Nav -->
<nav id="menu">
	<ul class="links">

		<?php if(isset($_SESSION["a"])): ?>
			<li><a href="<?php echo $pathAPP; ?>logout.php">Logout</a></li>
		<?php else: ?>
			<li><a href="<?php echo $pathAPP; ?>login.php">Login</a></li>
		<?php endif; ?>

			<br></br>
		<li><a href="<?php echo $pathAPP; ?>index.php">Home</a></li>
		<li><a href="<?php echo $pathAPP; ?>about-me.php">About me</a></li>
		<li><a href="<?php echo $pathAPP; ?>contact.php">Contact</a></li>
		<?php if(isset($_SESSION["a"])): ?>
			<br><br>
			<li><a href="<?php echo $pathAPP; ?>private/dashboard.php">Dashboard</a></li>
			<li><a href="<?php echo $pathAPP; ?>private/korisnik/index.php">Korisnici</a></li>
			<li><a href="<?php echo $pathAPP; ?>private/citat/index.php">Citati</a></li>
			<li><a href="<?php echo $pathAPP; ?>private/kategorija/index.php">Kategorije</a></li>
			<li><a href="<?php echo $pathAPP; ?>private/ck/index.php">Citati po kategorijama</a></li>
		<?php endif; ?>
	</ul>
</nav>