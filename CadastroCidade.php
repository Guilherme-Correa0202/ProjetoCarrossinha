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
        $estado = $_POST['estado'];
        echo "<h1>Dados da cidade:</h1>";
        echo "Nome: $nome<br>";
        echo "Estado: $estado<br>";
        $sql = "INSERT INTO Cidade (nomeCidade, estado)";
        $sql .= " VALUES('".$nome."', '".$estado."')";
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