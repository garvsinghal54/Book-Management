<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Management</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Welcome to Book Management</h1>

    <a href="add.php">ADD BOOK</a>

    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>Id</th>
            <th>Book_Name</th>
            <th>Book_Author</th>
            <th>Issue_Date</th>
        </tr>

        <?php
        include "db.php";
        $query = "SELECT * FROM library";
        $run = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_assoc($run)) {
            echo "<tr>";
            echo "<td>{$row['Id']}</td>";
            echo "<td>{$row['Book_Name']}</td>";
            echo "<td>{$row['Book_Author']}</td>";
            echo "<td>{$row['Issue_Date']}</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>