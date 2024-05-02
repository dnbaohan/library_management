<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include '../db.php';
    
    // Get form data
    $shelf = $_POST["shelf"];
    $block = $_POST["block"];

    // Insert into the storage table
    $sql = "INSERT INTO storage (sto_shelf, sto_block)
            VALUES ('$shelf', '$block');";

    // Execute the SQL statement
    $conn->query($sql);

    // Close connection
    $conn->close();

    echo "Storage created successfully!";
    // Redirect
    echo '<script>window.location.href = "../storage.php";</script>';
}
?>
