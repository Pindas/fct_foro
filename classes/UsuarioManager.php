<?php

  class UsuarioManager {

    public static function crearUsuario($nombre, $password)
    {
      $nuevo_usuario = new Usuario($nombre, $password);
      $this->escribirUsuario($nuevo_usuario);
      return $nuevo_usuario;
    }

    public static function obtenerUsuario($nombre)
    {
      //Leer de BD
    }

    private function escribirUsuario($usuario)
    {
      //Escribir en BD
    }

  }

?>