<?php
    class conexion{
        protected function conectar(){
            //$conn= mysqli_connect("localhost", "root", "", "tienda_chambi");
            $conn= mysqli_connect("localhost", "root", "123456789", "tienda_edmar (8)");
            //$conn= mysqli_connect("localhost", "root", "123456789", "tienda_edmar2");
            return $conn;
            
        }
        protected function desconectar($conectados){
            mysqli_close($conectados);            
            //echo "me desconecte :(";
        }
    } 
 ?>