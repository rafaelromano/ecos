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
            <<p class='p.titulo'>NOVO CICLO</p>
            <?php
            include "conexao.php";
            
            $banco = mysqli_query($conn, "SELECT * FROM Ciclos WHERE Codigo='".$codigo."'"); 

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
                <br>
                <?php
                echo "<a href='index.php'><button class='button3'>CANCELAR</button></a>";
                echo "&nbsp;&nbsp;&nbsp;<a href='AtualizarCiclo.php'><button class='button3'>ATUALIZAR</button></a>";
                mysqli_close($conn);
                ?>
            </td>
    </tr>
</table>

</p>
</body>
</html>