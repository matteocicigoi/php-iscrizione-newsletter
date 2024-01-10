<?php
// verifica email
$success = null;
if (!empty($_GET['email'])) {
    $success = false;
    $email = $_GET['email'];
    if (stripos($email, '.') !== false && stripos($email, '@') !== false) {
        $success = true;
    }
}
?>