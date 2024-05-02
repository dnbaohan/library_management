<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include '../db.php';

    $deletedId = $_POST["id"];

    // Delete category from the 'category' table
    $sql = "DELETE FROM category WHERE cat_id = $deletedId";

    // Execute the SQL statement
    $conn->query($sql);

    // Close connection
    $conn->close();

    echo "Category deleted successfully!";
    // Redirect
    echo '<script>window.location.href = "../category.php";</script>';
}
?>
