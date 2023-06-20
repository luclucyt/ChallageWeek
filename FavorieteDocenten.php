<!DOCTYPE html>
<html>

<head>
	<title>Vote for Fan Favorite</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
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

	<main>
		<section class="docenten-lijst">
			<h2>Docenten</h2>
			<ul>
				<li>
					<span class="docent-naam">Naam Docent 1</span>
					<span class="docent-vakgebied">Vakgebied 1</span>
					<button class="stem-knop">Stem</button>
					<span class="aantal-stemmen">0 stemmen</span>
				</li>
				<li>
					<span class="docent-naam">Naam Docent 2</span>
					<span class="docent-vakgebied">Vakgebied 2</span>
					<button class="stem-knop">Stem</button>
					<span class="aantal-stemmen">0 stemmen</span>
				</li>
				<!-- Voeg meer docentenitems toe -->
			</ul>
		</section>

		<section class="opmerkingen">
			<h2>Opmerkingen</h2>
			<ul>
				<li>
					<span class="opmerking-gebruiker">Gebruiker 1:</span>
					<span class="opmerking-tekst">Dit is een geweldige docent!</span>
				</li>
				<li>
					<span class="opmerking-gebruiker">Gebruiker 2:</span>
					<span class="opmerking-tekst">Deze docent legt de lesstof heel duidelijk uit.</span>
				</li>
				<!-- Voeg meer opmerkingen toe -->
			</ul>
			<form class="opmerking-toevoegen">
				<input type="text" placeholder="Voeg een opmerking toe">
				<button type="submit">Toevoegen</button>
			</form>
		</section>

		<!-- Andere secties en functionaliteiten -->
	</main>


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