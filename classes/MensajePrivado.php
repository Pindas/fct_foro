<?php

  include_once 'Mensaje.php';

  class MensajePrivado extends Mensaje {

    private $titulo;
    private $destinatario;

    public function MensajePrivado($contenido, $autor, $titulo, $destinatario)
    {
      parent::__construct($contenido, $autor);
      $this->titulo = $titulo;
      $this->destinatario = $destinatario;
    }

  }

?>