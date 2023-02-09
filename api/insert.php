<?php

require('../config.php');

$method = strtolower($_SERVER['REQUEST_METHOD']);

if ($method === 'post') {

  $input = json_decode(file_get_contents('php://input'), true);

  $nome = $input['nome'] ?? null;
  $codigo = $input['codigo'] ?? null;
  $tipo_cobranca = $input['tipo_cobranca'] ?? null;
  $situacao = $input['situacao'] ?? null;

  if ($nome && $codigo) {

    $sql = $pdo->prepare("insert into banco(nome, codigo, tipo_cobranca, situacao) values (:nome, :codigo, :tipo_cobranca, :situacao)");
    $sql->bindValue(':nome', $nome);
    $sql->bindValue(':codigo', $codigo);
    $sql->bindValue(':tipo_cobranca', $tipo_cobranca);
    $sql->bindValue(':situacao', $situacao);
    $sql->execute();

    $id = $pdo->lastInsertId();

    $array['result'] = [
      'id' => $id,
      'codigo' => $codigo,
      'tipo_cobranca' => $tipo_cobranca,
      'situacao' => $situacao
    ];

  } else {
    $array['error'] = 'Campos não informados ';
  }

} else {
  $array['error'] = 'Método não permitido (apenas POST)';
}


require('../return.php');