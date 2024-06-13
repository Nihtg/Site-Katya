<?php
$visit_count = 1;

if (isset($_COOKIE["visit_count"])) {
    $visit_count = $_COOKIE["visit_count"] + 1;
}

setcookie("visit_count", $visit_count, strtotime("+30 days"));

print("Количество посещений: " . $visit_count);
?>
<?php
session_start();
$visit_count = 1;

if (isset($_SESSION["visit_count"])) {
    $visit_count = $_SESSION["visit_count"] + 1;
}

$_SESSION["visit_count"] = $visit_count;

print("Количество посещений: " . $visit_count);
?>
