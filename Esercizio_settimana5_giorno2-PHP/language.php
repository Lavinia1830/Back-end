<?php

    require_once('db.php');

    // Setting a session
    session_start();

    print_r($_REQUEST['lang']);

    // Leggo dati da una tabella
    $sql = 'SELECT * FROM content_'.$_REQUEST['lang'];
    $res = $mysqli->query($sql); // return un mysqli result
    if($row = $res->fetch_assoc()) { 
       //print_r($row);
        $_SESSION['content'] = $row;
        session_write_close();
        header('Location: http://localhost/Back-end/Esercizio_settimana5_giorno2-PHP/');
        exit;
    }