<?php

  include_once 'classes/UsuarioManager.php';

  $conexion = mysqli_connect('localhost', 'foro', 'foro', 'FORO');

  echo '<strong>Crear nuevo usuario "user1"</strong><br />';
  $usuario = UsuarioManager::crearUsuarioNormal('user1', 'user1');

  echo '<strong>Recuperar usuario "user1"</strong><br />';
  $user1 = UsuarioManager::obtenerUsuario('user1');
  echo 'Nombre usuario recuperado: '.$user1->getNombre();

  echo '<br />Cerrando conexion';
  mysqli_close($conexion);

?>