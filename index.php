<?php
require_once 'model/db.php';
require("./controller/controller.php");

//Instancio el controlador
$controller = new Controller;
if (isset($_GET['op'])){

    $opcion=$_GET['op'];

    if ($opcion=="crear")
    {
        $controller->CrearUsuario();
    }
    else if ($opcion=="registrar"){
        $controller->Guardar();
    }
    elseif ($opcion=="acceder"){
        $controller->Ingresar();
     }
    elseif ($opcion=="permitido"){
        $controller->IngresarPanel();
    }
    elseif ($opcion=="perfil"){
        $controller->IngresarPerfil();
    }
    elseif ($opcion=="actualizar"){
        $controller->ActualizarDatos();
    }
    elseif ($opcion=="salir"){
        session_destroy();
        $controller->Index();
    }


    else{
        $controller->Index();
    }
}

else{
    $controller->Index();
}