<?php

  class MensajeManager {

    public static function publicar ($mensaje) 
    {
      $mensaje->setFechaPublicacion(time());
      //escribir en BD
    }
  }

?>
