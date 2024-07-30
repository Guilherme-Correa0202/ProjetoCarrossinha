<?php
    include('Includes/conexao.php');
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $especie = $_POST['email'];
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $cep = $_POST['cep'];
    $idcidade = $_POST['cidade'];
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
    <h1>Alteração da Cliente</h1>
    <?php
        echo "<h5>ID: $id</h5>";
    echo "<h5>Nome: $nome</h5>";
    echo "<h5>Email: $email</h5>";
    echo "<h5>Endereço: $endereco</h5>";
    echo "<h5>bairro: $bairro</h5>";
    echo "<h5>CEP: $cep</h5>";
    echo "<h5>Id cidade: $idcidade</h5>";
        $sql = "UPDATE Pessoa SET nomePessoa = '$nome', email = '$email', endereco = '$endereco', bairro = '$bairro', cep = '$cep',  cidade_id = '$idcidade'  WHERE idPessoa = $id";
        $result = mysqli_query($con, $sql);
        if($result){
            echo "<h3>Dados Atualizados com sucesso</h3>";
        }
        else{
            echo "<h3>Erro ao atualizar</h3>";
            echo mysqli_error($con);
            }
            
    ?>
    <a href="index.html"><h3>Voltar ao inicio</h3></a>
</body>
</html>