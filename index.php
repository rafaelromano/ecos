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
            $sql = "SELECT * FROM `Ciclos`";
            $result = mysqli_query($conn,$sql); 
            if (!$result) {
                echo "Erro do banco de dados, não foi possível consultar o banco de dados\n";
                echo 'Erro MySQL: ' . mysqli_error();
                exit;
            }
            if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                        echo "<b>Ciclo:"; 
                        ?>
                        <a href="NovoCiclo.php?codigo<?php echo $row["Codigo"]; ?>">
                        <?php
                        echo "</b>" . $row["Titulo-ciclo-aberto"]."</a>";
                        echo "<b> - Data Inicial:</b> ".$row["Data-inicio-geral"];
                        echo "<b> - Data Final: </b>".$row["Data-fim-geral"]."<br><br>";
                        }
                    } else {
                        echo "0 results";
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

