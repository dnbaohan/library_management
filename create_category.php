<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include '../db.php';
    
    // Get form data
    $name = $_POST["name"];
    $keyword = $_POST["keyword"];
    $language = $_POST["language"];

    // Insert into the category table
    $sql = "INSERT INTO category (cat_name, cat_keyword, cat_language)
            VALUES ('$name', '$keyword', '$language');";

    // Execute the SQL statement
    $conn->query($sql);

    // Close connection
    $conn->close();

    echo "Category created successfully!";
    // Redirect
    echo '<script>window.location.href = "../category.php";</script>';
}
?>
