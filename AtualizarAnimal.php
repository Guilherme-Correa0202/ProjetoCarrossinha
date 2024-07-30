<?php
    include("Includes/conexao.php");
    $id = $_GET["id"];
    $sql = "SELECT * FROM Animal WHERE idAnimal=$id";
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
<form action="AtualizarAnimalExe.php" method="post">
        <fieldset>
        <div>
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" value=" <?php echo $row['nomeAnimal'] ?>">
            </div>
            <div>
                <label for="especie">Especie:</label>
                <input type="text" name="especie" id="especie" value=" <?php echo $row['especie'] ?>">
            </div>
            <div>
                <label for="raca">Raça</label>
                <input type="text" name="raca" id="raca" value=" <?php echo $row['raca'] ?>">
            </div>
            <div>
                <label for="data">Data Nascimento</label>
                <input type="text" name="data" id="data" value=" <?php echo $row['dataNascimento'] ?>">
            </div>
             <div>
                <label for="idade">Idade</label>
                <input type="text" name="idade" id="idade" value=" <?php echo $row['idade'] ?>">
            </div>
            <div>
                <label for="castrado">Animal Castrado</label>
                <select name="castrado" id="castrado">
                    <option value="0">Sim</option>
                    <option value="1">Não</option>
                </select>
            </div>
            <div>
                <label for="tutor">Tutor:</label>
                <select name="tutor" id="tutor">
                <?php
                    include('Includes/conexao.php');
                    $sql = "SELECT * FROM Pessoa";
                    $result = mysqli_query($con, $sql);
                    while($row_cid = mysqli_fetch_array($result)){
                        $sel = $row_cid['idPessoa'] == $row['idTutor']?"selected":"";
                        echo " <option value = '".$row_cid['idPessoa']."'>".$row_cid['nomePessoa']."/".$row_cid['cep']."</option>";
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