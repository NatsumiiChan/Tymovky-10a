<?php
    include "data.php";
    session_start();
    $answerCount = $_SESSION['answerCount'];

    $connect = new mysqli($host, $user, $psw, $db);
    $sql = "SELECT correct_answer FROM navestidla_test WHERE idnavestidla_test = $answerCount";
    $result = mysqli_query($connect, $sql);
    //return correct answer
    $row = mysqli_fetch_assoc($result);
    echo json_encode($row);
?>