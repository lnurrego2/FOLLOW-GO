<?php
#Modelo funciona para llamar todas la funciones que se van a ejecutar

class EnlacesPaginas {

    public function enlacesPaginasModelo($enlacesModelo) {

        //$enlacesModelo se toma desde el controlador 
        if (
        $enlacesModelo == "informacionTyC" ||  
        $enlacesModelo == "informacionNosotros" ||  
        $enlacesModelo == "informacionPP" ||  
        $enlacesModelo == "contactenos" ||
        $enlacesModelo == "formularioUsuario" ||
        $enlacesModelo == "formularioVehiculo") {

            $modulo = "Vistas/modulos/".$enlacesModelo.".php";
        } else if($enlacesModelo == "index"){
            $modulo = "Vistas/modulos/inicio.php";            
        }

        /*
        else if( $enlacesModelo == "formularioUsuario?actualizar"){
            $modulo = "Vistas/modulos/actualizarUsuario.php";     
        } */
        
        //Se usa para retornar de una vez 
        else {
            $modulo = "Vistas/modulos/inicio.php";
        }
        return $modulo;
    }

}


/*
class actualizarUsuario{
    public function actualizarUsuarioModelo($actualizarUsuarioModelo){

        if ($actualizarUsuarioModelo == $actualizarUsuarioModelo){

            $moduloUsuario = "Vistas/modulos/".$actualizarUsuarioModelo.".php";
            
            return   $moduloUsuario;
        }
    }
}
/*

class enlaceTemplate{

    public function enlaceTemplateModelo($templateModelo){



        if ($templateModelo == "template") {
            
            $comienzo = " Vistas/".templateModelo.".php";
            //$comienzo = " Vistas/template.php";
        }
       
       

        //return $templateModelo;
        return $comienzo;
    }
}*/
