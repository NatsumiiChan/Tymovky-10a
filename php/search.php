<?php
    include "data.php";
    $searchIndex = $_POST['searchNewIndex'];

    $connect = new mysqli($host, $user, $psw, $db);
    $sql = "SELECT name, description FROM navestidla WHERE search_index = '$searchIndex'";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_assoc($result);
    if ($row) {
        echo "<b>Název: </b>".$row['name']."<br>";
        echo "<b>Popis: </b>".$row['description'];
    } else {
        echo "Neexistuje nebo není v databázi.";
    }
?>