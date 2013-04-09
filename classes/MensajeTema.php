<?php

  include_once 'Mensaje.php';

  class MensajeTema extends Mensaje {

    private $titulo;
    private $seccion;
    private $fijo;
    private $id_tema;

    public function MensajeTema ($contenido, $autor, $titulo, $seccion, $fijo = false)
    {
      parent::__construct($contenido, $autor);
      $this->titulo = $titulo;
      $this->seccion = $seccion;
      $this->fijo = $fijo;
    }

  }

?>