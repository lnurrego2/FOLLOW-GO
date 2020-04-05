<?php

  # Incluimos la clase conexion para poder heredar los metodos de ella.
  require_once('conexion.php');


  class Usuario extends Conexion
  {

    public function login($user, $clave)
    {
      /*

        llamar un metodo de una clase
        heredada es decir al yo colocar parent::conectar, lo que hago es
        llamar al metodo conectar de la clase patiente en este caso conexion 

      */


      # Nos conectamos a la base de datos
      parent::conectar();

      // El metodo salvar sirve para escapar cualquier comillas doble o simple y otros caracteres que pueden vulnerar nuestra consulta SQL
      $user  = parent::salvar($user);
      $clave = parent::salvar($clave);

      //filtrar las mayusculas y los acentos habilita las lineas 36 y 37, en en la base de datos debe estar filtrado tambien para una validacion correcta
      /*$user  = parent::filtrar($user);
      $clave = parent::filtrar($clave);*/

      // traemos el id y el nombre de la tabla usuarios donde el usuario sea igual al usuario ingresado y ademas la clave sea igual a la ingresada para ese usuario.
      $consulta = 'select id, nombre, rol from usuario where correo="'.$user.'" and clave= "'.$clave.'"';
      /*
        Verificamos si el usuario existe, la funcion verificarRegistros
        retorna el número de filas afectadas, en otras palabras si el
        usuario existe retornara 1 de lo contrario retornara 0
      */

      $verificar_usuario = parent::verificarRegistros($consulta);

      // si la consulta es mayor a 0 el usuario existe
      if($verificar_usuario > 0){

        $user = parent::consultaArreglo($consulta);

        /*
          
          la linea 69 pasa a ser un arreglo con los campos consultados en la linea
          48, entonces para acceder a los datos utilizamos $user[nombre_del_campo] 
          
        */

        /*
          Inicializamos la sessión |  con las variables de sesión
          podemos acceder a la informacion desde cualquiera pagina siempre y cuando
          exista una sesión y ademas utilicemos el codigo de la linea 84
        */

        session_start();


        $_SESSION['id']     = $user['id'];
        $_SESSION['nombre'] = $user['nombre'];
        $_SESSION['rol']  = $user['rol'];

        /*
  
          la variable global de
          sesion nos ayudara a verificar el cargo del usuario que ha iniciado sesion
          
        */

        /*
          
          cargo con valor: 1 es: Administrador
          cargo con valor: 2 es: usuario estandar
          
        */

        // Verificamos que cargo tiene l usuario y asi mismo dar la respuesta a ajax para que redireccione
        if($_SESSION['rol'] == 1){
          echo '..//Vistas/modulos/index.php';
        }else if($_SESSION['rol'] == 2 || 3){
          echo '../Vistas/moduloPaciente/index.php';
        }
      }else{
        // El usuario y la clave son incorrectos
        echo 'error_3';
      }
      
      # Cerramos la conexion
      parent::cerrar();
    }

    public function registroUsuario($name, $email, $clave)
    {
      parent::conectar();

      $name  = parent::filtrar($name);
      $email = parent::filtrar($email);
      $clave = parent::filtrar($clave);


      // validar que el correo no exito
      $verificarCorreo = parent::verificarRegistros('select id from usuario where correo="'.$email.'" ');


      if($verificarCorreo > 0){
        echo 'error_3';
      }else{

        parent::query('insert into usuario(nombre, correo, clave, rol) values("'.$name.'", "'.$email.'", MD5("'.$clave.'"), 2)');

        session_start();

        $_SESSION['nombre'] = $name;
        $_SESSION['rol']  = 2;

        echo '../Vistas/moduloPaciente/index.php';

      }

      parent::cerrar();
    }

  }

?>
