<?php

$password = "";

if(isset($_GET["length"])) {

    $letters = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
    $numbers = "0123456789";
    $symbols = "!@#$%^&*()_+-=[]{}|;:,.<>?";

    $characters = "";

    if(isset($_GET["letters"]) && $_GET["letters"] == "on") {
        $characters .= $letters;
    }
        
    if(isset($_GET["numbers"]) && $_GET["numbers"] == "on") {
        $characters .= $numbers;
    }
        
    if(isset($_GET["symbols"]) && $_GET["symbols"] == "on") {
        $characters .= $symbols;
    }
   
    for($i = 0; $i < $_GET['length']; $i++) {

        $randomPosition = rand(0, strlen($characters) - 1);
        $randomCharacter = substr($characters, $randomPosition,1);

        $password.= $randomCharacter;
    }
}
?>