<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include '../db.php';
    
    // Get form data
    $name = $_POST["name"];
    $address = $_POST["address"];
    $gender = $_POST["gender"];
    $nationality = $_POST["nationality"];

    // Insert into the author table
    $sql = "INSERT INTO author (au_name, au_address, au_gender, au_nationality)
            VALUES ('$name', '$address', '$gender', '$nationality');";

    // Execute the SQL statement
    $conn->query($sql);

    // Close connection
    $conn->close();

    echo "Author created successfully!";
    // Redirect
    echo '<script>window.location.href = "../author.php";</script>';
}
?>
