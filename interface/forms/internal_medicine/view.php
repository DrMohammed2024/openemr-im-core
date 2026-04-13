<?php

require_once("../../globals.php");
require_once("$srcdir/api.inc.php");

$formid = isset($_GET['id']) ? (int) $_GET['id'] : 0;

if (empty($formid)) {
    die(xlt('Missing form id'));
}

require_once(__DIR__ . "/report.php");
