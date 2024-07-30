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
        $sql = "SELECT pe.idPessoa, pe.nomePessoa, pe.email, pe.endereco, pe.bairro, pe.cep, 
                cid.nomeCidade, cid.estado 
                FROM Pessoa pe 
                LEFT JOIN Cidade cid on  cid.idCidade = pe.cidade_id";
        $result = mysqli_query($con, $sql);
    ?>
    <h1>Consulta de Clientes:</h1>
    <table align="center" border="1" width="500px">
        <tr>
            <Th>Codigo</Th>
            <th>Nome</th>
            <th>Email</th>
            <th>Endereço</th>
            <th>Bairro</th>
            <th>CEP</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>Alterar</th>
            <th>Deletar</th>
        </tr>
        <?php
            while($row = mysqli_fetch_array($result)){
                echo"<tr>";
                echo"<td>".$row['idPessoa']."</td>";
                echo"<td>".$row['nomePessoa']."</td>";
                echo"<td>".$row['email']."</td>";
                echo"<td>".$row['endereco']."</td>";
                echo"<td>".$row['bairro']."</td>";
                echo"<td>".$row['cep']."</td>";
                echo"<td>".$row['nomeCidade']."</td>";
                echo"<td>".$row['estado']."</td>";
                echo"<td><a href='AtualizaPessoa.php?id=".$row['idPessoa']."'>Altera</a></td>";
                echo"<td><a href='DeletarPessoa.php?id=".$row['idPessoa']."'>Deleta</a></td>";
                echo"</tr>";
            }
        ?>
    </table>
    <a href="index.html"><h3>Voltar ao inicio</h3></a>
</body>
</html>