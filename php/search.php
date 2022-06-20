<?php
    include "data.php";
    $searchIndex = $_POST['searchNewIndex'];

    $connect = new mysqli($host, $user, $psw, $db);
    $sql = "SELECT type, category, name, description FROM navestidla WHERE search_index = '$searchIndex'";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_assoc($result);
    if ($row) {
        echo $row['type'] . "," . $row['category'] . "," . $row['name'] . "," . $row['description'];
    } else {
        echo "neni";
    }
?>