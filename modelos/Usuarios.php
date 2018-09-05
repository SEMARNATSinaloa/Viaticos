<?php
    require "../config/Conexion.php";

    class Usuarios
    {
        //Implementamos nuestro constructor
        public function __construct()
        {

        }

        //Implementamos un metodo para insertar registros
        public function insertar($idusuario, $pwd, $apellidop, $apellidom, $nombre, $correo)
        {
            $sql="INSERT INTO usuario (idusuario, pwd, apellidop, apellidom, nombre, correo)
                VALUES ('$idusuario', '$pwd','$apellidop, $apellidom, $nombre, $correo')";
            return ejecutarConsulta($sql);
        }

        //Implementamos un metodo para editar los registros
        public function editar($idusuario, $pwd, $apellidop, $apellidom, $nombre, $correo)
        {
            $sql="UPDATE usuario SET pwd='$pwd', apellidop='$apellidop', apellidom='$apellidom', nombre='$nombre', correo='$correo'
                WHERE idusuario='$idusuario'";
            return ejecutarConsulta($sql);
        }

        //Impementamos un metodo para desactivar registros
        public function desactivar($idusuario)
        {
            $sql="UPDATE usuario SET estado='0' WHERE idusuario='$idusuario'";
            return ejecutarConsulta($sql);
        }

        //Impementamos un metodo para activar registros
        public function activar($idusuario)
        {
            $sql="UPDATE usuario SET estado='1' WHERE idusuario='$idusuario'";
            return ejecutarConsulta($sql);
        }

        //Implementar un metodo para mostrar los datos de un registro a modificar
        public function mostrar($idusuario)
        {
            $sql="SELECT * FROM usuario WHERE idusuario='$idusuario'";
            return ejecutarConsultaSimpleFila($sql);
        }

        //Implementar un metodo para listar los registros
        public function listar()
        {
            $sql="SELECT * FROM usuario";
            return ejecutarConsulta($sql);
        }
    }
?>