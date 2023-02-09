<?php

require('../config.php');

$method = strtolower($_SERVER['REQUEST_METHOD']);

if ($method === 'get') {

  $sql = $pdo->query("select * from banco");

  if ($sql->rowCount() > 0) {
    $data = $sql->fetchAll(PDO::FETCH_ASSOC);

    foreach($data as $item) {
      $array['result'][] = [
        'id' => $item['id'],
        'nome' => $item['nome'],
        'codigo' => $item['codigo'],
        'tipo_cobranca' => $item['tipo_cobranca'],
        'situacao' => $item['situacao']
      ];
    }
  }

} else {
  $array['error'] = 'Método não permitido (apenas GET)';
}


require('../return.php');