<!DOCTYPE html>
<html lang="en">

<head>
  <script src="https://kit.fontawesome.com/a13b999530.js" crossorigin="anonymous"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ScholarZone</title>
  <?php
  echo '<link rel="stylesheet" href="./navbar.css">';
  echo '<link rel="stylesheet" href="./aws.css">';
  echo '<link rel="stylesheet" href="./Demo.css">';
  ?>
    <link rel="icon" href="../LOGO.png"/>

</head>

<body>
  <header>
    <a class="logo" href="/index.html">
      <img class="logo" src="./LOGO.png" alt="LOGO">
    </a>
    <nav>
      <ul class="nav_links">
        <li>
          <a href="/contact_us.html">Contact Us</a>
        </li>
        <li>
          <a href="./FAQs.html">FaQ's</a>
        </li>
        <li>
          <a href="./List_sch.html">Scholarship</a>
        </li>
      </ul>
    </nav>
    <?php

    ?>
    
     <a href="./final/signin.php" id="cta">
      <button class="headingbutton">Login</button></a>
    <a href="./final/signup.php" id="cta1">
      <button class="headingbutton" id="register">Register</button></a>
      </header>
  <div id="searchbox">
    <input id="home_search" type="text" placeholder="What are you looking for?" autocomplete="on">
    <i class="fa fa-search" id="searchIcon"></i>
    <div class="searchbox2" style="left: 500px;"><ul id="searchResults" ></ul></div>
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
        <a class="view_all_cta" href="./List_sch.html">
          View all Scholarship <i class="ic-24-arrow-right"></i>
        </a>
      </p>

      
    <div class="box">
      <div class="box1">
        <h1 class="details"> K.C.MAHINDRA EDUCATION TRUST</h1>
        <h2 class="scholar"> MAHINDRA ALL INDIA TALENT SCHOLARSHIPS FOR DIPLOMA COURSES IN POLYTECHNIC.
          Preference will be given to girl students, children from lower income group families, disabled children
           and children of armed forces personnel.</h2>
        <a class="more" href="Sch_Details.html">Read more &#8594;</a>
      </div>
    </div>
    <div class="box">
      <div class="box1">
        <h1 class="details">Fair & Lovely Foundation - Women Scholarship</h1>
        <h2 class="scholar"> For Women across the country the new academic year brings new opportunities.
           The Fair & lovely foundation has a vision to give an opportunity to as many as women they can to realize their dreams.</h2>
        <a class="more" href="Sch_Details.html">Read more &#8594;</a>
      </div>
      </div>
      <div class="box">
      <div class="box1">
        <h1 class="details">INLAKS RESEARCH TRAVEL GRANTS</h1>
        <h2 class="scholar"> The Inlaks Shivdasani Foundation has been supporting innovative work in research and scholarship for more than three decades.
           "Inlaks Research Travel Grant" offers financial support for a maximum of 3 months at a university/institution/library abroad.</h2>
        <a class="more" href="Sch_Details.html">Read more &#8594;</a>
      </div>
    </div>
<script src="./search.js"></script>
</body>
</html>