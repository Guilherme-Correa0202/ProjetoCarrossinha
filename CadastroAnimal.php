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
    <form action="CadastroAnimalExe.php" method="post">
        <fieldset>
            <div>
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome">
            </div>
            <div>
                <label for="especie">Especie:</label>
                <input type="text" name="especie" id="especie">
            </div>
            <div>
                <label for="raca">Raça</label>
                <input type="text" name="raca" id="raca">
            </div>
            <div>
                <label for="data">Data Nascimento</label>
                <input type="date" name="data" id="data">
            </div>
             <div>
                <label for="idade">Idade</label>
                <input type="number" name="idade" id="idade">
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
                    while($row = mysqli_fetch_array($result)){
                        echo " <option value = '".$row['idPessoa']."'>".$row['nomePessoa']."/".$row['cep']."</option>";
                    }

                ?>
                </select>
            </div>
            <button type="submit" value="<?php echo $row['idPessoa']; ?>">Cadastrar</button>
        </fieldset>
    </form>
    <a href="index.html"><h3>Voltar ao inicio</h3></a>
</body>
</html>