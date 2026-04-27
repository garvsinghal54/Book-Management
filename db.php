
    <?php
    $db_SERVER = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_name = "book_management";
    $conn = mysqli_connect($db_SERVER, $db_username, $db_password, $db_name);
    if ($conn) {
        echo "Database connected";
    } else {
        echo mysqli_connect_error();
    }
    ?> 