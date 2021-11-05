<?php

  include 'conecta.php';

  $id = $_GET["id"];
  $nome = $_POST["nome"];
  $placa_carro = $_POST["placa_carro"];
  $celular = $_POST["celular"];
  $data_nascimento = $_POST["data_nascimento"];
  $cidade = $_POST["cidade"];

$sql = "UPDATE pessoa SET nome = ?, placa_carro = ?, celular = ?, data_nascimento = ?, cidade = ? WHERE id = ?";
$stmt = $conn->prepare($sql) or die($conn->error);

if(!$stmt){
  echo 'Erro na atualização: '. $conn->errno .' - '. $conn->error;
}

$stmt->bind_param('sssdsi', $nome, $placa_carro, $celular, $data_nascimento, $cidade, $id);
$stmt->execute();
$conn->close();
header("Location: loja.php#tabs-4");
?>