<?php

  include_once 'Mensaje.php';

  class MensajeRespuesta extends Mensaje {

    private $id_tema;

    public function MensajeRespuesta($contenido, $autor, $id_tema)
    {
      parent::__construct($contenido, $autor);
      $this->id_tema = $id_tema;
    }

  }

?>