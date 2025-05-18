<?php
require_once 'includes/Databse.php';
$db = new Databse();

if (!isset($_GET['npm'])) {
    header("Location: index.php");
    exit;
}

$npm = $_GET['npm'];
$db->deleteData($npm);
header("Location: index.php");
exit;
?>
