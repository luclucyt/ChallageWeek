<!DOCTYPE html>
<html>

<head>
    <title>Vote for Fan Favorite</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script src="../js/script.js"></script>
    <link rel="stylesheet" type="text/css" href="navbar.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js" defer></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js" defer></script>
    <script src="login.js" defer></script>
</head>

<header>
    <?php include 'navbar.html'; ?>
</header>

<body>



    <ul class="vakken-lijst">
        <li class="vak">
            <h2>Vaknaam 1</h2>
            <p>Beschrijving van vak 1</p>
            <button class="stemknop">Stem</button>
        </li>
        <li class="vak">
            <h2>Vaknaam 2</h2>
            <p>Beschrijving van vak 2</p>
            <button class="stemknop">Stem</button>
        </li>
        <!-- Voeg meer vakken toe -->
    </ul>

    <button id="voorstel-knop" class="voorstel-knop">Nieuw vak voorstellen</button>

    <div id="resultaten-grafiek" class="resultaten-grafiek">
        <!-- Hier komt de grafiek met resultaten -->
    </div>

    <div id="opmerkingen" class="opmerkingen">
        <!-- Hier komen de opmerkingen en feedback -->
    </div>


    <!-- Andere categorieën hier toevoegen -->


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