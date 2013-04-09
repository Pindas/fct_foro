<?php

  include 'Usuario.php';

  class UsuarioManager {

    public static function crearUsuarioNormal($nombre, $password)
    {
      $nuevo_usuario = new Usuario($nombre, $password);
      self::escribirUsuario($nuevo_usuario);
      return $nuevo_usuario;
    }

    public static function obtenerUsuario($nombre)
    {
      $query = "SELECT * FROM Usuarios WHERE nombre = '$nombre';";
      global $conexion;
      if (!$resultado = mysqli_query($conexion, $query)) {
        echo mysqli_error($conexion);
      }
      $usuario = $resultado->fetch_object();
      return new Usuario($usuario->nombre, $usuario->password, $usuario->rol);
    }

    private function escribirUsuario($usuario)
    {
      $query = "INSERT INTO Usuarios (nombre, password, rol) VALUES ".
        "('".$usuario->getNombre()."', ".
        "'".$usuario->getPassword()."', ".
        "'".$usuario->getRol()."');";
      global $conexion;
      if (!mysqli_query($conexion, $query)) {
        echo mysqli_error($conexion);
      }
    }

  }

?>