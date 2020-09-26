<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Ciclos</title>
        <meta http-equiv="refresh" content="3;url=produtos.php" />
        

</head>
<body>
<center>
<p class='titulo1'>Feira Orgânico Solidário </p>
<table class='table'>
    <tr>
        <td class='td01'>
            <br>
            <p class='titulo'>CADASTRO ATUALIZADO</p>
            <?php
            $CODIGO = $_POST['codigo'];
            $ptcodigo = $_POST['pt-codigo'];
            $cpcodigo = $_POST['cp-codigo'];
            $descricao = $_POST['descricao'];
            $qtddisponivel = $_POST["qtd-disponivel"];
            $custo = $_POST['custo'];
            $preco = $_POST['preco'];
            $disponibilidade = $_POST['disponibilidade'];
            
            include "conexao.php";
            
            mysqli_query($conn, "UPDATE `Produtos` SET 
            `PT-Codigo`='$ptcodigo', 
            `CP-Codigo`='$cpcodigo',
            `Descricao`='$descricao',
            `Qtd-Disponivel`='$qtddisponivel',
            `Custo`='$custo',
            `Preco`='$preco',
            `Disponibilidade`='$disponibilidade'
             WHERE `Codigo`='$CODIGO'");
                        
             mysqli_close($conn);
            ?>
            <br>
            <div align="center" class="titulo">Você será redirecionado em: <br><div classs="titulo1" id="timers">3 segundos</div>
        </td>
    </tr>
    <tr>
            <td>
                <br>
                <?php
                echo "<a href='index.php'><button class='button3'>PÁGINA INICIAL</button></a>";
                ?>
            </td>
    </tr>
</table>

</center>
</body>
</html>
