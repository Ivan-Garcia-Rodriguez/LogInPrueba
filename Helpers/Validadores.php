<?php



function ValidaPassword($password)
{
    

    if($password.strlen()>6)
    {
        $Correcto=false;
        echo("La contraseña no puede ser mayor de 6 caracteres");
    }
    else if($password.strlen()>=0 && $password.strlen()<=6)
    {
        $Correcto=true;
    }

    return $Correcto;
}

function EstaEnBlanco($UsuarioContraseña,$NombreUsuario)
{
    if(empty($UsuarioContraseña)==true&&empty($NombreUsuario)==true)
    {
        $Vacio=true;
    }
    else if(empty($UsuarioContraseña)==false&&empty($NombreUsuario)==false)
    {
        $vacio=false;
    }

    return $vacio;
}



function CompruebaUsuario($NombreUsuario,$PasswordUsuario)
{
   
$DatosUsuario = file_get_contents("../Modelo/Usuarios.txt.txt");

$ExplodeUsuario = explode("/n",$DatosUsuario);

foreach($ExplodeUsuario as $Usuario)
{
    $NombreDatos= explode(";",$Usuario)[0];
    $PasswordDatos= explode(";",$Usuario)[1];
    $RolDatos= explode(";",$Usuario)[2];
    var_dump($NombreDatos);
    var_dump($PasswordDatos);
    var_dump($RolDatos);
    if($NombreUsuario==$NombreDatos&&$PasswordUsuario==$PasswordDatos&&$RolDatos=="administrador")
    {
        header("Location:../Vista/FormuAdministrador.html");
    }
    else if($NombreUsuario==$NombreDatos&&$PasswordUsuario==$PasswordDatos&&$RolDatos=="mindundi")
    {
        header("Location:../Vista/Tontito.html");
    }

}


}



?>