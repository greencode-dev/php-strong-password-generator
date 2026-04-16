<?php

session_start();

$password = $_SESSION['password'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generata</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-primary bg-opacity-10">
    <div class="container py-5 text-center">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="mb-4 text-secondary">Risultato Generazione</h1>
                
                <div class="alert alert-success shadow border-0 py-4" role="alert">
                    <h4 class="alert-heading mb-3">Password di <?php echo strlen($password) ?> caratteri generata con successo!</h4>
                    <hr>
                    <code class="display-6 fw-bold text-dark bg-white px-3 py-2 rounded"><?php echo htmlspecialchars($password) ?></code>
                </div>

                <div class="mt-4">
                    <a href="./index.php" class="btn btn-outline-primary px-4">Torna Indietro</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>