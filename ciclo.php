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
            $busca = "SELECT * FROM Ciclos";
            $total_reg = "10"; // número de registros por página
            $pagina=$_GET['pagina'];
            if (!$pagina) {
                $pc = "1";
            } else {
                $pc = $pagina;
            }
            $inicio = $pc - 1;
            $inicio = $inicio * $total_reg;
            $limite = mysql_query("$busca LIMIT $inicio,$total_reg");
            $todos = mysql_query("$busca");

            $tr = mysql_num_rows($todos); // verifica o número total de registros
            $tp = $tr / $total_reg; // verifica o número total de páginas

            // vamos criar a visualização
            while ($dados = mysql_fetch_array($limite)) {
                $nome = $dados["nome"];
                echo "Nome: $nome<br>";
            }

            // agora vamos criar os botões "Anterior e próximo"
            $anterior = $pc -1;
            $proximo = $pc +1;
            if ($pc>1) {
                echo " <a href='?pagina=$anterior'><- Anterior</a> ";
            }
            echo "|";
            if ($pc<$tp) {
                echo " <a href='?pagina=$proximo'>Próxima -></a>";
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

