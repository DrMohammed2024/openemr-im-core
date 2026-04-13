<?php

require_once("../../globals.php");

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    $target = "new.php";
    if (isset($_GET['id']) && $_GET['id'] !== '') {
        $target .= '?id=' . urlencode((string) $_GET['id']);
    }
    header("Location: " . $target);
    exit;
}

require_once(__DIR__ . "/new.php");
