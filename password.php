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
    <style>
        @keyframes pulseSuccess {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
        .copy-pulse {
            animation: pulseSuccess 0.4s ease-in-out;
        }
    </style>
</head>
<body class="bg-primary bg-opacity-10">
    <div class="container py-5 text-center">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="mb-4 text-secondary">Risultato Generazione</h1>
                
                <div class="alert alert-success shadow border-0 py-4" role="alert">
                    <h4 class="alert-heading mb-3">Password di <?php echo strlen($password) ?> caratteri generata con successo!</h4>
                    <hr class="mb-4">
                    <p class="text-muted small mb-2">Clicca sulla password per copiarla</p>
                    <div class="d-flex justify-content-center align-items-center">
                        <code id="passwordText" 
                              class="display-6 fw-bold text-dark bg-white px-4 py-3 rounded border border-2 shadow-sm" 
                              style="cursor: pointer; transition: all 0.2s;" 
                              onclick="copyToClipboard(this)"
                              title="Clicca per copiare"><?php echo htmlspecialchars($password) ?></code>
                    </div>
                </div>
                
                <div class="mt-4">
                    <a href="./index.php" class="btn btn-outline-primary px-4">Torna Indietro</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        function copyToClipboard(element) {
            const text = element.innerText;
            navigator.clipboard.writeText(text).then(() => {
                // Feedback visivo sull'elemento cliccato
                element.classList.add('copy-pulse', 'border-success', 'bg-success-subtle');
                element.classList.remove('bg-white');

                setTimeout(() => {
                    element.classList.remove('copy-pulse', 'border-success', 'bg-success-subtle');
                    element.classList.add('bg-white');
                }, 500);
            });
        }
    </script>
</body>
</html>