<?php
    include('Includes/conexao.php');
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $especie = $_POST['especie'];
    $raca = $_POST['raca'];
    $data = $_POST['data'];
    $idade = $_POST['idade'];
    $castrado = $_POST['castrado'];
    $tutor = $_POST['tutor'];
    $nomeFoto = "";
    if(file_exists($_FILES['foto']['tmp_name'])){
        $pastaDestino = "fotos/";
        $extensao = strtolower(substr($_FILES['foto']['name'],-4));
        $nomeFoto = $pastaDestino . date('Ymd-His').$extensao;
        move_uploaded_file($_FILES['foto']['tmp_name'],$nomeFoto);

    }
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
    echo "<h5>Idade: $idade</h5>";
    echo "<h5>especie: $especie</h5>";
    echo "<h5>Raça: $raca</h5>";
    echo "<h5>Data Nascimento: $data</h5>";
    echo "Id tutor: $tutor";
        $sql = "";
        if($nomeFoto == "")
           { $sql = "UPDATE Animal SET nomeAnimal = '$nome', especie = '$especie', raca = '$raca', dataNascimento = '$data', idade = '$idade', castrado = '$castrado', idTutor = '$tutor'  WHERE idAnimal = $id";}
        else
            {$sql = "UPDATE Animal SET nomeAnimal = '$nome', especie = '$especie', raca = '$raca', dataNascimento = '$data', idade = '$idade', castrado = '$castrado', foto = '$nomeFoto', idTutor = '$tutor'  WHERE idAnimal = $id";    }    
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