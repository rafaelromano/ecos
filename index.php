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
            <p class='p.titulo'>CICLOS</p>
            <p class='p.subtitulo'><a href="NovoCiclo.php">Novo Ciclo</a></p>
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
                echo "<p class='p.texto'><b>Ciclo:"; 
                ?>
                <a href="NovoCiclo.php?codigo<?php echo $exibe_ciclos["Codigo"]; ?>">
                <?php
                echo "</b>" . $exibe_ciclos["Titulo-ciclo-aberto"]."</a></p>";
                echo "<p class='p.texto'<b> - Data Inicial:</b> ".$exibe_ciclos["Data-inicio-geral"]."</p>";
                echo "<p class='p.texto'<b> - Data Final: </b>".$exibe_ciclos["Data-fim-geral"]."</p>";
            } 
            ?>
        </td>
    </tr>
    <tr>
            <td>
                <br>
                <?php
                if($pagina > 1) {
                    echo "<a href='index.php?pagina=".($pagina - 1)."'><button class='button3'>Ciclos Anteriores</button></a>";
                }
    
                for($i = 1; $i < $numPaginas; $i++) {
                    $ativo = ($i == $pagina) ? 'numativo' : '';
                    echo "<a href='index.php?pagina=".$i."' class='numero ".$ativo."'><input type='Button' value='".$i."' class='button2'></a>";
                }
    
                if($pagina < $numPaginas) {
                    echo "&nbsp;&nbsp;<a href='index.php?pagina=".($pagina + 1)."'><button class='button3'>Exibir Próximos Ciclos</button></a>";
                }
                mysqli_close($conn);
                ?>
            </td>
    </tr>
</table>

</p>
</body>
</html>
