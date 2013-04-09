<?php

  class Usuario {

    private $nombre;
    private $password;
    private $rol;

    public function Usuario ($nombre, $password)
    {
      $this->nombre = $nombre;
      $this->password = $password;
    }

    public function publicarMensaje ($mensaje)
    {
      MensajeManager::publicar($mensaje);
    }

  }

?>