<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <title>Category Page</title>
</head>

<body style="background: #DED0B6; padding: 40px">
    <div id="menu">
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="book.php">Book</a></li>
            <li><a href="author.php">Author</a></li>
            <li><a href="category.php">Category</a></li>
            <li><a href="storage.php">Storage</a></li>
        </ul>
    </div>

    <h2 class="header">Category Information</h2>
    <form method="GET" action="">
    </form>

    <?php
    include 'db.php';

    function getListCategory($conn)
    {
        $sql = "SELECT cat_id, cat_name, cat_keyword, cat_language FROM category";
        $result = $conn->query($sql);
        return $result;
    }

    $listOfCategory = getListCategory($conn);

    if ($listOfCategory->num_rows > 0) {
        // Table header
        echo "<table>";
        echo "<tr><th>ID</th><th>Name</th><th>Keyword</th><th>Language</th><th>Delete</th></tr>";

        // Table rows
        while ($row = $listOfCategory->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["cat_id"] . "</td>";
            echo "<td>" . $row["cat_name"] . "</td>";
            echo "<td>" . $row["cat_keyword"] . "</td>";
            echo "<td>" . $row["cat_language"] . "</td>";
            echo "<td>";
            echo '<form method="POST" action="category/delete_category.php">';
            echo '<input type="hidden" name="id" value="' . $row["cat_id"] . '" />';
            echo '<input class="submit-button delete" type="submit" value="Delete" />';
            echo '</form>';
            echo "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No categories found.";
    }
    ?>

    <h2>Create New Category</h2>

    <form action="category/create_category.php" method="post">
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" required>
        </div>
        <div>
            <label for="keyword">Keyword:</label>
            <input type="text" name="keyword" required>
        </div>
        <div>
            <label for="language">Language:</label>
            <input type="text" name="language" required>
        </div>
        <input type="submit" value="Create Category">
    </form>

    <?php
    $conn->close();
    ?>
</body>

</html>
