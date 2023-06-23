<?php include 'include\db.php';?>
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
<div class="project-list">
  <div class="project">
    <h2>Project 1</h2>
    <img src="project1.jpg" alt="Project 1">
    <div class="voting">
      <button class="vote-btn">Vote</button>
    </div>
  </div>
  <div class="project">
    <h2>Project 2</h2>
    <img src="project2.jpg" alt="Project 2">
    <div class="voting">
      <button class="vote-btn">Vote</button>
    </div>
  </div>
  <div class="project">
    <h2>Project 3</h2>
    <img src="project3.jpg" alt="Project 3">
    <div class="voting">
      <button class="vote-btn">Vote</button>
    </div>
  </div>
  <div class="project">
    <h2>Project 4</h2>
    <img src="project4.jpg" alt="Project 4">
    <div class="voting">
      <button class="vote-btn">Vote</button>
    </div>
  </div>
</div>

<body>
	<?php include 'include/login.html'; ?>

    <form method="POST" action="">
        <input type="text" placeholder="Project naam" name="kaas"><br>
        <input type="email" placeholder="Email" name="frikandelbroodje"><br>
        <input type="text" placeholder="Link" name="kogel"><br> 

        <button type="submit" name="addProject">Submit</button>
    </form>

    <div>
        <?php
            $sql = "SELECT * FROM albertheijn";
            $result = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_assoc($result)) {
                echo $row['kaas'] . "<br>";
                echo $row['frikandelbroodje'] . "<br>";
                echo $row['kogel'] . "<br><br>";
            }
        ?>
    </div>
	
</body>
</html>

<?php
if (isset($_POST['addProject'])) {
    $projectNaam = $_POST['kaas'];
    $email = $_POST['frikandelbroodje'];
    $link = $_POST['kogel'];

    $sql = "INSERT INTO albertheijn (kaas, frikandelbroodje, kogel) VALUES ('$projectNaam', '$email', '$link')";
    mysqli_query($conn, $sql);
}
?>