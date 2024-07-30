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
    
    <?php
    include('Includes/conexao.php');
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $endereco = $_POST['endereco'];
        $bairro = $_POST['bairro'];
        $cep = $_POST['cep'];
        $cidade = $_POST['cidade'];
        
        echo "<h1>Dados do Cliente:</h1>";
        echo "Nome: $nome<br>";
        echo "email: $email<br>";
        echo "Endereço: $endereco<br>";
        echo "Bairro: $bairro<br>";
        echo "CEO: $cep<br>";
        echo "Cidade: $cidade<br>";
        $sql = "INSERT INTO Pessoa (nomePessoa, email, endereco, bairro, cep,cidade_id)";
        $sql .= " VALUES('".$nome."', '".$email."', '".$endereco."', '".$bairro."', '".$cep."' ,'".$cidade."')";
        echo $sql;
        $result = mysqli_query($con, $sql);
        if($result){
            echo "<h3>Dados cadastrados com sucesso</h3>";
        }
        else{
            echo "<h3>Erro ao cadastrar</h3>";
            echo mysqli_error($con);
            }
    ?>
    <a href="index.html"><h3>Voltar ao inicio</h3></a>
</body>
</html>