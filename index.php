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
    <title>Strong Password Generator</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-primary bg-opacity-10">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="text-center text-secondary mb-4">Genera la tua Password</h1>

                <div class="card shadow p-4 border-0">
                    <form action="" method="GET">
                        <div class="mb-3">
                            <label for="length" class="form-label fw-semibold">Lunghezza della Password (5-20):</label>
                            <input type="number" class="form-control" id="length" name="length" value="10" min="5" max="20">
                        </div>

                        <div class="mb-4">
                            <label class="form-label d-block fw-semibold">Parametri della Password:</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="letters" name="letters" checked>
                                <label class="form-check-label" for="letters">Lettere</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="numbers" name="numbers" checked>
                                <label class="form-check-label" for="numbers">Numeri</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="symbols" name="symbols" checked>
                                <label class="form-check-label" for="symbols">Simboli</label>
                            </div>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg">Genera Password</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>