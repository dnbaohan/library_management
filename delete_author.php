<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include '../db.php';

    $deletedId = $_POST["id"];

    // Delete author from the 'author' table
    $sql = "DELETE FROM author WHERE au_id = $deletedId";

    // Execute the SQL statement
    $conn->query($sql);

    // Close connection
    $conn->close();

    echo "Author deleted successfully!";
    // Redirect
    echo '<script>window.location.href = "../author.php";</script>';
}
?>
