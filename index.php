<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Ciclos</title>
</head>
<body>

<p align="center"> 
    <font size="20px" face="Verdana" color="#0489B1">  Feira Orgânico Solidário </font>
<br>
<br>
<br>
<table  width=95%>
    <tr>
        <td bgcolor="#E6E6E6">
            <br>
            <font size="6px" face="Verdana" color="#0489B1">CICLOS</font>
            <br>
            <br>
            <a href="NovoCiclo.php"><font size="4px" face="Verdana" color="#0489B1">  Novo Ciclo</font></a>
            <br>
            <br>
            <?php
            include "conexao.php";
            $pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1; 

            $banco = mysqli_query($conn, "SELECT * FROM Ciclos WHERE Situacao='1'"); 

            $total = mysqli_num_rows($banco); 

            $registros = 5;

            $numPaginas = ceil($total/$registros);

            $inicio = ($registros*$pagina)-$registros; 

            $banco = mysqli_query($conn, "SELECT * FROM Ciclos WHERE Situacao='1' LIMIT $inicio,$registros"); 
            $total = mysqli_num_rows($banco); 

            while($exibe_ciclos = mysqli_fetch_array($banco)) { 
                echo "<b>Ciclo:"; 
                ?>
                <a href="NovoCiclo.php?codigo<?php echo $exibe_ciclos["Codigo"]; ?>">
                <?php
                echo "</b>" . $exibe_ciclos["Titulo-ciclo-aberto"]."</a>";
                echo "<b> - Data Inicial:</b> ".$exibe_ciclos["Data-inicio-geral"];
                echo "<b> - Data Final: </b>".$exibe_ciclos["Data-fim-geral"]."<br><br>";
            } 
            ?>
        </td>
    </tr>
    <tr>
            <td>
                <?php
                if($pagina > 1) {
                    echo "<a href='index.php?pagina=".($pagina - 1)."' class='controle'>&laquo; anterior</a>";
                    //echo "<a href='index.php?pagina=".($pagina - 1)."' class='controle'><input type='Button' value='CICLOS ANTERIORES' class='button1'></a>"; 
                }
    
                for($i = 1; $i < $numPaginas; $i++) {
                    $ativo = ($i == $pagina) ? 'numativo' : '';
                    //echo "<a href='index.php?pagina=".$i."' class='numero ".$ativo."'> ".$i." </a>";
                    echo "<a href='index.php?pagina=".$i."' class='numero ".$ativo."'><input type='Button' value='".$i."' class='button2'></a>";
                }
    
                if($pagina < $numPaginas) {
                    //echo "<a href='index.php?pagina=".($pagina + 1)."' class='controle'>proximo &raquo;</a>";
                    echo "<a href='index.php?pagina=".($pagina - 1)."' class='controle'><input type='Button' value='EXIBIR PRÓXIMOS CICLOS' class='button1'></a>";
                }
                mysqli_close($conn);
                ?>
            </td>
    </tr>
</table>

</p>
</body>
</html>

