<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Book</title>
    <link rel="stylesheet" href="add_book.css">
</head>

<body>

<form action="" method="POST">
    <h1>Add Book</h1>

    <label>Book Name</label>
    <input type="text" name="book_name" required>

    <label>Book Author</label>
    <input type="text" name="book_author" required>

    <label>Issue Date</label>
    <input type="date" name="issue_date" required>

    <input type="submit" name="Register" value="Register">
</form>

</body>
</html>

<?php
if (isset($_POST['Register'])) {
    include "db.php";

    $Book_Name = $_POST['book_name'];
    $Book_Author = $_POST['book_author'];
    $Issue_Date = $_POST['issue_date'];

    $query = "INSERT INTO library (Book_Name, Book_Author, Issue_Date)
              VALUES ('$Book_Name', '$Book_Author', '$Issue_Date')";

    $run = mysqli_query($conn, $query);

    if ($run) {
        echo "<script>alert('Book Added Successfully'); window.location.href='index.php';</script>";
    } else {
        echo mysqli_error($conn);
    }
}