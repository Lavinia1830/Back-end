<?php
    //Riciamo il file config
    require_once 'config.php';
    //var_dump($config); // mostra quello che hai scritto nell'array $config 

    $mysqli = new mysqli(
        $config['mysql_host'],
        $config['mysql_user'],
        $config['mysql_password'],
    );
    if ($mysqli->connect_error) {
        die($mysqli->connect_error);
    }

    //Creo un DataBase
    $sql = 'SELECT * FROM users';
    $result = $mysqli->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Lista utenti</title>
</head>
<body>
    <h1>Lista Utenti</h1>
    <p><a href="">Aggiungere Utente</a></p>
    <table class="table-info table-striped">
        
    </table>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>