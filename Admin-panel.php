<?php

include './php/admin_db.php';

if (isset($_POST['add-btn'])) {
    // Data to be inserted
    $title = $_POST['title'];
    $description = $_POST['description'];
    $eligibility = $_POST['eligibility'];
    $deadline = $_POST['deadline']; // Assuming deadline is in YYYY-MM-DD format

    // SQL query to insert data into the table
    $sql = "INSERT INTO scholarships (title, description, eligibility, deadline) VALUES ('$title', '$description', '$eligibility', '$deadline')";

    // Execute the SQL query
    if (mysqli_query($conn, $sql) == true) {
      echo '<script>alert("Data inserted successfully.")</script>';
        
        // header("Location: index.php");
        // exit();

    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>home</title>

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
    />

    <link rel="icon" href="./LOGO.png"/>

    <?php
    echo '<link rel="stylesheet" href="./final/html/css/panel.css" />';
    ?>
  </head>
  <body>
    <header class="header">
      <section class="flex">
        <!-- <a href="home.html" class="logo">Educa.</a> -->
        <?php
        echo '<img class="logo" style="max-height: 250px; max-width: 250px" />';
          ?>

        <div class="icons">
          <div id="menu-btn" class="fas fa-bars"></div>
          <div id="search-btn" class="fas fa-search"></div>
          <div id="user-btn" class="fas fa-user"></div>
          <div id="toggle-btn" class="fas fa-sun"></div>
        </div>

        <div class="profile">
          <img src="./final/html/Images/demo.jpg" class="image" alt="" />
          <h3 class="name">Sujal Trivedi</h3>
          <p class="role">studen</p>
          <a href="profile.html" class="btn">view profile</a>
          <div class="flex-btn">
            <a href="/final/sign_in.html" class="option-btn">login</a>
            <a href="/final/Signup.html" class="option-btn">register</a>
          </div>
        </div>
      </section>
    </header>

    <div class="side-bar">
      <div id="close-btn">
        <i class="fas fa-times"></i>
      </div>

      <div class="profile">
        <img src="./final/html/Images/demo.jpg" class="image" alt="" />
        <h3 class="name">Sujal Trivedi</h3>
        <p class="role">studen</p>
        <a href="profile.html" class="btn">view profile</a>
      </div>
    <
      <nav class="navbar">
        <a href="./Admin-panel.php"><i class="fas fa-home"></i><span>home</span></a>
        <a href="./FAQs.html"
          ><i style="margin-left: 5px" class="fas fa-question"></i
          ><span style="margin-left: 5px">FaQ's</span></a
        >
        <a href="./scholarships.html"
          ><i class="fas fa-graduation-cap"></i><span>Scholarship</span></a
        >
        <a href="mentors.html"
          ><i class="fas fa-chalkboard-user"></i><span>Mentors</span></a
        >
        <a href="./contact_us.html"
          ><i class="fas fa-headset"></i><span>contact us</span></a
        >
      </nav>
    </div>

    <section class="home-grid">
      <h1 class="heading">quick options</h1>

      <div class="box-container">
        <div class="box">
          <h3 class="title">likes and comments</h3>
          <p class="likes">total likes : <span>25</span></p>
          <a href="#" class="inline-btn">view likes</a>
          <p class="likes">total comments : <span>12</span></p>
          <a href="#" class="inline-btn">view comments</a>
          <p class="likes">saved Scholarships : <span>4</span></p>
          <a href="#" class="inline-btn">view Scholarships</a>
        </div>
      </div>
    </section>

    <section class="courses">
      <h1 class="heading">Add Scholarship</h1>
      <div class="st">
        <form action="./Admin-panel.php" method="post" class="card-body">
          <div class="con">
            <label for="title">Scholarship Title:</label>
            <input type="text" id="title" name="title" required />

            <label for="description">Description:</label>
            <textarea
              id="description"
              name="description"
              rows="4"
              required
            ></textarea>

            <label for="eligibility">Eligibility:</label>
            <textarea
              id="eligibility"
              name="eligibility"
              rows="4"
              required
            ></textarea>

            <label for="deadline">Deadline:</label>
            <input type="date" id="deadline" name="deadline" required />

            <button type="submit" name="add-btn">Submit</button>
          </div>
        </form>
      </div>
    </section>

    <footer class="footer">
      &copy; copyright @ 2024 by
      <a href="index.html"> <span>ScholarZone</span> </a> | all rights reserved!
    </footer>

    <script src="./final/html/js/Admin.js"></script>
  </body>
</html>
