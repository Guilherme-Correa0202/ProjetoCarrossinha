
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
        $especie = $_POST['especie'];
        $raca = $_POST['raca'];
        $data = $_POST['data'];
        $idade = $_POST['idade'];
        $castrado = $_POST['castrado'];
        $tutor = $_POST['tutor'];
        echo "<h1>Dados do Animal:</h1>";
        echo "Nome: $nome<br>";
        echo "Idade: $idade<br>";
        echo "Especie: $especie<br>";
        echo "Raça: $raca<br>";
        echo "Castrado:"; if($castrado == 0) {echo "Sim <br>";} else{echo "Não <br>";};

        $sql = "INSERT INTO Animal (nomeAnimal, especie, raca, dataNascimento, idade, castrado, idTutor)";
        $sql .= " VALUES('".$nome."', '".$especie."', '".$raca."', '".$data."', '".$idade."' ,'".$castrado."','".$tutor."')";
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