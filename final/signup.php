<?php
$showAlert = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "../php/dbconn.php";
    $username = $_POST["username"];
    $number = $_POST["number"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];

    if ($password == $cpassword) {
        $stmt = $conn->prepare("INSERT INTO `details` (`username`, `number`, `email`, `password`) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $username, $number, $email, $password);
        $result = $stmt->execute();
        
        if (!$result) {
            // Handle the error
            die('Invalid query: ' . $conn->error);
        }
        else{
            header("Location: ../final/signin.php");
        }
        $showAlert = true;
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
        echo '<link rel="stylesheet" href="../final/html/css/signup-1.css"/>';
    ?>
</head>
<body>
    <?php
    if($showAlert){ 
        echo '<script>alert("Account created")</script>';
    } else {
        echo '<script>alert("Account not created")</script>';
    }
    ?>
    <div class="container">
      <img src="../LOGO.png" alt="logo" style="padding-top: -10px;" />
      <h2 class="title">CREATE YOUR ACCOUNT</h2>
        <div class="details">
            <form name="myForm" method="post" action="signup.php" style="padding-top: 25px;">
                <input class="details_1" type="text" name="username" id="username" placeholder="Name" /><span class="formerror"></span><br />
                <input class="details_1" type="tel" name="number" id="number" placeholder="Phone No" /><span class="formerror"></span><br />
                <input class="details_1" type="email" name="email" id="email" placeholder="Email" /><span class="formerror"></span><br />
                <input class="details_1" type="password" name="password" id="password" placeholder="Password" /><span class="formerror"></span><br />
                <input class="details_1" type="password" name="cpassword" id="cpassword" placeholder="Confirm Password" /><span class="formerror"></span><br />
                <button class="signup" id="signup" style="text-decoration: none; color: white; font-size: 20px;">
                    Sign up
                </button>
                <button class="signin">
                    <a
                        href="signin.php"
                        style="text-decoration: none; color: white; font-size: 20px"
                        id="signin"
                        >Sign in</a>
                </button>
            </form>
        </div>
    </div>
</body>
</html>
