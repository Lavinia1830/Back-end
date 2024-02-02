<?php
   session_start();

   //var_dump($_FILES['image']);
   //print_r($_REQUEST);

   $contacts = isset($_SESSION['contacts'])  ?  $_SESSION['contacts'] : [] ;

   
   $contact = [
       'Firstname' => $_REQUEST['firstname'], 
       'Lastname' => $_REQUEST['lastname'],  
       'Email' => $_REQUEST['email'],
       'Password' => $_REQUEST['password'],
    ];

   $_SESSION['contacts'] = [...$contacts, $contact];

   session_write_close();

    header('Location: http://localhost/Back-end/Esercizio_giorno_3-PHP/index.php');
?>