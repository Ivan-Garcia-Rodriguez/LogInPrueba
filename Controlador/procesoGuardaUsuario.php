<?php

include ("../Helpers/Validadores.php");
$NombreUsuario = $_POST["usuario"];
$PasswordUsuario = $_POST["password"];
$RolUsuario = $_POST["rol"];



if(EstaEnBlanco($PasswordUsuario,$NombreUsuario)==false)
{
    if(ValidaPassword($PasswordUsuario)==false && $RolUsuario!="administrador" && $RolUsuario!="mindundi")
    {
        echo("tu eres un mentiroso");
    }
    else
    {
        nl2br(file_put_contents("../Modelo/Usuarios.txt.txt","\n"." Usuario : ".$NombreUsuario." ; "." Password : ".$PasswordUsuario." ; ".
        " rol : ".$RolUsuario));
    }
}


header("Location:../Vista/FormuAdministrador.html");




?>