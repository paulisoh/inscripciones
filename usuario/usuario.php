<?php

include('../config/config.php');
include(usuario.php);
if (isset ($_POST) && !empty($_POST)){
    $p= new usuario();
}

?>
class Usuario{

    public $conexion;

    function_construct()
    {
        $db =new basededatos();
        $this->conexion = $db->connectTobasededatos();
    }
    function save($params){
        $nombre = $params ['nombre'];
        $apellidos = $params ['apellido'];
        $email = $params ['email'];
        $celular = $params ['celular'];
                $edad= $params ['fechadenacimiento'];
        

        $insert = "INSERT INTO Usuarios VALUES (NULL'$nombre', '$apellido', '$email', $celular, '$fechadenacimiento)";
        return mysqli_query($this->conexion,$insert);

        
    

    }
     function getAll(){
        $sql = "SELECT * From Usuarios";
        return mysqli_query($his->conexion,$sqli);
     }

     function getOne (Sid)
     {
        $sql = "Select * FROM usuario WERE id =$id"
    return mysqli_query(this->conexion,$sql)
    }

    function update(Sparams){$nombre = $params ['nombre'];
        $apellidos = $params ['apellido'];
        $email = $params ['email'];
        $celular = $params ['celular'];
                $edad= $params ['id'];
        
        $update = "UPDATE Usuarios SET nombres= "nombres", apellidos= "apellidos", email= "email", celular= celular, age= "edad";
 WHERE id= $id
 return mysqli_query(this->conexion,$update)
    }

    function delete($id){
        $delete = "DELETE FROM Usuarios WHERE id= $id";
        return mysqli_query(this->conexion,$delete);
        

    }






}
?>