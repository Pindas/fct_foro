<?php

  class Mensaje {

    private $titulo;
    private $contenido;
    private $autor;
    private $fecha_publicacion;
    private $categoria;
    private $tipo;

    public function Mensaje($titulo, $contenido, $autor, $categoria, $tipo)
    {
      $this->titulo = $titulo;
      $this->contenido = $contenido;
      $this->autor = $autor;
      $this->categoria = $categoria;
      $this->tipo = $tipo;
    }

    public function setFechaPublicacion($fecha)
    {
      $this->fecha_publicacion = $fecha;
    }

  }

?>