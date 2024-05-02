<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include '../db.php';

    $deletedId = $_POST["id"];
    
    $sql = "DELETE from book WHERE book_id = $deletedId;";


    //z Get the ID of the newly inserted book
    $sql .= "SET @newBookID = LAST_INSERT_ID();";

    // Insert into book_author for each author
    foreach ($authors as $authorID) {
        $sql .= "INSERT INTO book_author (au_id, book_id) VALUES ($authorID, @newBookID);";
    }

    // Insert into book_cate for each category (assuming similar structure)
    foreach ($categories as $categoryID) {
        $sql .= "INSERT INTO book_cate (cat_id, book_id) VALUES ($categoryID, @newBookID);";
    }

    // Execute the SQL statement
    $conn->multi_query($sql);

    // Close connection
    $conn->close();

    echo "Book deleted successfully!";
    // Redirect
    echo '<script>window.location.href = "../book.php";</script>';
}
?>