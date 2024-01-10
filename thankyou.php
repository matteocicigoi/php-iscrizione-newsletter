<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Iscrizione Newsletter</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Fine Bootstrap -->
</head>

<body>
    <main class="container">
        <h1 class="text-center my-5">PHP Iscrizione Newsletter</h1>
        <p class="text-center"><?php echo $_SESSION['email']; ?></p>
        <div class="alert alert-success w-50 m-auto" role="alert">
            la mail contiene un punto e una chiocciola
        </div>
    </main>
</body>

</html>