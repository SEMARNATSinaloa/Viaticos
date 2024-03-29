<?php
    require "../config/Conexion.php";

    class Cuotas
    {
        //Implementamos nuestro constructor
        public function __construct()
        {

        }

        //Implementamos un metodo para insertar registros
        public function insertar($tipo_persona, $pernocta, $sinpernocta)
        {
            $sql="INSERT INTO cuotas (tipo_persona, pernocta, sinpernocta)
                VALUES ('$tipo_persona', '$pernocta','$sinpernocta')";
            return ejecutarConsulta($sql);
        }

        //Implementamos un metodo para editar los registros
        public function editar($idcuotas, $tipo_persona, $pernocta, $sinpernocta)
        {
            $sql="UPDATE cuotas SET tipo_persona='$tipo_persona', pernocta='$pernocta', sinpernocta='$sinpernocta'
                WHERE idcuotas='$idcuotas'";
            return ejecutarConsulta($sql);
        }

        //Impementamos un metodo para desactivar registros
        public function desactivar($idcuotas)
        {
            $sql="UPDATE cuotas SET estado='0' WHERE idcuotas='$idcuotas'";
            return ejecutarConsulta($sql);
        }

        //Impementamos un metodo para activar registros
        public function activar($idcuotas)
        {
            $sql="UPDATE cuotas SET estado='1' WHERE idcuotas='$idcuotas'";
            return ejecutarConsulta($sql);
        }

         //Impementamos un metodo para desactivar registros
         public function eliminar($idcuotas)
         {
             $sql="DELETE FROM cuotas WHERE idcuotas='$idcuotas'";
             return ejecutarConsulta($sql);
         }

        //Implementar un metodo para mostrar los datos de un registro a modificar
        public function mostrar($idcuotas)
        {
            $sql="SELECT * FROM cuotas WHERE idcuotas='$idcuotas'";
            return ejecutarConsultaSimpleFila($sql);
        }

        //Implementar un metodo para listar los registros
        public function listar()
        {
            $sql="SELECT * FROM cuotas";
            return ejecutarConsulta($sql);
        }
    }
?>