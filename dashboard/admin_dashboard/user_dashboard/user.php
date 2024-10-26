<?php
session_start();
if (!isset($_SESSION["role"]) || $_SESSION["role"] !== "user") {
    header("Location: login.html");
    exit();
}

// User-only content goes here
?>
