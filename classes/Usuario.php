<?php

  include 'MensajeManager.php';

  class Usuario {

    private $nombre;
    private $password;
    private $rol;

    public function Usuario($nombre, $password, $rol = 'Normal')
    {
      $this->nombre = $nombre;
      $this->password = $password;
      $this->rol = $rol;
    }

    public function publicarMensaje($mensaje)
    {
      MensajeManager::publicarMensaje($mensaje);
    }

    public function getNombre()
    {
      return $this->nombre;
    }

    public function getPassword()
    {
      return $this->password;
    }

    public function getRol()
    {
      return $this->rol;
    }

  }

?>