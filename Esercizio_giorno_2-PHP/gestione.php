<?php 
    if(isset($_POST['name']) && isset($_POST['surname'])) {
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        
        $arr = [];
        $arr['name'] = $name;
        $arr['surname'] = $surname;

        print_r ($arr);
        
        
    }

    for($i = 0; $i < 10; $i++){
        session_start();
        $_SESSION['user'] = $arr['name'] . ' ' . $arr['surname'];
        session_write_close();
        var_dump($_SESSION);
    }
        
        
        

    //header('Location: http://localhost/Back-end/Esercizio_giorno_2-PHP/index.php')
?>