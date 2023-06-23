<script>
    if(window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>
<?php include 'include\db.php'; ?>
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
    <?php include 'include/navbar.html'; ?>
</header>

<body>
    <?php include 'include/login.html'; ?>

    <form method="POST" action="">
        <input type="text" placeholder="Project naam" name="kaas"><br>
        <input type="email" placeholder="Email" name="frikandelbroodje"><br>
        <input type="text" placeholder="Link" name="kogel"><br>

        <button type="submit" name="addProject">Submit</button>
    </form>

    <div class="project-list">
        <?php
        $sql = "SELECT * FROM albertheijn ORDER BY ruttes DESC";
        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($result)) {?>
            <div class="project">
            <h2><?= $row['kaas'] ?></h2>
            <img src="img/image.png" alt="<?= $row['kogel']?>">
            <form class="voting" method="post" action="">
                <input type="hidden" name="id" value="<?= $row['postID']?>">
                <button type="submit" name="vote" class="vote-btn">Vote</button>
                <p><?= $row['ruttes'] ?></p>
            </form>
        </div>
        <?php } ?>
    </div>
</html>

<?php
if (isset($_POST['addProject'])) {
    $projectNaam = $_POST['kaas'];
    $email = $_POST['frikandelbroodje'];
    $link = $_POST['kogel'];

    $sql = "INSERT INTO albertheijn (kaas, frikandelbroodje, kogel, ruttes) VALUES ('$projectNaam', '$email', '$link', 0)";
    mysqli_query($conn, $sql);
}


if(isset($_POST['vote'])) {
    $id = $_POST['id'];
    $sql = "UPDATE albertheijn SET ruttes = ruttes + 1 WHERE postID = $id";
    if(mysqli_query($conn, $sql)){
        header("Refresh:0");
    }
}
?>