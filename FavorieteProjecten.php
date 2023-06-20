<!DOCTYPE html>
<html>

<head>
	<title>Vote for Fan Favorite</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<script src="../js/script.js"></script>
</head>

<header>
	<?php include 'navbar.html'; ?>
</header>

<body>
	<header>
		<div class="logo">GLR</div>
		<nav>
			<ul>
				<li><a href="../index.html">Home</a></li>
				<li><a href="../html/FavorieteProjecten.html">Favoriete projecten</a></li>
				<li><a href="../html/FavorieteDocenten.html">Favoriete docenten</a></li>
				<li><a href="../html/FavorieteVakken.html">Favoriete vakken</a></li>
				<li><a href="../html/ExtracurriculaireActiviteiten.html">Extracurriculaire activiteiten</a></li>
				<li><a href="#">Evenementen</a></li>
				<li><a href="#">Innovatieve ideeën</a></li>
				<li><a href="#">Inloggen</a></li>
			</ul>
		</nav>
	</header>

	<section class="category-section">
		<div class="project-list">
			<div class="project">
				<h2>Projectnaam</h2>
				<p>Korte projectbeschrijving</p>
				<img src="project-image.jpg" alt="Projectafbeelding">
				<div class="voting">
					<button class="vote-btn">Stem</button>
				</div>
				<div class="comments">
					<h3>Opmerkingen</h3>
					<ul>
						<li>Opmerking 1</li>
						<li>Opmerking 2</li>
						<li>Opmerking 3</li>
					</ul>
					<form>
						<input type="text" placeholder="Voeg een opmerking toe">
						<button type="submit">Plaats opmerking</button>
					</form>
				</div>
			</div>

			<!-- Andere categorieën hier toevoegen -->
	</section>

	<footer>
		<ul>
			<li><a href="#">Over ons</a></li>
			<li><a href="#">Privacybeleid</a></li>
			<li><a href="#">Algemene voorwaarden</a></li>
			<li><a href="#">Contact</a></li>
		</ul>
	</footer>
</body>

</html>