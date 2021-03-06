<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="content-language" content="pt-br"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <form action="cad.php" method="POST">
            <div class="form-group">
                <label>Nome</label>
                <input type="text" class="form-control" name="nome" placeholder="Insira o nome" required/>
                <br/>
                <label>Placa do Caroo</label>
                <input type="placa_carro" class="form-control" name="placa_carro" placeholder="Insira a placa do carro" required/>
                <br/>
                <label>Celular</label>
                <input type="number" class="form-control" name="celular" placeholder="Insira o celular" required/>
                <br/>
                <label>Data de Nascimento</label>
                <input type="date" class="form-control" name="data_nascimento" placeholder="Insira a data de nascimento" required/>
                <br/>
                <label>Cidade</label>
                <input type="text" class="form-control" name="cidade" placeholder="Insira a cidade" required/>
                <br/>
                <button type="submit" class="btn btn-outline-success">Inserir</button>
            </div>
        </form>
    </body>
</html>