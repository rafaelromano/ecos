<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Ciclos</title>
        <meta http-equiv="refresh" content="3;url=index.php" />
        

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
            $ptcodigo = $_POST['pt-codigo'];
            echo $ptcodigo."<br>";
            $cpcodigo = $_POST['cp-codigo'];
            echo $cpcodigo."<br>";
            $descricao = $_POST['descricao'];
            echo $descricao."<br>";
            $custo = $_POST['custo'];
            echo $custo."<br>";
            $preco = $_POST['preco'];
            echo $preco."<br>";
            $disponibilidade = $_POST['disponibilidade'];
           
            include "conexao.php";
            
            /*mysqli_query($conn, "UPDATE `Ciclos` SET `Data-inicio-geral`='$datainiciogeral', `Hora-inicio-geral`='$horainiciogeral',
            `Data-fim-geral`='$datafimgeral', `Hora-fim-geral`='$horafimgeral', `Data-inicio-produtores`='$datainicioprodutores',
            `Data-fim-produtores`='$datafimprodutores', `Data-inicio-consumidores`='$datainicioconsumidores', 
            `Data-fim-consumidores`='$datafimconsumidores', `Titulo-ciclo-aberto`='$titulocicloaberto',
            `Texto-complementar-título`='$textocomplementartítulo', `Texto-dicas`='$textodicas',
            `Texto-ciclo-fechado`='$textociclofechado', `URL-produtores`='$urlprodutores',
            `Texto-confirma-ofertas`='$textoconfirmaofertas', `Texto-confirma-pedido-produtores`='$textoconfirmapedidoprodutores',
            `URL-consumidores`='$urlconsumidores', `Texto-confirma-pedido-consumidores`='$textoconfirmapedidoconsumidores',
            `URL-administradores`='$urladministradores', `Situacao`='$situacao' WHERE `Codigo`='$CODIGO'");*/
                        
             mysqli_close($conn);
            ?>
            <br>
            <!-- <div align="center" class="titulo">Você será redirecionado em: <br><div classs="titulo1" id="timers">3 segundos</div> -->
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
