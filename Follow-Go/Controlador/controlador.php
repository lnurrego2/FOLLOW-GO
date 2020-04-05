<?php
//Controlador es la conexión entre la vista y el modulo
class MvcControlador
{

    #LLamada a la plantilla
    #-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- --

    public function plantilla()
    {

        #include() se utuliza para invocar el archivo que contiene código html.
        include "Vistas/template.php";
    }

    #    Interaccion del Usuario#-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- --
    public function enlacesPaginasControlador()
    {

        if (isset($_GET["action"])) {

            $enlacesControlador = $_GET["action"];
            #echo $enlacesControlador;

        } else {
            $enlacesControlador = "index";
        }


        $respuesta =  EnlacesPaginas::enlacesPaginasModelo($enlacesControlador);

        include $respuesta;
    }

    /*
        public function actualizarUsuarioControlador() {

            $actualizarUsuarioControlador = $_GET["actualizar"];
            
            $respuestaUsuario =  actualizarUsuario::actualizarUsuarioModelo($actualizarUsuarioControlador);
    
            include $respuestaUsuario;
        }*/
}
       /*          
    public function iniciodelogin(){
        include "Vistas/login-register.php";
    }*/
