<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <title>Author Page</title>
</head>

<body style="background: #DED0B6;padding: 40px">
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

    <h2 class="header">Author Information</h2>
    <?php
    include 'db.php';

    function getListAuthor($conn)
    {
        $sql = "SELECT au_id, au_name, au_address, au_gender, au_nationality FROM author";
        $result = $conn->query($sql);
        return $result;
    }

    $listOfAuthor = getListAuthor($conn);

    if ($listOfAuthor->num_rows > 0) {
        // header
        echo "<table>";
        echo "<tr><th>ID</th><th>Name</th><th>Address</th><th>Gender</th><th>Nationality</th><th>Delete</th></tr>";
        // rows
        while ($row = $listOfAuthor->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["au_id"] . "</td>";
            echo "<td>" . $row["au_name"] . "</td>";
            echo "<td>" . $row["au_address"] . "</td>";
            echo "<td>" . $row["au_gender"] . "</td>";
            echo "<td>" . $row["au_nationality"] . "</td>";
            echo "<td>";
            echo '<form method="POST" action="author/delete_author.php">';
            echo '<input type="hidden" name="id" value="' . $row["au_id"] . '" />';
            echo '<input class="submit-button delete" type="submit" value="Delete" />';
            echo '</form>';
            echo "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No authors found.";
    }
    ?>

    <h2>Create New Author</h2>

    <form action="author/create_author.php" method="post">
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" required>
        </div>
        <div>
            <label for="address">Address:</label>
            <input type="text" name="address" required>
        </div>
        <div>
            <label for="gender">Gender:</label>
            <select name="gender" required>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
        </div>
        <div>
            <label for="nationality">Nationality:</label>
            <input type="text" name="nationality" required>
        </div>
        <input type="submit" value="Create Author">
    </form>

</body>

</html>
<?php
$conn->close();
?>