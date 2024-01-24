<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1>Generatore Password</h1>
    <br>
    <form>
        <label for="psw-len">Inserisci la lunghezza della tua password</label>
        <input type="text" name="psw-len">
        <input type="submit" value="Genera Password">
    </form>

    <?php
    include 'functions.php';
    $pswLen = $_GET['psw-len'];
    

    if(is_numeric($pswLen) && $pswLen != 0){
        $userPsw = genPassword($pswLen); 
        echo "<br><h3>Ecco la tua password: $userPsw</h3>";
    }else{
        echo "<br><h3>Devi inserire un numero maggiore di zero<h3>";
    }

    ?>
    
</body>