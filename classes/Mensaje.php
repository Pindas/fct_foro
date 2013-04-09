<?php

  class Mensaje {

    private $contenido;
    private $autor;
    private $fecha_publicacion;

    public function Mensaje($contenido, $autor)
    {
      $this->contenido = $contenido;
      $this->autor = $autor;
      $this->fecha_publicacion = time();
    }

  }

?>