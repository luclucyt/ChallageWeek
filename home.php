<?php include 'include/db.php' ?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <link rel="stylesheet" type="text/css" href="navbar.css">
    
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js" defer></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js" defer></script>
    <script src="login.js" defer></script>
    
    <title>Vote for Fan Favorite</title>
</head>

<header>
    <?php include 'include/navbar.html';?>
</header>

<body>
    <?php include 'include/login.html';?>
        
    <section class="welcome-section">
        <h1>Vote for Fan Favorite</h1>
        <p>Welkom op de website waar gebruikers hun stem kunnen uitbrengen op favoriete projecten, docenten, vakken en meer!</p>
        <p>Log in of registreer om deel te nemen aan de stemmingen.</p>
    </section>
    <section class="text">
        <div class="text-wrapper container">
            <div class="text-text">
                <h2>Zie hier de votings van de projecten</h2>
                <ul class="chart">
                    <?php
                        $sql = "SELECT * FROM albertheijn";
                        $result = mysqli_query($conn, $sql);
                        $totalVotes = 0;

                        while($row = mysqli_fetch_assoc($result)){
                            $totalVotes += $row['ruttes'];
                        }
                     ?>
                     <?php
                        $sql = "SELECT * FROM albertheijn";
                        $result = mysqli_query($conn, $sql);

                        while($row = mysqli_fetch_assoc($result)){ 
                            $procentage = round(($row['ruttes'] / $totalVotes) * 100);
                            ?>
                            <li>
                                <span style="height:<?= $procentage ?>%" title="<?= $row['kaas'] ?>"></span>
                            </li>
                       <?php }    ?>
                  <!-- <li>
                    <span style="height:5%" title="project 1"></span>
                  </li>
                  <li>
                    <span style="height:70%" title="project 2"></span>
                  </li>
                  <li>
                    <span style="height:50%" title="project 3"></span>
                  </li>
                  <li>
                    <span style="height:15%" title="project 4"></span>
                  </li> -->
                </ul>    
            </div>
        </div>
    </section> 
</body>
</html>