<?php

require('../config.php');

$method = strtolower($_SERVER['REQUEST_METHOD']);

if ($method === 'put') {

  $input = json_decode(file_get_contents('php://input'), true);

  $id = $input['id'] ?? null;
  $nome = $input['nome'] ?? null;
  $codigo = $input['codigo'] ?? null;
  $tipo_cobranca = $input['tipo_cobranca'] ?? null;
  $situacao = $input['situacao'] ?? null;

  $id = filter_var($id);
  $nome = filter_var($nome);
  $codigo = filter_var($codigo);
  $tipo_cobranca = filter_var($tipo_cobranca);
  $situacao = filter_var($situacao);

  if ($id && $nome && $codigo) {

    $sql = $pdo->prepare("select * from banco where id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();

    if ($sql->rowCount() > 0) {

      $sql = $pdo->prepare("update banco set nome = :nome, codigo = :codigo, tipo_cobranca = :tipo_cobranca, situacao = :situacao where id = :id");
      $sql->bindValue(':id', $id);
      $sql->bindValue(':nome', $nome);
      $sql->bindValue(':codigo', $codigo);
      $sql->bindValue(':tipo_cobranca', $tipo_cobranca);
      $sql->bindValue(':situacao', $situacao);
      $sql->execute();

      $array['result'] = [
        'id' => $id,
        'codigo' => $codigo,
        'tipo_cobranca' => $tipo_cobranca,
        'situacao' => $situacao
      ];

    } else {
      $array['error'] = 'ID inexistente';
    }

  } else {
    $array['error'] = 'Campos não informados ';
  }

} else {
  $array['error'] = 'Método não permitido (apenas PUT)';
}


require('../return.php');