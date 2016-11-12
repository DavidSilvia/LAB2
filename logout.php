<?php
session_start();
unset($_SESSION['usuario']);
unset($_SESSION['correo']);
session_destroy();
header("Location: layout.html");
?>