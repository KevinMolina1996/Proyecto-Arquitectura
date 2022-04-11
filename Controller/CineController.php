<?php

require "../Model/CineModel.php";


class CineController
{
    static public function controller_cine($valor)
    {
        $datos = cineModel::consulta_cine($valor);
        return $datos;
        
        // foreach($datos AS $row)
        //                 {
        //                     echo
        //                     "<tr>
        //                         <td>$row[id]<td>
        //                         <td>$row[Nombre]<td>
        //                         <td>$row[Descripcion]<td>
        //                         <td>$row[Valoracion]<td>
        //                         <td>$row[Imagen]<td>
        //                         <td>Editar<td>
        //                         <td>Eliminar<td>
        //                     </tr>
        //                     ";
        //                 }
    }
}

?>