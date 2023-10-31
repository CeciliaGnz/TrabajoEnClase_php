<?php
session_start();//nuevo

require_once 'model/usuario.php';
require_once 'model/ubicacion.php';//nuevo

class Controller
{
    private $model;
    private $model2;//nuevo
    private $model3;
    private $model4;
    private $resp;

    public function __CONSTRUCT(){
        $this->model = new Usuario();
        $this->model2 = new Ubicacion();//nuevo
        $this->model3 = new Ubicacion();
        $this->model4 = new Usuario();
    }

    public function Index(){
        require("php/login.php");
    }

    public function CrearUsuario(){
        require("php/register.php");
    }
    //nuevo
    public function IngresarPanel(){

        $listaUsuario = new Usuario();
        $listaUsuario = $this->model4->ObtenerTodosLosUsuarios();

        require("panel/dashboard.php");

    }
    //nuevo
    public function IngresarPerfil(){

        $usuario = new Usuario();
        $usuario = $this->model->Obtener($_SESSION['id']);

        $provincia =new Ubicacion();
        $provincia= $this->model2->ConsultarProvincia();

        $distritos =new Ubicacion();
        $distritos= $this->model3->ConsultarDistrito();

        require("panel/profile.php");
    }

    public function Guardar(){
        $usuario = new Usuario();
    
        $usuario->nombre = $_POST['nombre'];
        $usuario->apellido = $_POST['apellido'];
        $usuario->email = $_POST['correo'];
    
        // Hashea la contraseña utilizando password_hash
        $password = $_POST['passwd'];
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT, array("cost"=>12));
        $usuario->pass = $hashedPassword;
        $usuario->foto = "perfil.png"; //nuevo 
        $usuario->nivel = 2;  

        $this->resp = $this->model->Registrar($usuario);
    
        header('Location: ?op=crear&msg=' . $this->resp);
    }
    //nuevo
    public function Ingresar() {
        $ingresarUsuario = new Usuario();
    
        $ingresarUsuario->email = $_REQUEST['correo'];
        $ingresarUsuario->pass = $_REQUEST['passwd'];
    
        // Obtén la contraseña almacenada desde la base de datos
        $storedPassword = $this->model->ObtenerContraseña($ingresarUsuario->email);
    
        if ($storedPassword && password_verify($ingresarUsuario->pass, $storedPassword)) {
            // La contraseña es válida
            $resultado = $this->model->Consultar($ingresarUsuario);
    
            $_SESSION["acceso"] = true;
            $_SESSION["foto"] = $resultado->foto;
            $_SESSION["id"] = $resultado->id;
            $_SESSION["nivel"] = $resultado->nivel;
            $_SESSION["user"] = $resultado->nombre . " " . $resultado->apellido;
            header('Location: ?op=permitido');
        } else {
            header('Location: ?&msg=Su contraseña o usuario está incorrecto');
        }
    }
    
    //nuevo
    public function ActualizarDatos(){
        
        $usuario = new Usuario();
        $usuario->nombre = $_REQUEST['nombre'];
        $usuario->apellido = $_REQUEST['apellido'];
        $usuario->id_distrito= $_REQUEST['distrito'];
        $usuario->id=$_SESSION["id"];


        if (isset($_FILES['foto']))
        {
            move_uploaded_file($_FILES['foto']['tmp_name'], "./img/users/".$_SESSION["id"].".jpg");
            
            $usuario->foto = $_SESSION["id"].".jpg";

            $_SESSION["foto"]=$_SESSION["id"].".jpg";
        }
        else
        {
            $usuario->foto = $_SESSION["foto"];
        }
         
        
        $this->resp= $this->model->Actualizar($usuario);

        header('Location: ?op=perfil&msg='.$this->resp);
    }

}