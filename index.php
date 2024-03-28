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
  <script src="https://kit.fontawesome.com/114fa55fed.js" crossorigin="anonymous"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ScholarZone</title>
  <?php
  echo '<link rel="stylesheet" href="./navbar.css">';
  echo '<link rel="stylesheet" href="./aws.css">';
  echo '<link rel="stylesheet" href="./Demo.css">';

  ?>
  <link rel="icon" href="./LOGO.png" />

</head>

<body>
  <header>
    <a class="logo" href="/index.html">
      <img class="logo" src="./LOGO.png" alt="LOGO">
    </a>
    <nav>
      <ul class="nav_links">
        <li>
          <a href="./DonatUs.html"> Donatus </a>
        </li>
        <li>
          <a href="./FAQs.html">FaQ's</a>
        </li>
        <li>
          <a href="./List_sch.php">Scholarship</a>
        </li>
      </ul>
    </nav>


    <a href="./final/signin.php" id="cta">
      <button class="headingbutton">LogOut</button></a>
    <!-- <a href="./final/signup.php" id="cta1">
      <button class="headingbutton" id="register">Register</button></a> -->
  </header>
  <div class="side-bar">
    <div id="close-btn">
      <i class="fas fa-times"></i>
    </div>

    <nav class="navbar">

      <h3 class="stat">states :</h3>
      <br />
      <div class="data">
        <input type="checkbox" name="states" id="state1">GUJARAT
        <br />
        <input type="checkbox" name="states" id="state1">BIHAR
        <br />
        <input type="checkbox" name="states" id="state1">MADHYAPRADESH
        <br />
        <input type="checkbox" name="states" id="state1">UTTARPRADESH
        <br />
        <input type="checkbox" name="states" id="state1">PUNJAB
        <br />
        <input type="checkbox" name="states" id="state1">MAHARASHTRA
        <br />
        <input type="checkbox" name="states" id="state1">RAJASTHAN
        <br />
        <input type="checkbox" name="states" id="state1">ASSAM
        <br />
        <a href="./List_sch.php"> <button type="submit" class="sub">APPLY</button></a>

      </div>

    </nav>
  </div>
  <div id="searchbox">
    <input id="home_search" type="text" placeholder="What are you looking for?" autocomplete="on" />
    <!-- <i class="fa fa-search" id="searchIcon"></i> -->
    <i class="fa-solid fa-magnifying-glass" id="searchIcon"></i>
    <div class="searchbox2">
      <ul id="searchResults"></ul>
      <i class="fa fa-filter fa-2x margin-top: 2em;" style="color: #63E6BE; cursor: pointer;" id="fill"></i>

    </div>
    <a id="searchLink" href="#"></a>


  </div>
  <!-- <button id="searchIcon">
      <i class="fa fa-search"></i>
    </button> -->

  </div>
  <div id="internships" class="container-fluid section">
    <div class="max-width-container">
      <h2>
        Scholarship</h2>
      <p class="section_description">
        Apply to Scholarship for free
        <a class="view_all_cta" href="./List_sch.php">
          View all Scholarship <i class="ic-24-arrow-right"></i>
        </a>
      </p>
      <?php
      $i = 1;
      while ($row = mysqli_fetch_assoc($result)) {
        if ($i > 3) {
          break;
        }

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

    </div>
  </div>
  <script src="./search.js"></script>
  <script src="./filtter.js"></script>
</body>

</html>