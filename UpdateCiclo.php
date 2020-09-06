<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Ciclos</title>
</head>
<body>
<center>
<p class='titulo1'>Feira Orgânico Solidário </p>
<table  width=95%>
    <tr>
        <td bgcolor="#E6E6E6">
            <p class='titulo'>CADASTRO ATUALIZADO</p>
            <?php
            $CODIGO = $_POST['codigo'];
            $datainiciogeral = $_POST['data-inicio-geral'];
            $horainiciogeral = $_POST['hora-inicio-geral'];
            $datafimgeral = $_POST['data-fim-geral'];
            $horafimgeral = $_POST['hora-fim-geral'];
            $datainicioprodutores = $_POST['data-inicio-produtores'];
            $datafimprodutores = $_POST['data-fim-produtores'];
            $datainicioconsumidores = $_POST['data-inicio-consumidores'];
            $datafimconsumidores = $_POST['data-fim-consumidores'];
            $titulocicloaberto = $_POST['titulo-ciclo-aberto'];
            $textocomplementartítulo = $_POST['texto-complementar-título'];
            $textodicas = $_POST['texto-dicas'];
            $textociclofechado = $_POST['texto-ciclo-fechado'];
            $urlprodutores = $_POST['url-produtores'];
            $textoconfirmaofertas= $_POST['texto-confirma-ofertas'];
            $textoconfirmapedidoprodutores = $_POST['texto-confirma-pedido-produtores'];
            $urlconsumidores = $_POST['url-consumidores'];
            $textoconfirmapedidoconsumidores = $_POST['texto-confirma-pedido-consumidores'];
            $urladministradores = $_POST['url-administradores'];
            $situacao = $_POST['situacao'];
           
            include "conexao.php";
            
            $banco = mysqli_query($conn, "UPDATE Ciclos SET Data-inicio-geral='$datainiciogeral', Hora-inicio-gera='$horainiciogeral',
            Data-fim-geral='$datafimgeral', Hora-fim-geral='$horafimgeral', Data-inicio-produtores='$datainicioprodutores',
            Data-fim-produtores='$datafimprodutores', Data-inicio-consumidores='$datainicioconsumidores', 
            Data-fim-consumidores='$datafimconsumidores', Titulo-ciclo-aberto='$titulocicloaberto',
            Texto-complementar-título='$textocomplementartítulo', Texto-dicas='$textodicas',
            Texto-ciclo-fechado='$textociclofechado', URL-produtores='$urlprodutores',
            Texto-confirma-ofertas='$textoconfirmaofertas', Texto-confirma-pedido-produtores='$textoconfirmapedidoprodutores',
            URL-consumidores='$urlconsumidores', Texto-confirma-pedido-consumidores='$textoconfirmapedidoconsumidores',
            URL-administradores='$urladministradores', Situacao='$situacao' WHERE codigo='$CODIGO'"); 

            mysqli_close($conn);
            ?>
        </td>
    </tr>
    
</table>

</center>
</body>
</html>
