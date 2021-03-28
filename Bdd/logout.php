<?php
session_start();
session_unset();
session_destroy();
header("Location: ../Front/index_accueil.php");
?>