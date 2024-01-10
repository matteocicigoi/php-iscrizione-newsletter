<?php
// verifica
$success = false;
if (!empty($_GET['email'])) {
    $email = $_GET['email'];
    if (stripos($email, '.') !== false && stripos($email, '@') !== false) {
        $success = true;
    }
}
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
        <form action="index.php" method="GET" class="row justify-content-center g-1">
            <!-- Email -->
            <div class="col-5">
                <label for="email" class="visually-hidden">Password</label>
                <input type="email" class="form-control" id="email" placeholder="Email" name="email">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">Invia</button>
            </div>
            <!-- Fine Email -->
        </form>
        <?php if ($success) : ?>
            <div class="alert alert-success w-50 m-auto" role="alert">
                la mail contiene un punto e una chiocciola
            </div>
        <?php else : ?>
            <div class="alert alert-danger w-50 m-auto" role="alert">
                la mail NON contiene un punto e una chiocciola
            </div>
        <?php endif; ?>
    </main>
</body>

</html>