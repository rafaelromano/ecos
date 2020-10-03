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
            <a href="NovoCiclo.php" class='subtitulo'>Novo Pedido</a>
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
                <a href="NovoPedidoConsumidoresH.php?codigo=<?php echo $exibe_pedidos["Codigo"];?>"><?php echo $exibe_pedidos["Codigo"]."</a></b></p> ";
                $codigo = $exibe_pedidos["CI-Codigo"];
                $query = mysqli_query($conn, "SELECT * FROM Consumidores WHERE Codigo=$codigo"); 
                $consumidor= mysqli_result($query, 0, "Nome");
                echo "<p class='texto'><b>Consumidor: </b>".$consumidor."</p>";
                /*$datainiciogeral= strtotime($exibe_pedidos["Data-inicio-geral"]);
                $datainiciogeral=date("d-m-Y",$datainiciogeral);
                echo "<p class='texto'><b> - Data Inicial:</b> ".$datainiciogeral."</p>";
                $datafinalgeral= strtotime($exibe_pedidos["Data-fim-geral"]);
                $datafinalgeral=date("d-m-Y",$datafinalgeral);
                echo "<p class='texto'><b> - Data Final: </b>".$datafinalgeral."</p><br>";*/
                //echo "<p class='texto'><b> - Data Inicial:</b> ".$exibe_ciclos["Data-inicio-geral"]."</p>";
                //echo "<p class='texto'><b> - Data Final: </b>".$exibe_ciclos["Data-fim-geral"]."</p><br>";
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
