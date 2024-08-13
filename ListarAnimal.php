
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
        $sql = "SELECT an.idAnimal, an.nomeAnimal, foto, an.especie,  an.raca ,  an.dataNascimento,  an.idade,  an.castrado, 
        tu.nomePessoa, tu.email 
        FROM Animal an 
        LEFT JOIN Pessoa tu on  tu.idPessoa = an.idTutor";
        $result = mysqli_query($con, $sql);
    ?>
    <h1>Consulta de Animais:</h1>
    <table align="center" border="1" width="500px">
        <tr>
            <Th>Codigo</Th>
            <th>Nome</th>
            <th>Foto</th>
            <th>Especie</th>
            <th>Raça</th>
            <th>Data Nascimento</th>
            <th>Idade</th>
            <th>Castrado</th>
            <th>Nome Tutor</th>
            <th>Email Tutor</th>
            <th>Alterar</th>
            <th>Deletar</th>
        </tr>
        <?php
            while($row = mysqli_fetch_array($result)){
                echo"<tr>";
                echo"<td>".$row['idAnimal']."</td>";
                echo"<td>".$row['nomeAnimal']."</td>";
                if($row['foto']==""){
                    echo "<td>Vazio</td>";
                }
                else{
                    echo"<td><img src ='".$row['foto']."' width ='80px' height ='80px' ></td>";
                }
                echo"<td>".$row['especie']."</td>";
                echo"<td>".$row['raca']."</td>";
                echo"<td>".$row['dataNascimento']."</td>";
                echo"<td>".$row['idade']."</td>";
                echo"<td>"; if($row['castrado'] == 0) {echo "Sim";} else{echo "Não";} echo "</td>";
                echo"<td>".$row['nomePessoa']."</td>";
                echo"<td>".$row['email']."</td>";
                echo"<td><a href='AtualizarAnimal.php?id=".$row['idAnimal']."'>Altera</a></td>";
                echo"<td><a href='DeletarAnimal.php?id=".$row['idAnimal']."'>Deleta</a></td>";
                echo"</tr>";
            }
        ?>
    </table>
    <a href="index.html"><h3>Voltar ao inicio</h3></a>
</body>
</html>
