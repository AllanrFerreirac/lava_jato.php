<?php 
    include 'conecta.php';
    $nome = $_POST['nome'];
    $placa_carro = $_POST['placa_carro'];
    $celular = $_POST['celular'];
    $data_nascimento = $_POST['data_nascimento'];
    $cidade = $_POST['cidade'];
    $sql= "INSERT INTO pessoa(nome,placa_carro,celular,data_nascimento,cidade) VALUES ('$nome','$placa_carro','$celular','$data_nascimento','$cidade')";
    if(mysqli_query($conn,$sql)){
        echo "<script language='javascript' type='text/javascript'> 
          alert('Registro inserido com sucesso!');
          window.location.href='loja.php';
          </script>";
    }
    else {
        echo "<script language='javascript' type='text/javascript'> 
          alert('Não foi possível inserir este registro!');
          window.location.href='loja.php'
          </script>";
    }
    mysqli_close($conn);
?>