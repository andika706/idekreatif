<?php
sesion_start();

$name = $_SESSION["name"];
$role = $_SESSION["role"];

$notification = $_SESSION['notification'] ?? null;
if ($notification) {
    unset($_SESSION['notification']);
}