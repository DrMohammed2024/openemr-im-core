<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: new.php");
    exit;
}

require_once(__DIR__ . '/new.php');
