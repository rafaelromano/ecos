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
//            $hora-inicio-geral = $_POST['hora-inicio-geral'];
//            $data-fim-geral = $_POST['data-fim-geral'];
//            $hora-fim-geral = $_POST['hora-fim-geral'];
//            $data-inicio-produtores = $_POST['data-inicio-produtores'];
//            $data-fim-produtores = $_POST['data-fim-produtores'];
//            $data-inicio-consumidores = $_POST['data-inicio-consumidores'];
//            $data-fim-consumidores = $_POST['data-fim-consumidores'];
//            $titulo-ciclo-aberto = $_POST['titulo-ciclo-aberto'];
//            $texto-complementar-título = $_POST['texto-complementar-título'];
//            $texto-dicas = $_POST['texto-dicas'];
//            $texto-ciclo-fechado = $_POST['texto-ciclo-fechado'];
//            $url-produtores = $_POST['url-produtores'];
//            $texto-confirma-ofertas= $_POST['texto-confirma-ofertas'];
//            $texto-confirma-pedido-produtores = $_POST['texto-confirma-pedido-produtores'];
//            $url-consumidores = $_POST['url-consumidores'];
//            $texto-confirma-pedido-consumidores = $_POST['texto-confirma-pedido-consumidores'];
//            $url-administradores = $_POST['url-administradores'];
//            $situacao = $_POST['situacao'];
           
            include "conexao.php";
            
            //$banco = mysqli_query($conn, "UPDATE Ciclos SET Data-inicio-geral='$data-inicio-geral', Hora-inicio-gera='$hora-inicio-geral', Data-fim-geral='$data-fim-geral', Hora-fim-geral='$hora-fim-geral', Data-inicio-produtores='$data-inicio-produtores', Data-fim-produtores='$data-fim-produtores', Data-inicio-consumidores='$data-inicio-consumidores', Data-fim-consumidores='$data-fim-consumidores', Titulo-ciclo-aberto='$titulo-ciclo-aberto', Texto-complementar-título='$texto-complementar-título', Texto-dicas='$texto-dicas', Texto-ciclo-fechado='$texto-ciclo-fechado', URL-produtores='$url-produtores', Texto-confirma-ofertas='$texto-confirma-ofertas', Texto-confirma-pedido-produtores='$texto-confirma-pedido-produtores', URL-consumidores='$url-consumidores', Texto-confirma-pedido-consumidores='$texto-confirma-pedido-consumidores', URL-administradores='$url-administradores', Situacao='$situacao' WHERE codigo='$CODIGO'"); 
            mysqli_close($conn);
            ?>
        </td>
    </tr>
    
</table>

</center>
</body>
</html>
