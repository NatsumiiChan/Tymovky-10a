<?php
    include "data.php";
    session_start();
    $selectedAnswer = $_SESSION['selectedAnswer'];

    $connect = new mysqli($host, $user, $psw, $db);
    $sql = "SELECT correct_answer FROM navestidla_test WHERE idnavestidla_test = $selectedAnswer";
    $result = mysqli_query($connect, $sql);

    $row = mysqli_fetch_assoc($result);
    echo json_encode($row);
?>