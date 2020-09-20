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
            <p class='titulo'>CADASTRO REALIZADO</p>
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
            
            /*mysqli_query($conn,"INSERT INTO `Ciclos` (`Codigo`, `Data-inicio-geral`, `Hora-inicio-geral`, `Data-fim-geral`,
            `Hora-fim-geral`, `Data-inicio-produtores`, `Data-fim-produtores`, `Data-inicio-consumidores`, `Data-fim-consumidores`,
            `Titulo-ciclo-aberto`, `Texto-complementar-título`, `Texto-dicas`, `Texto-ciclo-fechado`, `URL-produtores`,
            `Texto-confirma-ofertas`, `Texto-confirma-pedido-produtores`, `URL-consumidores`, `Texto-confirma-pedido-consumidores`,
            `URL-administradores`, `Situacao`) VALUES 
            (NULL,'$datainiciogeral','$horainiciogeral','$datafimgeral','$horafimgeral','$datainicioprodutores','$datafimprodutores',
            '$datainicioconsumidores','$datafimconsumidores','$titulocicloaberto','$textocomplementartítulo','$textodicas',
            '$textociclofechado','$urlprodutores','$textoconfirmaofertas','$textoconfirmapedidoprodutores','$urlconsumidores',
            '$textoconfirmapedidoconsumidores','$urladministradores','$situacao')");*/
            
            mysqli_close($conn);
            ?>
            <br>
            <!-- <div align="center" class="titulo">Você será redirecionado em: <br><div classs="titulo1" id="timers">3 segundos</div>-->
        </td>
    </tr>
    <tr>
            <td>
                <br>
                <?php
                echo "<a href='produtos.php'><button class='button3'>PÁGINA INICIAL</button></a>";
                ?>
            </td>
    </tr>
</table>

</center>
</body>
</html>
