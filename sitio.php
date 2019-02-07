<?php

require_once "Smarty.class.php";
spl_autoload_register(function($clase) {
    include "$clase.php";
});

session_start();

if (!isset($_SESSION['user']) && !isset($_SESSION['pass'])) {
    $nombre = $_SESSION['user'];
    $pass = $_SESSION['pass'];
    echo $nombre;
    echo $pass;
} else {
    header("Location:login.php");
}

$smarty = new Smarty();
$smarty->template_dir = "./template";
$smarty->compile_dir = "./template_c";

$smarty->display("sitio.tpl");
?>
