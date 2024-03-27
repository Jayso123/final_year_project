<!-- 
include  "./admin_db.php";

if (isset($_POST['add-btn'])) {
    // Data to be inserted
    $title = $_POST['title'];
    $description = $_POST['description'];
    $eligibility = $_POST['eligibility'];
    $deadline = $_POST['deadline']; // Assuming deadline is in YYYY-MM-DD format

    // SQL query to insert data into the table
    $sql = "INSERT INTO scholarships (title, description, eligibility, deadline) VALUES ('$title', '$description', '$eligibility', '$deadline')";

    // Execute the SQL query
    if (mysqli_query($conn, $sql)) {
        echo "Data inserted successfully.";
        // header("Location: index.php");
        // exit();

    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn); -->
