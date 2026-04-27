<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Management</title>
</head>

<body>
    <form action="" Method="POST">
        <label>Book Name</label>
        <input type="text" name="book_name" value=""><br>
        <label>Book Author</label>
        <input type="text" name="book_author" value=""><br>
        <label>Issue Date</label>
        <input type="date" name="issue_date" value=""><br>
        <input type="Submit" name="Register" value="Register"><br>
    </form>
</body>

</html>

<?php
if (isset($_POST['Register'])) {
    include "db.php";
    $Book_Name = $_POST['book_name'];
    $Book_Author = $_POST['book_author'];
    $Issue_Date = $_POST['issue_date'];

    $query = "INSERT INTO library(Book_Name,Book_Author,Issue_Date)Values('$Book_Name','$Book_Author','$Issue_Date')";
    $run = mysqli_query($conn, $query);
    if ($run) {
        echo "you are registered";
    } else {
        echo mysqli_error($conn);
    }
}
