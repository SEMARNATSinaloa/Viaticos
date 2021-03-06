<?php
    require "../config/Conexion.php";

    class Usuarios
    {
        //Implementamos nuestro constructor
        public function __construct()
        {

        }

        //Implementamos un metodo para insertar registros
        public function insertar($pwd, $apellidop, $apellidom, $nombre, $correo)
        {
            $sql="INSERT INTO usuario (pwd, apellidop, apellidom, nombre, correo)
                VALUES ('$pwd','$apellidop', '$apellidom', '$nombre', '$correo')";
            //return $sql;
            return ejecutarConsulta($sql);
        }

        //Implementamos un metodo para editar los registros
        public function editar($pwd, $apellidop, $apellidom, $nombre, $correo)
        {
            $sql="UPDATE usuario SET pwd='$pwd', apellidop='$apellidop', apellidom='$apellidom', nombre='$nombre'
                WHERE correo='$correo'";
            return ejecutarConsulta($sql);
        }

        //Impementamos un metodo para desactivar registros
        public function desactivar($correo)
        {
            $sql="UPDATE usuario SET estado='0' WHERE correo='$correo'";
            return ejecutarConsulta($sql);
        }

        //Impementamos un metodo para activar registros
        public function activar($correo)
        {
            $sql="UPDATE usuario SET estado='1' WHERE correo='$correo'";
            return ejecutarConsulta($sql);
        }

        //Implementar un metodo para mostrar los datos de un registro a modificar
        public function mostrar($correo)
        {
            $sql="SELECT * FROM usuario WHERE correo='$correo'";
            return ejecutarConsultaSimpleFila($sql);
        }

        //Implementar un metodo para listar los registros
        public function listar()
        {
            $sql="SELECT * FROM usuario";
            return ejecutarConsulta($sql);
        }

        //Metodo para corroborar que existe algun usuario
        public function existe($correo)
        {
            $sql="SELECT correo FROM usuario WHERE correo = '$correo'";
            
            return mysqli_num_rows(ejecutarConsulta($sql));
            //return $sql; 
        }
    }
?>