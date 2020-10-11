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
            <p class='titulo'>PEDIDOS CONSUMIDORES</p>
            <a href="NovoPedConsumidorH.php" class='subtitulo'>Novo Pedido</a>
            <br>
            <br>
            <?php
            include "conexao.php";
            $pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1; 

            $banco = mysqli_query($conn, "SELECT * FROM `Pedidos-Consumidores-Header` WHERE Situacao='1'"); 

            $total = mysqli_num_rows($banco); 
            //echo $total;
            $registros = 5;

            $numPaginas = ceil($total/$registros);

            $inicio = ($registros*$pagina)-$registros; 
            //echo $inicio;
            //echo $registros;
            $banco1 = mysqli_query($conn, "SELECT * FROM `Pedidos-Consumidores-Header` WHERE Situacao='1' LIMIT $inicio,$registros"); 
            $total = mysqli_num_rows($banco1); 

            while($exibe_pedidos = mysqli_fetch_array($banco1)) { 
                echo "<p class='texto'><b>Pedido:"; 
                ?>
                <a href="NovoPedConsumidorH.php?codigo=<?php echo $exibe_pedidos["Codigo"];?>"><?php echo $exibe_pedidos["Codigo"]."</a></b></p> ";
                $codigo = $exibe_pedidos["CI-Codigo"];
                $banco3 = mysqli_query($conn, "SELECT * FROM `Ciclos` WHERE Codigo='$codigo'"); 
                while($exibe_ciclo = mysqli_fetch_array($banco3)) { 
                    echo "<p class='texto2'><b>- Ciclo: </b>".$exibe_ciclo["Titulo-ciclo-aberto"]."</p>";
                }      
                $codigo = $exibe_pedidos["CO-Codigo"];
                $banco2 = mysqli_query($conn, "SELECT * FROM `Consumidores` WHERE Codigo='$codigo'"); 
                while($exibe_consumidor = mysqli_fetch_array($banco2)) { 
                    echo "<p class='texto2'><b>- Consumidor: </b>".$exibe_consumidor["Nome"]."</p>";
                }      
                
                echo "<p class='texto2'><b> - OBS Consumidor:<br></b> ".$exibe_pedidos["OBS-Consumidor"]."</p>";
                if($exibe_pedidos["Forma-Pagamento"] == 1)
                        {
                        $selecao="Cartão de Débito";
                        }
                    elseif($exibe_pedidos["Forma-Pagamento"] == 2)
                        {
                        $selecao="Cartão de Crédito";
                        }
                    else
                        {
                        $selecao="Dinheiro";
                        }
                echo "<p class='texto2'><b> - Forma de Pagamento:<br></b> ".$selecao."</p>";
                if($exibe_pedidos["Tipo-Entrega"] == 1)
                        {
                        $selecao="Consumidor retira mercadoria";
                        }
                    elseif($exibe_pedidos["Tipo-Entrega"] == 2)
                        {
                        $selecao="Produtor envia mercadoria";
                        }
                    else
                        {
                        $selecao="Uber";
                        }
                echo "<p class='texto2'><b> - Tipo de Entrega:<br></b> ".$selecao."</p>";
                echo "<p class='texto2'><b> - Descrição de Pendência:<br></b> ".$exibe_pedidos["Descricao-Pendencia"]."</p>";
            } 
            ?>
            <br>
        </td>
    </tr>
    <tr>
            <td>
                <br>
                <?php
                if($pagina > 1) {
                    echo "<a href='pedidosconsumidores.php?pagina=".($pagina - 1)."'><button class='button3'>Ciclos Anteriores</button></a>&nbsp;&nbsp;";
                }
    
                for($i = 1; $i < $numPaginas; $i++) {
                    $ativo = ($i == $pagina) ? 'numativo' : '';
                    echo "<a href='pedidosconsumidores.php?pagina=".$i."' class='numero ".$ativo."'><input type='Button' value='".$i."' class='button2'></a>";
                }
    
                if($pagina < $numPaginas) {
                    echo "&nbsp;&nbsp;<a href='pedidosconsumidores.php?pagina=".($pagina + 1)."'><button class='button3'>Exibir Próximos Ciclos</button></a>";
                }
                mysqli_close($conn);
                ?>
            </td>
    </tr>
</table>

</center>
</body>
</html>
