<?php
session_start();
if (!isset($_SESSION["role"]) || $_SESSION["role"] !== "admin") {
    header("Location: dashboard/../admin.html");
    exit();
}

// Admin-only content goes here
?>
