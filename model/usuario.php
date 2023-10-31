<?php
class Usuario
{
	private $pdo;
	private $msg;
    
    public $id;//AGREGADO
    public $nombre;
    public $apellido;  
    public $email;
    public $pass;
    public $foto;//AGREGADO
    public $nivel;
    public $id_distrito;


	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Db::StartUp();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}


	public function Registrar(usuario $data)
{
    try 
    {
        $sql = "INSERT INTO usuario (nombre,apellido,email,pass,foto, nivel) 
                VALUES (?, ?, ?, ?, ?, ?)";

        $this->pdo->prepare($sql)
             ->execute(
                array( 
                    $data->nombre,
                    $data->apellido, 
                    $data->email, 
                    $data->pass,
                    $data->foto,//AGREGADO
					$data->nivel
                )
            );
        $this->msg="Registro exitoso&t=has-text-success-dark";
    } catch (Exception $e) 
    {
        if ($e->errorInfo[1] == 1062) {
            echo "Error: El correo electrónico ya está registrado en el sistema.<br>";
            $this->msg="Correo electrónico ya está registrado en el sistema&t=has-text-warning-dark";
        } else {
            echo "Error al guardar los datos: " . $e->getMessage() . "<br>";
            $this->msg="Error al guardar los datos&t=has-text-danger-dark";
        }
    }
    return $this->msg;
}

public function ObtenerContraseña($email) {
    try {
        $stm = $this->pdo->prepare("SELECT pass FROM usuario WHERE email = ?");
        $stm->execute(array($email));
        $result = $stm->fetch(PDO::FETCH_ASSOC);
        return $result['pass'];
    } catch (Exception $e) {
        die($e->getMessage());
    }
}

    //AGREGADO
    public function Consultar(usuario $data)
    {
        try
        {
            $stm = $this->pdo->prepare("SELECT * FROM usuario WHERE email = ? AND pass=?");
            $stm->execute(array($data->email, $data->pass));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }

    public function Obtener($id)
    {
        try 
        {
            $stm = $this->pdo
                    ->prepare("SELECT * FROM usuario WHERE id = ?");
                    

            $stm->execute(array($id));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }

    public function ObtenerTodosLosUsuarios()
    {
        try 
        {
            $stm = $this->pdo->prepare("SELECT * FROM usuario");
                    
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }

    public function Actualizar(usuario $data)
    {
        try 
        {
        $sql = "UPDATE usuario SET nombre = ?,apellido= ?, id_distrito= ?, foto= ? 
                WHERE id = ?";

        $this->pdo->prepare($sql)
            ->execute(
                array( 
                    $data->nombre,
                    $data->apellido, 
                    $data->id_distrito, 
                    $data->foto,
                    $data->id
                )
            );
        $this->msg="Su registro se ha Actualizado exitosamente!&t=text-success";
        } catch (Exception $e) 
        {
            $this->msg="Error al actualizar los datos&t=text-danger";

        }
        return $this->msg;
    }

}