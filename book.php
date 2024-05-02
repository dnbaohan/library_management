<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <title>Book Page</title>
</head>

<body style="background: #DED0B6 ;padding: 40px">
    <div id="menu">
        <ul>
            <li>
                <a href="index.html">Home</a>
            </li>
            <li>
                <a href="book.php">Book</a>
            </li>
            <li>
                <a href="author.php">Author</a>
            </li>
            <li>
                <a href="category.php">Category</a>
            </li>
            <li>
                <a href="storage.php">Storage</a>
            </li>
        </ul>
    </div>

    <h2 class="header">Book Information</h2>
    <form method="GET" action="">
        <h3>Search Information</h3>
        <div>
            <label for="search">Search:</label>
            <input type="text" id="search" name="query" placeholder="Enter your search term">
            <button class="search-button" type="submit">Search</button>
        </div>
        <div>
            <input type="radio" id="id" name="field" value="id">
            <label for="id">ID</label><br>

            <input type="radio" id="title" name="field" value="title">
            <label for="title">Title</label>

            <input type="radio" id="author" name="field" value="author">
            <label for="author">Author</label>

            <input type="radio" id="category" name="field" value="category">
            <label for="category">Category</label>

            <input type="radio" id="edition" name="field" value="edition">
            <label for="edition">Edition</label><br>

            <input type="radio" id="publisher" name="field" value="publisher">
            <label for="publisher">Publisher</label>

            <input type="radio" id="year" name="field" value="year">
            <label for="year">Year</label>

            <input type="radio" id="storage" name="field" value="storage">
            <label for="storage">Storage</label>

        </div>
    </form>
    <?php
    // Connect to db
    include 'db.php';


    function getListBook($conn)
    {
        $sql = "SELECT 
        b.book_id,
        b.book_title,
        b.book_edition,
        b.book_publisher,
        b.book_year,
        b.sto_id,
        a.au_nationality,
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
        category c ON bc.cat_id = c.cat_id";

        if (isset($_GET['query']) and isset($_GET['field'])) {
            $searchQuery = $_GET['query'];
            $searchField = $_GET['field'];
            switch ($searchField) {
                case 'author':
                    $sql .= ' WHERE a.au_name' . " LIKE '%" . $searchQuery . "%'";
                    break;
                case 'category':
                    $sql .= ' WHERE c.cat_name' . " LIKE '%" . $searchQuery . "%'";
                    break;
                case 'storage':
                    $sql .= ' WHERE b.sto_id' . " LIKE '%" . $searchQuery . "%'";
                    break;
                default:
                    $sql .= " WHERE b.book_" . $searchField . " LIKE '%" . $searchQuery . "%'";
                    break;

            }

        }

        $sql .= " GROUP BY b.book_id;";

        $result = $conn->query($sql);
        return $result;
    }
    function getListAuthor($conn)
    {
        $sql = "SELECT au_id, au_name, au_nationality FROM author";
        $result = $conn->query($sql);
        return $result;
    }
    function getListStorage($conn)
    {
        $sql = "SELECT sto_id, sto_shelf FROM storage";
        $result = $conn->query($sql);
        return $result;
    }
    function getListCategory($conn)
    {
        $sql = "SELECT cat_id, cat_name FROM category";
        $result = $conn->query($sql);
        return $result;
    }
    $listOfBook = getListBook($conn);

        function getBookDetails($conn, $bookID)
    {
        $sql = "SELECT * FROM book WHERE book_id = $bookID";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            return $result->fetch_assoc();
        }

        return null;
    }

    if ($listOfBook->num_rows > 0) {
        // header
        echo "<table>";
        echo "<tr><th>ID</th><th>Title</th><th>Storage</th><th>Author</th><th>Category</th><th>Edition</th><th>Publisher</th><th>Year</th><th>Nationality</th><th>Delete</th><th>Update</th></tr>";
        // rows
        while ($row = $listOfBook->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["book_id"] . "</td>";
            echo "<td>" . $row["book_title"] . "</td>";
            echo "<td>" . $row["sto_id"] . "</td>";
            echo "<td>" . $row["authors"] . "</td>";
            echo "<td>" . $row["categories"] . "</td>";
            echo "<td>" . $row["book_edition"] . "</td>";
            echo "<td>" . $row["book_publisher"] . "</td>";
            echo "<td>" . $row["book_year"] . "</td>";
            echo "<td>" . $row["au_nationality"] . "</td>";

            echo "<td>";
            echo '<form method="POST" action="book/delete.php">';
            echo '<input type="hidden" name="id" value="' . $row["book_id"] . '" />';
            echo '<input class="submit-button delete" type="submit" value="Delete" />';
            echo '</form>';
            echo "</td>";
            echo "<td>". "<a class='submit-button update' href='book/update.php?book_id={$row['book_id']}'>Update</a>". "</td>";
            echo "</tr>";


        }

        echo "</table>";
    } else {
        echo "No books found.";
    }
    ?>

    <h2>Create New Book</h2>

    <form action="book/create.php" method="POST">
        <div>
            <label for="title">Title:</label>
            <input type="text" name="title" required>
        </div>
        <div>
            <label for="edition">Edition:</label>
            <input type="text" name="edition" required>
        </div>

        <div>
            <label for="publisher">Publisher:</label>
            <input type="text" name="publisher" required>
        </div>
        <div>
            <label for="year">Year:</label>
            <input type="number" name="year" required>
        </div>
        <div>
            <label for="authorIDs">Authors:</label>
            <select name="authorIDs[]" multiple required>
                <?php
                $listOfAuthor = getListAuthor($conn);
                if ($listOfAuthor->num_rows > 0) {
                    while ($author = $listOfAuthor->fetch_assoc()) {
                        echo "<option value='{$author['au_id']}'>{$author['au_name']}</option>";
                    }
                }
                ?>
            </select>
        </div>
        <div>
            <label for="categoryIDs">Categories:</label>
            <select name="categoryIDs[]" multiple required>
                <option value="auto">Choose the category</option>
                <?php
                $listOfCategories = getListCategory($conn);
                if ($listOfCategories->num_rows > 0) {
                    while ($category = $listOfCategories->fetch_assoc()) {
                        echo "<option value='{$category['cat_id']}'>{$category['cat_name']}</option>";
                    }
                }
                ?>
            </select>
        </div>
        <div>
            <label for="storageID">Storage:</label>
            <select name="storageID" required>
                <option value="auto">Choose the storage</option>
                <?php
                $listOfStorage = getListStorage($conn);
                if ($listOfStorage->num_rows > 0) {
                    while ($storage = $listOfStorage->fetch_assoc()) {
                        echo "<option value='{$storage['sto_id']}'>{$storage['sto_shelf']}</option>";
                    }
                }
                ?>
            </select>
        </div>

        <input type="submit" value="Create Book">
    </form>

</body>

</html>
<?php
// Close the database connection at the end of the file
$conn->close();
?>