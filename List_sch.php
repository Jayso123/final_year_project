<?php
// Include database connection
include './php/admin_db.php';

// Fetch scholarships from database
$sql = "SELECT * FROM scholarships";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <script src="https://kit.fontawesome.com/a13b999530.js" crossorigin="anonymous"></script>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>List of Scholarship</title>
  <?php
  echo '<link rel="stylesheet" href="navbar.css" />';
  echo '<link rel="stylesheet" href="list.css" />';
  echo '<link rel="icon" href="./LOGO.png" />';
  ?>
</head>

<body>
  <header>
    <a class="logo" href="./index.php">
      <img class="logo" src="./LOGO.png" alt="LOGO" />
    </a>
    <nav>
      <ul class="nav_links">
        <li>
          <a href="./FAQs.html">FaQ's</a>
        </li>
        <li>
          <a href="#">Organzaions</a>
        </li>
      </ul>
    </nav>
    <a href="./final/signin.php" id="cta">
      <button class="headingbutton">Logout</button></a>
  </header>
  <?php
  $i = 1;
  while ($row = mysqli_fetch_assoc($result)) {
    $boxClass = 'box' . $i;
    $boxInnerClass = 'box' . $i . '-inner';

    echo "<div class='$boxClass'>";
    echo   "<div class='box'>";
    echo    "<div class='box1'>";
    // echo       "<h1 class='details'> "<strong>Title:</strong> " . $row['title'];</h1>";
    echo "<h1 class='details'>Title: " . $row['title'];
    echo          "<h2 class='scholar'><strong>Description:</strong> " . $row['description'];
    echo          "<a class='more' href='Sch_Details.html'>Read more &#8594;</a>";
    echo        "</div>";
    echo        "</div>";

    $i++;
  }
  ?>
</body>

</html>