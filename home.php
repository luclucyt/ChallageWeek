<!DOCTYPE html>
<html>

<head>
    <title>Vote for Fan Favorite</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="navbar.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js" defer></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js" defer></script>
    <script src="login.js" defer></script>
</head>

<header>
    <?php include 'include/navbar.html';?>
</header>

<body>
    <?php include 'include/login.html';?>
        
    <section class="welcome-section">
        <h1>Vote for Fan Favorite</h1>
        <p>Welkom op de website waar gebruikers hun stem kunnen uitbrengen op favoriete projecten, docenten, vakken en
            meer!
        </p>
        <p>Log in of registreer om deel te nemen aan de stemmingen.</p>
        <a href="#" class="btn-login">Inloggen</a>
    </section>

    <section class="category-section">
        <div class="category">
            <h2>Favoriete projecten</h2>
            <p>Stem op verschillende projecten die studenten hebben voltooid.</p>
            <a href="#" class="btn-category">Bekijk projecten</a>
        </div>

        <div class="category">
            <h2>Favoriete docenten</h2>
            <p>Stem op je favoriete docenten op basis van verschillende criteria.</p>
            <a href="#" class="btn-category">Bekijk docenten</a>
        </div>

        <!-- Andere categorieën hier toevoegen -->
    </section>

    
</body>

<footer>
    <?php include 'include/footer.html';?>
</footer>

</html>