<?php
    include "data.php";
    $connect = new mysqli($host, $user, $psw, $db) or die("nepovedlo se pripojit");
    echo "pripojeno<br>";

    $connect->set_charset("UTF8") or die("nenastaveno");
    echo "nastaveno<br>";

    $SQL = "SELECT idnavestidla_test, question, answerOne, answerTwo, answerThree, correctAnswer FROM navestidla_test";
    $result = $connect->query($SQL) or die("nepovedlo se ".$SQL);
    
    while ($row = $result->fetch_object()) {
        echo "
        <div class="odpovedi">
            <div class="odpoved odpoved_vybirani" id="odpoved_1">
                <div class="oznaceni_odpovedi">
                    A
                </div>
                <div class="text_odpovedi">
                    ".$row->answerOne."
                </div>
            </div>
            <div class="carka_test">
            </div>
            <div class="odpoved odpoved_true" id="odpoved_2">
                <div class="oznaceni_odpovedi">
                    B
                </div>
                <div class="text_odpovedi">
                    ".$row->answerTwo."
                </div>
            </div>
            <div class="carka_test">
            </div>
            <div class="odpoved odpoved_false" id="odpoved_3">
                <div class="oznaceni_odpovedi">
                    C
                </div>
                <div class="text_odpovedi">
                    ".$row->answerThree."
                </div>
            </div>
        </div>";
    }

    $result->free();
    $connect->close();
?>