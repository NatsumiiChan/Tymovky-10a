<?php
    include "data.php";
    $c1 = $_POST['color1'];
    $c2 = $_POST['color2'];
    $c3 = $_POST['color3'];
    $search = "";

    switch ($c1) {
        case "":
            $search += "E";
            break;
        case "red":
            $search += "R";
            break;
        case "yellow":
            $search += "Y";
            break;
        case "green":
            $search += "G";
            break;
        case "white":
            $search += "W";
            break;
        case "blue":
            $search += "B";
            break;
    }

    switch ($c2) {
        case "":
            $search += "E";
            break;
        case "red":
            $search += "R";
            break;
        case "yellow":
            $search += "Y";
            break;
        case "green":
            $search += "G";
            break;
        case "white":
            $search += "W";
            break;
        case "blue":
            $search += "B";
            break;
    }

    switch ($c3) {
        case "":
            $search += "E";
            break;
        case "red":
            $search += "R";
            break;
        case "yellow":
            $search += "Y";
            break;
        case "green":
            $search += "G";
            break;
        case "white":
            $search += "W";
            break;
        case "blue":
            $search += "B";
            break;
    }

    $connect = new mysqli($host, $user, $psw, $db) or die("nepovedlo se pripojit");
    echo "pripojeno<br>";

    $connect->set_charset("UTF8") or die("nenastaveno");
    echo "nastaveno<br>";

    $SQL = "SELECT type, name, description, image_src, search_index FROM navestidla";
    $result = $connect->query($SQL) or die("nepovedlo se ".$SQL);
    
    while ($row = $result->fetch_object()) {
        if ($search == $row->search_index) {
            echo $row->type." ".$row->name." ".$row->description."<br>";
        }
    }

    $result->free();
    $connect->close();
?>