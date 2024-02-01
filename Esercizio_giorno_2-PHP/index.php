<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form method="POST" action="gestione.php">
            <div class="mb-3">
                <label for="exampleInputName" class="form-label">Name</label>
                <input type="text" class="form-control" id="exampleInputName" name='name'>
            </div>
            <div class="mb-3">
                <label for="exampleInputSurname" class="form-label">Surname</label>
                <input type="text" class="form-control" id="exampleInputSurname" name="surname">
            </div>
            <!-- <div class="mb-3">
                <label for="exampleInputCity" class="form-label">City</label>
                <input type="text" class="form-control" id="exampleInputCity" name="city">
            </div> -->
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    
        
        <ul>
            <?php for($i=0; $i < 10; $i++){
                session_start(); 
                echo '<li> User: ' . $_SESSION['user'] . '</li>';
                session_write_close();
            }?>
        </ul>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>