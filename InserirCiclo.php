<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Ciclos</title>
</head>
<body>
<center>
<p class='titulo1'>Feira Orgânico Solidário </p>
<table class='table'>
    <tr>
        <td class='td01'>
            <p class='titulo'>CADASTRO ATUALIZADO</p>
            <?php
            ini_set('display_errors', 1);
            error_reporting(E_ALL | E_STRICT);
            $datainiciogeral = $_POST['data-inicio-geral'];
            echo $datainiciogeral."<br>";
            $horainiciogeral = $_POST['hora-inicio-geral'];
            echo $horainiciogeral."<br>";
            $datafimgeral = $_POST['data-fim-geral'];
            echo $datafimgeral."<br>";
            $horafimgeral = $_POST['hora-fim-geral'];
            echo $horafimgeral."<br>";
            $datainicioprodutores = $_POST['data-inicio-produtores'];
            echo $datainicioprodutores."<br>";
            $datafimprodutores = $_POST['data-fim-produtores'];
            echo $datafimprodutores."<br>";
            $datainicioconsumidores = $_POST['data-inicio-consumidores'];
            echo $datainicioconsumidores."<br>";
            $datafimconsumidores = $_POST['data-fim-consumidores'];
            echo $datafimconsumidores."<br>";
            $titulocicloaberto = $_POST['titulo-ciclo-aberto'];
            echo $titulocicloaberto."<br>";
            $textocomplementartítulo = $_POST['texto-complementar-título'];
            echo $textocomplementartítulo."<br>";
            $textodicas = $_POST['texto-dicas'];
            echo $textodicas."<br>";
            $textociclofechado = $_POST['texto-ciclo-fechado'];
            echo $textociclofechado."<br>";
            $urlprodutores = $_POST['url-produtores'];
            echo $urlprodutores."<br>";
            $textoconfirmaofertas= $_POST['texto-confirma-ofertas'];
            echo $textoconfirmaofertas."<br>";
            $textoconfirmapedidoprodutores = $_POST['texto-confirma-pedido-produtores'];
            echo $textoconfirmapedidoprodutores."<br>";
            $urlconsumidores = $_POST['url-consumidores'];
            echo $urlconsumidores."<br>";
            $textoconfirmapedidoconsumidores = $_POST['texto-confirma-pedido-consumidores'];
            echo $textoconfirmapedidoconsumidores."<br>";
            $urladministradores = $_POST['url-administradores'];
            echo $urladministradores."<br>";
            $situacao = $_POST['situacao'];
            echo $situacao."<br>";
           
            include "conexao.php";
            
            $sql=("INSET INTO `Ciclos` (`Codigo`, `Data-inicio-geral`, `Hora-inicio-geral`, `Data-fim-geral`,
            `Hora-fim-geral`, `Data-inicio-produtores`, `Data-fim-produtores`, `Data-inicio-consumidores`, `Data-fim-consumidores`,
            `Titulo-ciclo-aberto`, `Texto-complementar-título`, `Texto-dicas`, `Texto-ciclo-fechado`, `URL-produtores`,
            `Texto-confirma-ofertas`, `Texto-confirma-pedido-produtores`, `URL-consumidores`, `Texto-confirma-pedido-consumidores`,
            `URL-administradores`, `Situacao`) VALEUS 
            (NULL,'$datainiciogeral','$horainiciogeral','$datafimgeral','$horafimgeral','$datainicioprodutores','$datafimprodutores',
           '$datainicioconsumidores','$datafimconsumidores','$titulocicloaberto','$textocomplementartítulo','$textodicas',
           '$textociclofechado','$urlprodutores','$textoconfirmaofertas','$textoconfirmapedidoprodutores','$urlconsumidores',
           '$textoconfirmapedidoconsumidores','$urladministradores','$situacao')");
            
            $res= mysqli_query($conn,$sql); 
            
            mysqli_close($conn);
            ?>
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
