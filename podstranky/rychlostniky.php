<?php
    include "../php/data.php";
    $ψοννεψτ = new mysqli($host, $user, $psw, $db);
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
        <meta name="keywords" content="Rychlostníky">
        <meta name="description" content="Návěstidla">
        <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1">
        <title>Rychlostníky</title>
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
            <div class="material-icons zpatky" onclick="location.href='navesti.html';">
                arrow_back
            </div>
            <div class="flex_pro_navigaci">
                <div class="tlacitko" onclick="location.href='zakladni_info.html';">
                    Základní informace
                </div>
                <div class="tlacitko_aktualni" onclick="location.href='navesti.html';">
                    Návěsti
                </div>
                <div class="tlacitko" onclick="location.href='hledac.html';">
                    Hledání návěsti
                </div>
                <div class="tlacitko" onclick="location.href='test.php';">
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
                <div class="tlacitko_aktualni" onclick="location.href='navesti.html';">
                    Návěsti
                </div>
                <div class="tlacitko" onclick="location.href='hledac.html';">
                    Hledání návěsti
                </div>
                <div class="tlacitko" onclick="location.href='test.php';">
                    Test
                </div>
            </div>
            <div id="menu_cernota" class="zavirac_menu" onclick="zasun_menu()">
            </div>
        </div>

        <!--Vybírač-->
        <div class="zavirac_popupu nic" id="zavirac_popupu" onclick="vysunSe()">
        </div>
        <div class="nositel">
            <div class="material-icons nastaveni" id="nastavovani" onclick="vysunSe()">
            settings
            </div>
            <div class="nic" id="interier_popupu">
                <div class="vybirac">
                    <span class="material-icons krizek" onclick="vybirac('ns')" id="ns_vybirac">
                        clear
                    </span>
                    <span class="vybiraci_text">
                        Rychlostníky NS
                    </span>
                </div>
                <div class="vybirac">
                    <span class="material-icons krizek" onclick="vybirac('n')" id="n_vybirac">
                        clear
                    </span>
                    <span class="vybiraci_text">
                        Rychlostníky N
                    </span>
                </div>
                <div class="vybirac">
                    <span class="material-icons krizek" onclick="vybirac('r')" id="r_vybirac">
                        clear
                    </span>
                    <span class="vybiraci_text">
                        Rychlostníky R
                    </span>
                </div>
                <div class="vybirac">
                    <span class="material-icons krizek" onclick="vybirac('prechod')" id="prechod_vybirac">
                        clear
                    </span>
                    <span class="vybiraci_text">
                        Rychlostníky 3. přechodové skupiny
                    </span>
                </div>
                <div class="vybirac">
                    <span class="material-icons krizek" onclick="vybirac('indikator')" id="indikator_vybirac">
                        clear
                    </span>
                    <span class="vybiraci_text">
                        Indikátory
                    </span>
                </div>
                <div class="vybirac">
                    <span class="material-icons krizek" onclick="vybirac('pj')" id="pj_vybirac">
                        clear
                    </span>
                    <span class="vybiraci_text">
                        Pomalé jízdy
                    </span>
                </div>
            </div>
        </div>

        <!--Obsah-->
        <div class="kontejner_dolu">
            <div class="nadpis">
                Rychlostníky
            </div>
            <div class="pismenka_za_sebou">
                Zde je přehled rychlostníků a pomalých jízd.
            </div>
            <div class="tlacitko_zpusobove" onclick="zpusobove_okno()">
                Doplňující informace
            </div>
            <!--Obsah obsahu-->
            <?php
                $sql = "SELECT DISTINCT category FROM navestidla WHERE type = 'Rychlostníky' ORDER BY category DESC";
                $ρεσθλτ = mysqli_query($ψοννεψτ, $sql);
                while ($ρος = mysqli_fetch_assoc($ρεσθλτ)) {
                    $ψατεγορυ = $ρος['category'];
                    $ιδ = '';
                    switch ($ψατεγορυ) {
                        case 'Rychlostníky NS':
                            $ιδ = 'ns';
                            break;
                        case 'Rychlostníky N':
                            $ιδ = 'n';
                            break;
                        case 'Rychlostníky 3':
                            $ιδ = 'prechod';
                            break;
                        case 'Rychlostníky R':
                            $ιδ = 'r';
                            break;
                        case 'Indikátory':
                            $ιδ = 'indikator';
                            break;
                        case 'Pomalé jízdy':
                            $ιδ = 'pj';
                            break;
                    }
                    echo "<div class='kontejner_dolu' id='$ιδ'>";
                        echo "<div class='nadpis_mensi'>";
                            echo $ψατεγορυ;
                        echo "</div>";
                        echo "<div class='karticky_ve_flexu'>";
                            $sqlΣεψ = "SELECT name, image_src FROM navestidla WHERE category = '$ψατεγορυ'";
                            $ρεσθλτΣεψονδ = mysqli_query($ψοννεψτ, $sqlΣεψ);
                            while ($ρος = mysqli_fetch_assoc($ρεσθλτΣεψονδ)) {
                                $ναμε = $ρος['name'];
                                $ιμαγε = $ρος['image_src'];
                                echo "<div class='karticka'>";
                                    echo "<img src='$ιμαγε' alt='$ναμε' class='fotecka_v_karticce'>";
                                    echo "<div class='carka'></div>";
                                    echo "<div class='nadpis_mensi'>";
                                        echo $ναμε;
                                    echo "</div>";
                                echo "</div>";
                            }
                        echo "</div>";
                    echo "</div>";
                }
            ?>
        </div>

        <!--Způsobové okno-->
        <div id="zpusobovy_nositel">
            <div class="zavirac" onclick="zpusobove_okno()">
            </div>
            <div class="kontejner_zpusobovy">
                <div id="zaviratel" class="material-icons" onclick="zpusobove_okno()">
                    close
                </div>
                <div class="kontejner_zpusobovy_dolu">
                    <div class="nadpis">
                        Doplňující informace o použitých pojmech
                    </div>
                    <div class="oddelovac">
                    </div>
                    <div class="nadpis_mensi">
                        Kdy se musí umístit předvěstník rychlostníku?
                    </div>
                    <div class="pismenka_za_sebou">
                        Jestliže je rozdíl mezi rychlostí aktuálního a následujícího úseku vyšší než 10 km/h a jestliže se snižuje rychlost z rychlosti 120km/h a nižší. (Pokud se rychlost zvyšuje, předvěst se neumisťuje)
                    </div>
                    <div class="oddelovac">
                    </div>
                    <div class="nadpis_mensi">
                        Jak funguje předvěstník dvou rychlostníků N nad sebou?
                    </div>
                    <div class="pismenka_za_sebou">
                        Jestliže je rozdíl rychlostí horního a dolního rychlostníku N vyšší než 10km/h. V opačném případě se umístí pouze předvěst dolního rychlostníku N. Vyjímkou je pouze předvěst dvou rychlostníků N s dvěmi černými pruhy, v tuto chvíli je zákázáno využít dvou předvěstníků N.
                    </div>
                    <div class="oddelovac">
                    </div>
                    <div class="nadpis_mensi">
                        Jak číst předvěstník rychlostníku?
                    </div>
                    <div class="pismenka_za_sebou">
                        Návěst se celým jménem jmenuje "Očekávejte traťovou rychlost". Číslo umístěné v předvěstníku musíme vynásobit deseti, abychom zjistili očekávanou rychlost.
                    </div>
                    <div class="oddelovac">
                    </div>
                    <div class="nadpis_mensi">
                        Rychlostníky NS
                    </div>
                    <div class="pismenka_za_sebou">
                        Tyto rychlostníky jsou platné pouze pro vozidla s naklápěcími skříněmi (Například Pendolino).
                    </div>
                    <div class="oddelovac">
                    </div>
                    <div class="nadpis_mensi">
                        Rychlostníky N
                    </div>
                    <div class="pismenka_za_sebou">
                        Tyto rychlostníky jsou platné pro všechna vozidla, která se neřídí rychlostníky R, rychlostníky NS ani rychlostníky 3. Jestliže jsou umístěny dva nad sebou, horním se strojvedoucí smí řídit, jestliže vozy v soupravě jsou schopna průjezdu obloukem, při nedostatku převýšení alespoň 130 mm.
                    </div>
                    <div class="oddelovac">
                    </div>
                    <div class="nadpis_mensi">
                        Rychlostník N s černými pruhy
                    </div>
                    <div class="pismenka_za_sebou">
                        Tento rychlostník je možné využít pouze, jestliže o tom byl strojvedoucí zpraven.
                    </div>
                    <div class="oddelovac">
                    </div>
                    <div class="nadpis_mensi">
                        Rychlostníky R
                    </div>
                    <div class="pismenka_za_sebou">
                        Tyto rychlostníky jsou platné pouze v případech stanovených TTP. (Tabulkou Traťových poměrů)
                    </div>
                    <div class="oddelovac">
                    </div>
                    <div class="nadpis_mensi">
                        Rychlostníky 3
                    </div>
                    <div class="pismenka_za_sebou">
                        Tyto rychlostníky jsou platné pouze pro vozidla skupiny 3 přechodnosti. (To jsou vozidla, u nichž je příčná síla vyšší než 60kN, obecně lze řící, všechna vozidla s více jak 3 dvojkolími v jednom podvozku)
                    </div>
                    <div class="oddelovac">
                    </div>
                    <div class="nadpis_mensi">
                        Co je to PJ (Pomalá Jízda)
                    </div>
                    <div class="pismenka_za_sebou">
                        Je to přechodné omezení rychlosti v úseku. Strojvedoucí je o tomto omezení informován v rozkaze.
                    </div>
                    <div class="oddelovac">
                    </div>
                    <div class="nadpis_mensi">
                       Může být PJ bez samotných návěstí?
                    </div>
                    <div class="pismenka_za_sebou">
                        Ano může. Například v připádě vzniku MU (Mimořádné Události) na trati. O jejím vzniku a zkončení pak rozhoduje velitel zásahu a strojvedoucí je informován rozkazem.
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
        <script src="../script/popup.js"></script>
        <script src="../script/vybirac.js"></script>
        <script src="../script/menu.js"></script>

        <!--By Marana_CZE-->
    </body>
</html>