<?php

require('../config.php');

$method = strtolower($_SERVER['REQUEST_METHOD']);

if ($method === 'delete') {

  $id = filter_input(INPUT_GET, 'id');

  if ($id) {

    $sql = $pdo->prepare("select * from banco where id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();

    if ($sql->rowCount() > 0) {

      $sql = $pdo->prepare("delete from banco where id = :id");
      $sql->bindValue(':id', $id);
      $sql->execute();

    } else {
      $array['error'] = 'ID inexistente';
    }

  } else {
    $array['error'] = 'ID não enviado';
  }

} else {
  $array['error'] = 'Método não permitido (apenas GET)';
}


require('../return.php');