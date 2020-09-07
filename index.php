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
            <p class='titulo'>CICLOS</p>
            <a href="NovoCiclo.php" class='subtitulo'>Novo Ciclo</a>
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
                echo "<p class='texto'><b>Ciclo:"; 
                ?>
                <a href="NovoCiclo.php?codigo=<?php echo $exibe_ciclos["Codigo"]; ?>">
                <?php
                echo "</b>" . $exibe_ciclos["Titulo-ciclo-aberto"]."</a></p>";
                $datainiciogeral= strtotime($exibe_ciclos["Titulo-ciclo-aberto"]);
                $datainiciogeral=date("d-m-y",$datainiciogeral);
                echo "<p class='texto'><b> - Data Inicial:</b> ".$datainiciogeral."</p>";
                echo "<p class='texto'><b> - Data Final: </b>".$exibe_ciclos["Data-fim-geral"]."</p><br>";
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
                    echo "<a href='index.php?pagina=".($pagina - 1)."'><button class='button3'>Ciclos Anteriores</button></a>&nbsp;&nbsp;";
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

</center>
</body>
</html>
