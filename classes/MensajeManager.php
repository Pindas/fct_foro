<?php

  include_once 'Mensaje.php';
  include_once 'MensajeTema.php';
  include_once 'MensajeRespuesta.php';
  include_once 'MensajePrivado.php';

  class MensajeManager {

    public static function crearMensaje($titulo, $contenido, $autor, $categoria, $tipo)
    {
      return new Mensaje($titulo, $contenido, $autor, $categoria, $tipo);
    }

    public static function publicarMensaje ($mensaje) 
    {
      $mensaje->setFechaPublicacion(time());
      // Insert
    }
  }

?>
