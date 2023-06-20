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


    <div class="activity-list">
        <div class="activity">
            <h2>Club A</h2>
            <p>Een club voor interessante activiteiten.</p>
            <button class="vote-button">Stem</button>
            <textarea class="comment-input" placeholder="Voeg een opmerking toe..."></textarea>
        </div>

        <div class="activity">
            <h2>Sportteam B</h2>
            <p>Een team voor sportliefhebbers.</p>
            <button class="vote-button">Stem</button>
            <textarea class="comment-input" placeholder="Voeg een opmerking toe..."></textarea>
        </div>

        <!-- Voeg hier andere activiteiten toe -->
    </div>

    <div class="new-activity-suggestions">
        <h2>Suggesties voor nieuwe activiteiten</h2>
        <input type="text" class="new-activity-input" placeholder="Voer een suggestie in">
        <button class="new-activity-button">Indienen</button>
    </div>

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