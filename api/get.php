<?php

require('../config.php');

$method = strtolower($_SERVER['REQUEST_METHOD']);

if ($method === 'get') {

  $id = filter_input(INPUT_GET, 'id');


  if ($id) {

    $sql = $pdo->prepare("select * from banco where id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();

    if ($sql->rowCount() > 0) {

      $data = $sql->fetch(PDO::FETCH_ASSOC);

      $array['result'] = [
        'id' => $data['id'],
        'nome' => $data['nome'],
        'codigo' => $data['codigo'],
        'tipo_cobranca' => $data['tipo_cobranca'],
        'situacao' => $data['situacao']
      ];

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