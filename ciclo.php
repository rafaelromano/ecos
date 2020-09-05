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

            echo'<table width="88%" height="10" cellspacing="0" cellpadding="0"><tr>';
            
            $stmt = $conn->prepare("SELECT * FROM `Ciclos` ORDER BY `id` ASC ");
            $stmt->execute( );
            $linha = $stmt->fetch(PDO::FETCH_ASSOC);
            while($linha = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<b>Ciclo:"; 
                ?>
                <a href="NovoCiclo.php?codigo<?php echo $row["Codigo"]; ?>">
                <?php
                echo "</b>" . $row["Titulo-ciclo-aberto"]."</a>";
                echo "<b> - Data Inicial:</b> ".$row["Data-inicio-geral"];
                echo "<b> - Data Final: </b>".$row["Data-fim-geral"]."<br><br>";
            }
            echo "</tr></table>";


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

