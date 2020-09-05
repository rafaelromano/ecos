<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
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
        ?>
        <div class="conteudo_p">
            <div class="Ciclo"><?php echo $exibe_ciclos['Titulo-ciclo-aberto']; ?></div>
            <div class="Data_Inicial"><?php echo $exibe_ciclos['Data-inicio-geral']; ?></div>
            <div class="Data-fim-geral"><?php echo $exibe_ciclos['Data-fim-geral']; ?></div>
        </div>
        <?php } ?>
        <?php
            if($pagina > 1) {
                echo "<a href='index.php?pagina=".($pagina - 1)."' class='controle'>&laquo; anterior</a>";
            }

            for($i = 1; $i < $numPaginas; $i++) {
                $ativo = ($i == $pagina) ? 'numativo' : '';
                echo "<a href='index.php?pagina=".$i."' class='numero ".$ativo."'> ".$i." </a>";
            }

            if($pagina < $numPaginas) {
                echo "<a href='index.php?pagina=".($pagina + 1)."' class='controle'>proximo &raquo;</a>";
            }

            mysqli_close($conn);
            ?>
            <br>
            <br>   
        </td>
    </tr>
</table>

</p>
</body>
</html>

