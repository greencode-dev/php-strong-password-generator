<?php

require_once("./functions.php");

if ($password !="") {

    session_start();

    $_SESSION["password"] = $password;

    header("Location: ./password.php");
}   

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
</head>
<body>
 
    <h1>Generatore di Password</h1>

    <form action="">

        <label for="length">Lunghezza della Password:</label>
        <input type="number" id="length" name="length" value="5" min="5" max="20">

        <div>
            <input type="checkbox" id="letters" name="letters">
            <label for="letters">Lettere</label>
            <input type="checkbox" id="numbers" name="numbers">
            <label for="numbers">Numeri</label>
            <input type="checkbox" id="symbols" name="symbols">
            <label for="symbols">Simboli</label>
        </div>

        <br>
        <br>

        <button type="submit">Genera Password</button>

    </form>

    <hr>

    <?php
    if($password != "") {
    ?>

    <h2>Password di <?php echo $_GET['length']; ?> caratteri generata:</h2>
    <pre><?php echo $password;?></pre>

    <?php
    }
    ?>


    
</body>
</html>