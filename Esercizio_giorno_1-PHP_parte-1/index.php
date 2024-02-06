<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h2>Esercizio 1</h2>
                <?php

                    $day = date("l");
                    $number = date("j");
                    $month = date("F");
                    $year = date("Y");

                    switch ($month) {
                        case 'January':
                            $month = 'Gennaio';
                        break;
                        case 'February':
                            $month = 'Febbraio';
                        break;
                        case 'March':
                            $month = 'Marzo';
                        break;
                        case 'April':
                            $month = 'Aprile';
                        break;
                        case 'May';
                            $month = 'Maggio';
                        break;
                        case 'June';
                            $month = 'Giugno';
                        break;
                        case 'July';
                            $month = 'Luglio';
                        break;
                        case 'August';
                            $month = 'Agosto';
                        break;
                        case 'September';
                            $month = 'Settembre';
                        break;
                        case 'October';
                            $month = 'Ottobre';
                        break;
                        case 'November';
                            $month = 'Novembre';
                        break;
                        default: 'December';
                            $month = 'Dicembre';
                        break;
                    }

                    switch ($day) {
                        case 'Monday':
                            $day = 'Lunedì';
                        break;
                        case 'Tuesday':
                            $day = 'Martedì';
                        break;
                        case 'Wednesday':
                            $day = 'Mercoledì';
                        break;
                        case 'Thursday':
                            $day = 'Giovedì';
                        break;
                        case 'Friday':
                            $day = 'Venerdì';
                        break;
                        case 'Saturday':
                            $day = 'Sabato';
                        break;
                        default: 'Sunday';
                            $day = 'Domenica';
                        break;
                    }

                    $str = '<p class=card-text> Oggi è il giorno: ';
                    $str .= $day . ', ' . $number . ' ' . $month . ' ' . $year . ' ' . '</p>';
                    echo $str;
                ?>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h2>Esercizio 2</h2>
                <?php 
                    $seriesA = [
                        "Inter" => ["Sommer","Acerbi","De Vrij","Darmian","Dimarco","Mkhiraryan", "Çalhanoğlu", "Barella", "Dumfries", "Martínez", "Thuram"],
                        "Juventus" => ["Szczęsny", "Cambiaso", "Gatti", "Bremer", "Rugani", "Kostić", "McKennie", "Caviglia", "Rabiot", "Chiesa", "Vlahović"],
                        "Milan" => ["Maignan","Hernández","Thiaw","Kjær","Calabria","Reijuders", "Krunić", "Loftus-Cheek", "Leão", "Giroud", "Pulisic"],
                        "Atalanta" => ["Musso", "Scalvini", "Djimsiti", "Kolašinac", "Zappacosta", "De Roon", "Ederson", "Ruggeri", "Koopmeiners", "Lookman", "Scamacca"]
                    ]
                ?>
                <p class="card-text">
                    <?php 
                        foreach ($seriesA as $key => $value) {
                            echo "<h3>" . $key . '</h3>';
                            echo '<ul>';
                                foreach($value as $player){
                                    echo '<li>' . $player . '</li>';
                                }
                            echo'</ul>';
                        }
                    ?>
                </p>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h2>Esercizio 3</h2>
                <?php 
                    $calendar = [["Inter", "Juventus"], ["Milan", "Atalanta"]]
                ?>
                <p class="card-text">
                    <?php 
                        foreach ($calendar as $team) { 
                    ?>
                        <div class="row align-items-start">
                            <div class="col">
                                <h2><?= $team[0] ?></h2>
                                <ul>
                                    <?php 
                                        foreach($seriesA[$team[0]] as $player){
                                            echo '<li>' . $player . '</li>';
                                        }
                                    ?>
                                </ul>
                            </div>
                            <div class="col">
                                <h2><?= $team[1] ?></h2>
                                <ul>
                                    <?php 
                                        foreach($seriesA[$team[1]] as $player){
                                            echo '<li>' . $player . '</li>';
                                        }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    <?php } ?>
                </p>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>