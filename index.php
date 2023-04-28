<?php
session_start();

require_once "controllers/controller.php";

  
// Vérification de l'URL pour déterminer quelle action doit être exécutée
if (isset($_GET['action']) && $_GET['action'] == "inscription") {
    inscription();
} elseif(isset($_GET["action"]) && $_GET['action'] == "connexion") {
    connection();
}elseif (isset($_GET['action']) && $_GET['action'] == "numerisation") {
    numerisation();
}elseif (isset($_GET['action']) && $_GET['action'] == "videophoto") {
    videophoto();
}elseif (isset($_GET['action']) && $_GET['action'] == "reportage") {
    reportage();
}elseif (isset($_GET['action']) && $_GET['action'] == "devis") {
    devis();
}elseif (isset($_GET['action']) && $_GET['action'] == "CD") {
    CD();
} else {
    home();
}