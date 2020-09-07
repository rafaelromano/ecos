<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Ciclos</title>
        <script src="http://www.elitegta.com.br/sites/download/downModsModalNome.js"></script>
        
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
            //echo $CODIGO."<br>";
            $datainiciogeral = $_POST['data-inicio-geral'];
            //echo $datainiciogeral."<br>";
            $horainiciogeral = $_POST['hora-inicio-geral'];
            //echo $horainiciogeral."<br>";
            $datafimgeral = $_POST['data-fim-geral'];
            //echo $datafimgeral."<br>";
            $horafimgeral = $_POST['hora-fim-geral'];
            //echo $horafimgeral."<br>";
            $datainicioprodutores = $_POST['data-inicio-produtores'];
            //echo $datainicioprodutores."<br>";
            $datafimprodutores = $_POST['data-fim-produtores'];
            //echo $datafimprodutores."<br>";
            $datainicioconsumidores = $_POST['data-inicio-consumidores'];
            //echo $datainicioconsumidores."<br>";
            $datafimconsumidores = $_POST['data-fim-consumidores'];
            //echo $datafimconsumidores."<br>";
            $titulocicloaberto = $_POST['titulo-ciclo-aberto'];
            //echo $titulocicloaberto."<br>";
            $textocomplementartítulo = $_POST['texto-complementar-título'];
            //echo $textocomplementartítulo."<br>";
            $textodicas = $_POST['texto-dicas'];
            //echo $textodicas."<br>";
            $textociclofechado = $_POST['texto-ciclo-fechado'];
            //echo $textociclofechado."<br>";
            $urlprodutores = $_POST['url-produtores'];
            //echo $urlprodutores."<br>";
            $textoconfirmaofertas= $_POST['texto-confirma-ofertas'];
            //echo $textoconfirmaofertas."<br>";
            $textoconfirmapedidoprodutores = $_POST['texto-confirma-pedido-produtores'];
            //echo $textoconfirmapedidoprodutores."<br>";
            $urlconsumidores = $_POST['url-consumidores'];
            //echo $urlconsumidores."<br>";
            $textoconfirmapedidoconsumidores = $_POST['texto-confirma-pedido-consumidores'];
            //echo $textoconfirmapedidoconsumidores."<br>";
            $urladministradores = $_POST['url-administradores'];
            //echo $urladministradores."<br>";
            $situacao = $_POST['situacao'];
            //echo $situacao."<br>";
           
            include "conexao.php";
            
            mysqli_query($conn, "UPDATE `Ciclos` SET `Data-inicio-geral`='$datainiciogeral', `Hora-inicio-geral`='$horainiciogeral',
            `Data-fim-geral`='$datafimgeral', `Hora-fim-geral`='$horafimgeral', `Data-inicio-produtores`='$datainicioprodutores',
            `Data-fim-produtores`='$datafimprodutores', `Data-inicio-consumidores`='$datainicioconsumidores', 
            `Data-fim-consumidores`='$datafimconsumidores', `Titulo-ciclo-aberto`='$titulocicloaberto',
            `Texto-complementar-título`='$textocomplementartítulo', `Texto-dicas`='$textodicas',
            `Texto-ciclo-fechado`='$textociclofechado', `URL-produtores`='$urlprodutores',
            `Texto-confirma-ofertas`='$textoconfirmaofertas', `Texto-confirma-pedido-produtores`='$textoconfirmapedidoprodutores',
            `URL-consumidores`='$urlconsumidores', `Texto-confirma-pedido-consumidores`='$textoconfirmapedidoconsumidores',
            `URL-administradores`='$urladministradores', `Situacao`='$situacao' WHERE `Codigo`='$CODIGO'");
                        
             mysqli_close($conn);
            ?>
            <br>
            <div align="center" style="font-family: tahoma; font-size: 16px;">Você será redirecionado em: <br><div style="font-family: tahoma; font-size: 56px;" id="timers">10</div>
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
