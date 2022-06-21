<?php
    include "data.php";
    session_start();
    $connect = new mysqli($host, $user, $psw, $db);
    $answers = $_SESSION["answers"];
    $selectedAnswer = rand(1, 6);
    echo "<script>console.log(".json_encode($answers).");</script>";
    echo "<script>console.log(".json_encode($selectedAnswer).");</script>";
    if (count($answers) == 6) {
        while ($answers[3] == $selectedAnswer) {
            $selectedAnswer = rand(1, 6);
        }
        $answers = array($selectedAnswer);
    } else {
        while (in_array($selectedAnswer, $answers)) {
            $selectedAnswer = rand(1, 6);
        }
        array_push($answers, $selectedAnswer);
    }
    
    echo "<script>console.log(".json_encode($answers).");</script>";
    $_SESSION["answers"] = $answers;
    $_SESSION["selectedAnswer"] = $selectedAnswer;
    
    $sql = "SELECT name, image_src, answer_one, answer_two, answer_three FROM navestidla_test WHERE idnavestidla_test = $selectedAnswer";
    $result = mysqli_query($connect, $sql);
                        
    echo "<div class='img_test' id='img_na_testu'>";
    while($row = mysqli_fetch_array($result)){
        $name = $row['name'];
        $image_src = $row['image_src'];
        $answer_one = $row['answer_one'];
        $answer_two = $row['answer_two'];
        $answer_three = $row['answer_three'];
        if ($image_src[0] == '.') {
            echo "<img src='$image_src' alt='$name' class='fotecka_na_testu'>";
        } else {
            echo "<div alt='$name' class='fotecka_na_testu $image_src'></div>";
        }
        echo "</div>";
        echo "<div class='odpovedi'>";
            echo "<div class='odpoved odpoved_vybirani' id='odpoved_1' onclick='checkAnswer(1)'>";
                echo "<div class='oznaceni_odpovedi'>A</div>";
                echo "<div class='text_odpovedi'>$answer_one</div>";
            echo "</div>";

            echo "<div class='carka_test'></div>";
            echo "<div class='odpoved odpoved_vybirani' id='odpoved_2' onclick='checkAnswer(2)'>";
                echo "<div class='oznaceni_odpovedi'>B</div>";
                echo "<div class='text_odpovedi'>$answer_two</div>";
            echo "</div>";

            echo "<div class='carka_test'></div>";
            echo "<div class='odpoved odpoved_vybirani' id='odpoved_3' onclick='checkAnswer(3)'>";
                echo "<div class='oznaceni_odpovedi'>C</div>";
                echo "<div class='text_odpovedi'>$answer_three</div>";
            echo "</div>";
        echo "</div>";
    }
?>