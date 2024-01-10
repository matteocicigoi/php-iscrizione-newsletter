<?php
// verifica email
$success = null;
if (!empty($_GET['email'])) {
    $success = false;
    $email = $_GET['email'];
    if (stripos($email, '.') !== false && stripos($email, '@') !== false) {
        session_start();
        $_SESSION['email'] = $email;
        header('Location: thankyou.php');
        die;
    }
}
?>