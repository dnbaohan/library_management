<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include '../db.php';

    $deletedId = $_POST["id"];

    // Delete storage entry from the 'storage' table
    $sql = "DELETE FROM storage WHERE sto_id = $deletedId";

    // Execute the SQL statement
    $conn->query($sql);

    // Close connection
    $conn->close();

    echo "Storage entry deleted successfully!";
    // Redirect
    echo '<script>window.location.href = "../storage.php";</script>';
}
?>
