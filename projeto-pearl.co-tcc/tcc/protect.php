<?php
if (!isset($_SESSION)) {
    session_start();
}

if (!isset($_SESSION['id'])) {
    echo 'Você não tem conta!';
    exit();
}
?>
