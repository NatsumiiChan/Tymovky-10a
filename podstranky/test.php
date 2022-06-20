<?php
    include "../php/data.php";
    session_start();
    $connect = new mysqli($host, $user, $psw, $db);
    $selectedAnswer = rand(1, 4);
    $answers = array($selectedAnswer);
    $_SESSION["answers"] = $answers;
    $_SESSION["selectedAnswer"] = $selectedAnswer;
?>

<!DOCTYPE html>
<html lang="cs">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source Sans Pro">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="../css/styles.css">
        <link rel="stylesheet" href="../css/navesti.css">
        <link rel="icon" href="../images/ikonka.png">
        <meta name="keywords" content="Návěsti na HV, HV, Hnací Vozidla">
        <meta name="description" content="Návěstidla">
        <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1">
        <title>Test</title>
        <script 
            src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            crossorigin="anonymous">
        </script>
        <script>
            function checkAnswer(selectedAnswer) {
                var ajax = new XMLHttpRequest();
                ajax.open("GET", "../php/get_correct_answer.php", true);
                ajax.send();
                ajax.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        var correctAnswer = JSON.parse(this.responseText);
                        var answer = correctAnswer.correct_answer;
                        if (selectedAnswer == answer) {
                            switch (selectedAnswer) {
                                case 1:
                                    $('#odpoved_1').addClass('odpoved_true');
                                    $('#odpoved_1').removeClass('odpoved_vybirani');
                                    $('#odpoved_2').removeClass('odpoved_vybirani');
                                    $('#odpoved_3').removeClass('odpoved_vybirani');
                                    break;
                                case 2:
                                    $('#odpoved_2').addClass('odpoved_true');
                                    $('#odpoved_1').removeClass('odpoved_vybirani');
                                    $('#odpoved_2').removeClass('odpoved_vybirani');
                                    $('#odpoved_3').removeClass('odpoved_vybirani');
                                    break;
                                case 3:
                                    $('#odpoved_3').addClass('odpoved_true');
                                    $('#odpoved_1').removeClass('odpoved_vybirani');
                                    $('#odpoved_2').removeClass('odpoved_vybirani');
                                    $('#odpoved_3').removeClass('odpoved_vybirani');
                                    break;
                            }
                        } else {
                            switch (selectedAnswer) {
                                case 1:
                                    $('#odpoved_1').addClass('odpoved_false');
                                    $('#odpoved_1').removeClass('odpoved_vybirani');
                                    $('#odpoved_2').removeClass('odpoved_vybirani');
                                    $('#odpoved_3').removeClass('odpoved_vybirani');
                                    break;
                                case 2:
                                    $('#odpoved_2').addClass('odpoved_false');
                                    $('#odpoved_1').removeClass('odpoved_vybirani');
                                    $('#odpoved_2').removeClass('odpoved_vybirani');
                                    $('#odpoved_3').removeClass('odpoved_vybirani');
                                    break;
                                case 3:
                                    $('#odpoved_3').addClass('odpoved_false');
                                    $('#odpoved_1').removeClass('odpoved_vybirani');
                                    $('#odpoved_2').removeClass('odpoved_vybirani');
                                    $('#odpoved_3').removeClass('odpoved_vybirani');
                                    break;
                            }
                            switch (answer) {
                                case "A":
                                    $('#odpoved_1').addClass('odpoved_true');
                                    $('#odpoved_1').removeClass('odpoved_vybirani');
                                    $('#odpoved_2').removeClass('odpoved_vybirani');
                                    $('#odpoved_3').removeClass('odpoved_vybirani');
                                    break;
                                case "B":
                                    $('#odpoved_2').addClass('odpoved_true');
                                    $('#odpoved_1').removeClass('odpoved_vybirani');
                                    $('#odpoved_2').removeClass('odpoved_vybirani');
                                    $('#odpoved_3').removeClass('odpoved_vybirani');
                                    break;
                                case "C":
                                    $('#odpoved_3').addClass('odpoved_true');
                                    $('#odpoved_1').removeClass('odpoved_vybirani');
                                    $('#odpoved_2').removeClass('odpoved_vybirani');
                                    $('#odpoved_3').removeClass('odpoved_vybirani');
                                    break;
                            }
                        }
                        document.getElementById("odpoved_1").removeAttribute("onclick");
                        document.getElementById("odpoved_2").removeAttribute("onclick");
                        document.getElementById("odpoved_3").removeAttribute("onclick");
                    }
                }
            }

            $(document).ready(function() {
                $("#next").click(function() {
                    $("#test").load("../php/get_next_question.php");
                });
            });
        </script>
    </head>
    <body id="body">
        
        <!--Pojistka proti rozmazávání záhlavní fotky-->
        <div class="anti-rozmazani">
        </div>

        <!--Záhlavní obrázek-->
        <div class = "zahlavi" onclick="location.href='../index.html';">
        </div>

        <!--Navigace a tlačítka v ní-->
        <div class="navigace">
            <div class="flex_pro_navigaci">
                <div class="tlacitko" onclick="location.href='zakladni_info.html';">
                    Základní informace
                </div>
                <div class="tlacitko" onclick="location.href='navesti.html';">
                    Návěsti
                </div>
                <div class="tlacitko" onclick="location.href='hledac.html';">
                    Hledání návěsti
                </div>
                <div class="tlacitko_aktualni" onclick="location.href='test.php';">
                    Test
                </div>
            </div>
            <div class="material-icons menu" onclick="vysun_menu()">
                menu
            </div>
            <div class="material-icons domu" onclick="location.href='../index.html';">
                home
            </div>
        </div>

        <!--menu-->
        <div id="menu" class="nic">
            <div id="flexy_menu" class="flex_pro_menu">
                <div class="material-icons krizek_menu" onclick="zasun_menu()">
                    close
                </div>
                <div class="tlacitko" onclick="location.href='zakladni_info.html';">
                    Základní informace
                </div>
                <div class="tlacitko" onclick="location.href='navesti.html';">
                    Návěsti
                </div>
                <div class="tlacitko" onclick="location.href='hledac.html';">
                    Hledání návěsti
                </div>
                <div class="tlacitko_aktualni" onclick="location.href='test.php';">
                    Test
                </div>
            </div>
            <div id="menu_cernota" class="zavirac_menu" onclick="zasun_menu()">
            </div>
        </div>

        <!--Obsah-->
        <div class="kontejner_dolu">
            <div class="oddelovac">
                
            </div>
            
            <div class="nadpis">
                Test na návěsti
            </div>
            <div class="vybersi" id="next">
                Další otázka
            </div>
            <div class='test_kontejner' id='test'>
                <?php
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
            </div>
            <div class="oddelovac">
            </div>
        </div>

        <!--Způsobové okno--> <!-- Tohle by mohlo vyskočit, pokud by si to uživatel přál, kde by byl název a vysvětlení-->
        <div id="zpusobovy_nositel" class="nic">
            <div class="zavirac" onclick="zpusobove_okno()">
            </div>
            <div class="kontejner_zpusobovy">
                <div id="zaviratel" class="material-icons" onclick="zpusobove_okno()">
                    close
                </div>
                <div class="kontejner_zpusobovy_dolu">
                    <div class="nadpis">
                        Informace o návěsti
                    </div>
                    <div class="oddelovac">
                    </div>
                    <div class="nadpis_mensi" id="nazev_vysvetleni">
                        "Název návěsti"
                    </div>
                    <div class="pismenka_za_sebou" id="popis_vysvetleni">
                        "Popis návěsti"
                    </div>
                    <div class="oddelovac">
                    </div>
                </div>
            </div>
        </div>

        <!--Zápatí-->
        <div class="kontejner_dolu">
            <div class="carka_vodorovna">
            </div>
            <div class="kontejner_vpravo_zapati">
                <div class="autor autor1" onclick="window.open('https://steamcommunity.com/id/Maranaczech', '_blank');">
                    Marana_CZE
                </div>
                <div class="carka_svisla">
                </div>
                <div class="autor autor2" onclick="window.open('https://steamcommunity.com/id/natsumiminako', '_blank');">
                    Natsumi Chan
                </div>
            </div>
            <div class="carka_vodorovna">
            </div>
            <div class="email" onclick="window.open('mailto:info@marana-cze.eu')">
                info@marana-cze.eu
            </div>
        </div>


        <!--Link na script-->
        <script src="../script/start2.js"></script>
        <script src="../script/modal.js"></script>
        <script src="../script/menu.js"></script>

        <!--By Marana_CZE-->
    </body>
</html>