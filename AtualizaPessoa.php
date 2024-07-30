<?php
    include("Includes/conexao.php");
    $id = $_GET["id"];
    $sql = "SELECT * FROM Pessoa WHERE idPessoa=$id";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
<form action="AtualizaPessoaExe.php" method="post">
        <fieldset>
            <div>
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" value=" <?php echo $row['nomePessoa'] ?>">
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value=" <?php echo $row['email'] ?>">
            </div>
            <div>
                <label for="endereco">Endereço:</label>
                <input type="text" name="endereco" id="endereco" value=" <?php echo $row['endereco'] ?>">
            </div>
            <div>
                <label for="bairro">Bairro</label>
                <input type="text" name="bairro" id="bairro" value=" <?php echo $row['bairro'] ?>">
            </div>
            <div>
                <label for="cep">CEP</label>
                <input type="text" name="cep" id="cep" value=" <?php echo $row['cep'] ?>">
            </div>
            <div>
                <label for="cidade">Cidade:</label>
                <select name="cidade" id="cidade" >
                <?php
                    include('Includes/conexao.php');
                    $sql = "SELECT * FROM Cidade";
                    $result = mysqli_query($con, $sql);
                    while($row_cid = mysqli_fetch_array($result)){
                        $sel = $row_cid['idCidade'] == $row['cidade_id']?"selected":"";
                        echo " <option  value ='".$row_cid['idCidade']."'".$sel.">".$row_cid['nomeCidade']."/".$row_cid['estado']."</option>";
                    }

                ?>
                </select>
            </div>
            <button type="submit">Atualizar</button>
            <div>
                <input type="hidden" name="id" value="<?php echo $id; ?>"> 
            </div>
        </fieldset>
    </form>
    <a href="index.html"><h3>Voltar ao inicio</h3></a>
</body>
</html>