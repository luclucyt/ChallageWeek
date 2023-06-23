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
	
</body>
</html>