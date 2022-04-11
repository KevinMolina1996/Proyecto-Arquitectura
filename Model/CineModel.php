<?php

require "Conexion.php";

/*Mostrar Peliculas*/
class cineModel 
{
    static public function consulta_cine($valor)
    {
        if($valor != null)
        {
            $stmt = Conexion::conectar()->prepare("SELECT id, Nombre, Descripcion, Valoracion, Imagen FROM peliculas WHERE id = :$valor");
            $stmt -> bindParam(":",$valor, PDO::PARAM_INT);
            $stmt -> execute();
            return $stmt ->fetch();
        }
        else
        {
            $stmt = Conexion::conectar()->prepare("SELECT * FROM peliculas");
            $stmt -> execute();
            return $stmt ->fetchAll();
            
        }

        $stms ->close();
        $stms =null;
      
    }

}

?>