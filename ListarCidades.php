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
        $sql = "select * from Cidade";
        $result = mysqli_query($con, $sql);
    ?>
    <h1>Consulta de Cidades:</h1>
    <table align="center" border="1" width="500px">
        <tr>
            <Th>Codigo</Th>
            <th>Nome</th>
            <th>Estado</th>
            <th>Alterar</th>
            <th>Deletar</th>
        </tr>
        <?php
            while($row = mysqli_fetch_array($result)){
                echo"<tr>";
                echo"<td>".$row['idCidade']."</td>";
                echo"<td>".$row['nomeCidade']."</td>";
                echo"<td>".$row['estado']."</td>";
                echo"<td><a href='AtualizarCidade.php?id=".$row['idCidade']."'>Altera</a></td>";
                echo"<td><a href='DeletarCidade.php?id=".$row['idCidade']."'>Deleta</a></td>";
                echo"</tr>";
            }
        ?>
    </table>
    <a href="index.html"><h3>Voltar ao inicio</h3></a>
</body>
</html>