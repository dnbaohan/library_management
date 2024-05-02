<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../style.css">
    <title>Update Book</title>
</head>

<body style="background: #DED0B6;padding: 40px">
    <div id="menu">
        <ul>
            <li>
                <a href="../index.html">Home</a>
            </li>
            <li>
                <a href="../book.php">Book</a>
            </li>
            <li>
                <a href="../author.php">Author</a>
            </li>
            <li>
                <a href="../category.php">Category</a>
            </li>
            <li>
                <a href="../storage.php">Storage</a>
            </li>
        </ul>
    </div>
    <?php
    // Function to get the list of authors
    function getListAuthor($conn)
    {
        $sql = "SELECT au_id, au_name FROM author";
        $result = $conn->query($sql);

        // Check for errors
        if (!$result) {
            die("Error getting authors: " . $conn->error);
        }

        return $result;
    }

    // Function to get the list of storage
    function getListStorage($conn)
    {
        $sql = "SELECT sto_id, sto_shelf FROM storage";
        $result = $conn->query($sql);

        // Check for errors
        if (!$result) {
            die("Error getting storage: " . $conn->error);
        }

        return $result;
    }

    // Function to get the list of categories
    function getListCategory($conn)
    {
        $sql = "SELECT cat_id, cat_name FROM category";
        $result = $conn->query($sql);

        // Check for errors
        if (!$result) {
            die("Error getting categories: " . $conn->error);
        }

        return $result;
    }

    // Function to get the list of books with authors and categories
    function getListBook($conn)
    {
        $sql = "SELECT 
                b.book_id,
                b.book_title,
                b.book_edition,
                b.book_publisher,
                b.book_year,
                b.sto_id,
                GROUP_CONCAT(DISTINCT a.au_name ORDER BY a.au_name ASC SEPARATOR ', ') AS authors,
                GROUP_CONCAT(DISTINCT c.cat_name ORDER BY c.cat_name ASC SEPARATOR ', ') AS categories
            FROM
                book b
            LEFT JOIN 
                book_author ba ON b.book_id = ba.book_id
            LEFT JOIN 
                author a ON ba.au_id = a.au_id
            LEFT JOIN 
                book_cate bc ON b.book_id = bc.book_id
            LEFT JOIN 
                category c ON bc.cat_id = c.cat_id
            GROUP BY b.book_id";

        $result = $conn->query($sql);

        // Check for errors
        if (!$result) {
            die("Error getting books: " . $conn->error);
        }

        return $result;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include '../db.php';
        // Get form data
        $bookID = $_POST["book_id"];
        $title = $_POST["title"];
        $edition = $_POST["edition"];
        $publisher = $_POST["publisher"];
        $year = $_POST["year"];
        $authors = $_POST["authorIDs"];
        $storageID = $_POST["storageID"];
        $categories = $_POST["categoryIDs"];

        try {
            // Update the book table
            $sql = "UPDATE book 
                    SET sto_id = $storageID, 
                    book_edition = '$edition', 
                    book_publisher = '$publisher', 
                    book_year = $year, 
                    book_title = '$title' 
                    WHERE book_id = $bookID;";

            // // Delete existing author and category associations
            $sql .= "DELETE FROM book_author WHERE book_id = $bookID;";
            $sql .= "DELETE FROM book_cate WHERE book_id = $bookID;";

            // Insert into book_author for each author
            foreach ($authors as $authorID) {
                $sql .= "INSERT INTO book_author (au_id, book_id) VALUES ('$authorID', '$bookID');";
            }

            // Insert into book_cate for each category (assuming similar structure)
            foreach ($categories as $categoryID) {
                $sql .= "INSERT INTO book_cate (cat_id, book_id) VALUES ('$categoryID', '$bookID');";
            }

            // Execute the SQL statement
            $conn->multi_query($sql);



            // Close connection
            $conn->close();

            echo "Book updated successfully!";
            // Redirect
            echo '<script>window.location.href = "../book.php";</script>';

        } catch (mysqli_sql_exception $e) {
            echo "My sql query: $sql";
            var_dump($conn);
            var_dump($e);
            exit;
        }


    }

    // Check if book_id is set in the URL
    
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        if (isset($_GET['book_id'])) {
            include '../db.php';
            $bookID = $_GET['book_id'];

            // Function to get book details
            function getBookDetails($conn, $bookId)
            {
                $sql = "SELECT 
                            b.book_id,
                            b.book_title,
                            b.book_edition,
                            b.book_publisher,
                            b.book_year,
                            b.sto_id,
                            GROUP_CONCAT(DISTINCT a.au_name ORDER BY a.au_name ASC SEPARATOR ', ') AS authors,
                            GROUP_CONCAT(DISTINCT a.au_id ORDER BY a.au_id ASC SEPARATOR ', ') AS authorIDs,
                            GROUP_CONCAT(DISTINCT c.cat_name ORDER BY c.cat_name ASC SEPARATOR ', ') AS categories,
                            GROUP_CONCAT(DISTINCT c.cat_id ORDER BY c.cat_id ASC SEPARATOR ', ') AS categoryIDs

                        FROM
                            book b
                        LEFT JOIN 
                            book_author ba ON b.book_id = ba.book_id
                        LEFT JOIN 
                            author a ON ba.au_id = a.au_id
                        LEFT JOIN 
                            book_cate bc ON b.book_id = bc.book_id
                        LEFT JOIN 
                            category c ON bc.cat_id = c.cat_id
                        WHERE
                            b.book_id = ?";

                $stmt = $conn->prepare($sql);
                $stmt->bind_param("i", $bookId);
                $stmt->execute();

                $result = $stmt->get_result();

                if ($result->num_rows > 0) {
                    $bookDetails = $result->fetch_assoc();
                    $stmt->close();
                    return $bookDetails;
                } else {
                    $stmt->close();
                    return null; // or an empty array, depending on your preference
                }
            }

            // Get book details
            $bookDetails = getBookDetails($conn, $bookID);
            // var_dump($bookDetails);
    
            if ($bookDetails) {
                ?>
                <div>
                    <h2 class="header">Update Book</h2>
                    <form action="" method="POST">
                        <input type="hidden" name="book_id"
                            value=" <?php echo isset($bookDetails['book_id']) ? htmlspecialchars($bookDetails['book_id']) : ''; ?>">
                        <div>
                            <label for="title">Title:</label>
                            <input type="text" name="title" value="<?php echo $bookDetails['book_title']; ?>" required><br>
                        </div>
                        <div>
                            <label for="edition">Edition:</label>
                            <input type="text" name="edition" value="<?php echo $bookDetails['book_edition']; ?>"><br>
                        </div>
                        <div>
                            <label for="publisher">Publisher:</label>
                            <input type="text" name="publisher" value="<?php echo $bookDetails['book_publisher']; ?>"><br>
                        </div>
                        <div>
                            <label for="year">Year:</label> <input type="number" name="year"
                                value="<?php echo $bookDetails['book_year']; ?>"><br>
                        </div>
                        <div>
                            <label for="authorIDs">Authors:</label>
                            <select name="authorIDs[]" multiple required>
                                <?php
                                $listOfAuthor = getListAuthor($conn);

                                if ($listOfAuthor->num_rows > 0) {
                                    while ($author = $listOfAuthor->fetch_assoc()) {
                                        //calculate selected fields from bookDetails
                                        $selected = in_array($author['au_id'], explode(',', $bookDetails['authorIDs'])) ? 'selected' : '';
                                        echo "<option value='{$author['au_id']}' $selected>{$author['au_name']}</option>";
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <div>
                            <label for="categoryIDs">Categories:</label>
                            <select name="categoryIDs[]" multiple required>
                                <?php
                                $listOfCategories = getListCategory($conn);
                                if ($listOfCategories->num_rows > 0) {
                                    while ($category = $listOfCategories->fetch_assoc()) {
                                        $selectedCategories = explode(',', $bookDetails['categoryIDs']);
                                        $selected = in_array($category['cat_id'], $selectedCategories) ? 'selected' : '';
                                        echo "<option value='{$category['cat_id']}' $selected>{$category['cat_name']}</option>";
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <div>
                            <label for="storageID">Storage:</label>
                            <select name="storageID" required>
                                <?php
                                $listOfStorage = getListStorage($conn);
                                if ($listOfStorage->num_rows > 0) {
                                    while ($storage = $listOfStorage->fetch_assoc()) {
                                        $selected = ($storage['sto_id'] == $bookDetails['sto_id']) ? 'selected' : '';
                                        echo "<option value='{$storage['sto_id']}' $selected>{$storage['sto_shelf']}</option>";
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <input type="submit" value="Update Book">
                    </form>
                </div>
                <?php
            } else {
                echo "Book not found.";
            }
        }
    }




    ?>
</body>

</html>
<?php
// Close the database connection at the end of the file
$conn->close();
?>