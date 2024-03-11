<?php
$login = true;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include '../php/dbconn.php';
    $username = $_POST["username"];
    $password = $_POST["password"];

    $stmt = $conn->prepare("SELECT * FROM `details` WHERE username=? AND password=?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user) {
        $login = false;
        header("Location: ../index.php");
    } else {
        $login = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>scholarzone</title>
    <?php
        echo '<link rel="stylesheet" href="../final/html/css/sign_in.css"/>';
    ?>
</head>
<body>
    <?php
    if(!$login){ 
        echo '<script>alert("Login successful")</script>';
    }
     else {
        echo '<script>alert("Invalid username or password")</script>';
    }
    ?>
    <div class="container" >
      <?php
       echo "<img src='../LOGO.png' alt='logo' style='padding-top: 0px'/>";
      ?>  
        <h2 class="title" style="color: #413232; margin-top: -20px;
    padding: 15px 199px;">SIGN IN</h2>
        <div class="details">
            <form name="myForm" method="post" action="signin.php" style="padding-top: 20px;">
                <input class="details_1"  type="text" name="username" id="username" placeholder="Username"/><span class="formerror"></span><br />
                <input class="details_2"  type="password" name="password" id="password" placeholder="Password"/><span class="formerror"></span><br />
                <button class="signup" id="signup" style="text-decoration: none; color: white; font-size: 20px; ">
                    Sign in
                </button>
                <button class="signin">
                    <a
                        href="signup.php"
                        style="text-decoration: none; color: white; font-size: 20px"
                        id="signin"
                        >Sign up</a>
                </button>
            </form>
        </div>
    </div>
</body>
</html>