<?php

include ("../Helpers/Validadores.php");

$NombreUsuario= $_POST["usuario"];
$PasswordUsuario= $_POST["password"];


CompruebaUsuario($NombreUsuario,$PasswordUsuario);











?>