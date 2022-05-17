<?php

    class database
    {
        private $con;
        private $dbequipo = 'localhost';
        private $dbusuario = 'root';
        private $dbclave = '123456';
        private $dbnombre = 'registrosnuevos';

        //Método constructor
        function __construct()
        {
            $this->conectar();
        }//fin constructor


        //función para conectarse a la base de datos (localhost, root, contraseña, nombretabla)
        public function conectar()
        {
            $this->con = mysqli_connect($this->dbequipo, $this->dbusuario, $this->dbclave, $this->dbnombre);

            if(mysqli_connect_error())
            {
                die("Error: No se pudo conectar a la base de datos: " . mysqli_connect_error() . mysqli_connect_errno());
            }

        }//fin funcion conectar

        //funcion para leer los datos de la tabla
        public function leer_tabla()
        {
            $sql = 'SELECT * FROM personas;';

            //llamo a la funcion para conectar la base de datos y enviar lo que quiero hacer
            $tabla = mysqli_query($this->con, $sql);

            return $tabla;
        }//fin de leer datos

        //funcion de insertar
        public function insertar($usuario, $contraseña, $nombre, $telefono, $correo, $fecha)
        {
            $sql = "INSERT INTO personas VALUES('$usuario', '$contraseña', '$nombre', '$telefono', '$correo', '$fecha');";

            //llamo a la funcion para conectar la base de datos y enviar lo que quiero hacer
            $inser = mysqli_query($this->con, $sql);

            return $inser;
        }//fin funcion insertar

        //funcion de eliminar
        public function eliminar($elemento, $dato)
        {
            $sql = "DELETE FROM personas WHERE per_$elemento = '$dato';";

            $eli = mysqli_query($this->con,$sql);

            return $eli;
        }//fin funcion de eliminar

    }


?>