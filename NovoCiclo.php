<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Ciclos</title>
</head>
<body>

<center>
<p class='titulo1'>Feira Orgânico Solidário </p>
<table  width=95%>
    <tr>
        <td bgcolor="#E6E6E6">
            <form method="post" action="AtualizarCiclo.php">
            <p class='titulo'>NOVO CICLO</p>
            <?php
            $CODIGO = $_GET['codigo'];
            include "conexao.php";
            
            $banco = mysqli_query($conn, "SELECT * FROM Ciclos WHERE Codigo='".$CODIGO."'"); 

            $total = mysqli_num_rows($banco); 

            while($exibe_ciclos = mysqli_fetch_array($banco)) { 
                echo "<b>Código:</b>".$exibe_ciclos["Codigo"];
                echo "<b>Data inicial do Ciclo:</b><input type='text' size='40' name='codigo' value='".$exibe_ciclos["Data-inicio-geral"]."'>";
                echo "<b>Horário inicial do Ciclo:</b><input type='text' size='40' name='codigo' value='".$exibe_ciclos["Hora-inicio-geral"]."'>";
                echo "<b>Data final	do Ciclo:</b><input type='text' size='40' name='codigo' value='".$exibe_ciclos["Data-fim-geral"]."'>";
                echo "<b>Horário de encerramento do Ciclo:</b><input type='text' size='40' name='codigo' value='".$exibe_ciclos["Hora-fim-geral"]."'>";
                echo "<b>Data inicial para Produtores ofertarem produtos:</b><input type='text' size='40' name='codigo' value='".$exibe_ciclos["Data-inicio-produtores"]."'>";
                echo "<b>Data final para Produtores ofertarem produtos:</b><input type='text' size='40' name='codigo' value='".$exibe_ciclos["Data-fim-produtores"]."'>";
                echo "<b>Data inicial para Consumidores realizarem pedido:</b><input type='text' size='40' name='codigo' value='".$exibe_ciclos["Data-inicio-consumidores"]."'>";
                echo "<b>Data final para Consumidores realizarem pedido:</b><input type='text' size='40' name='codigo' value='".$exibe_ciclos["Data-fim-consumidores"]."'>";
                echo "<b>Título para Ciclo aberto:</b><input type='text' size='40' name='codigo' value='".$exibe_ciclos["Titulo-ciclo-aberto"]."'>";
                echo "<b>Texto para Ciclo aberto:</b><input type='text' size='40' name='codigo' value='".$exibe_ciclos["Texto-complementar-título"]."'>";
                echo "<b>Texto com as Dicas para o Ciclo aberto:</b><input type='text' size='40' name='codigo' value='".$exibe_ciclos["Texto-dicas"]."'>";
                echo "<b>Texto para quando o Ciclo estiver fechado:</b><input type='text' size='40' name='codigo' value='".$exibe_ciclos["Texto-ciclo-fechado"]."'>";
                echo "<b>URL para a página de Produtores 	:</b><input type='text' size='40' name='codigo' value='".$exibe_ciclos["URL-produtores"]."'>";
                echo "<b>Texto para exibir após Produtor finalizar Ofertas:</b><input type='text' size='40' name='codigo' value='".$exibe_ciclos["Texto-confirma-ofertas"]."'>";
                echo "<b>Texto para exibir após Produtores finalizar Pedido:</b><input type='text' size='40' name='codigo' value='".$exibe_ciclos["Texto-confirma-pedido-produtores"]."'>";
                echo "<b>URL para a página de Consumidores :</b><input type='text' size='40' name='codigo' value='".$exibe_ciclos["URL-consumidores"]."'>";
                echo "<b>Texto para exibir após Consumidores finalizar Pedido:</b><input type='text' size='40' name='codigo' value='".$exibe_ciclos["Texto-confirma-pedido-consumidores"]."'>";
                echo "<b>URL para a página de Administradores:</b><input type='text' size='40' name='codigo' value='".$exibe_ciclos["URL-administradores"]."'>";
                echo "<b>Situação:</b><input type='radio' name='situacao' value='".$exibe_ciclos["Situacao"].">Aberto - <input type='radio' name='situacao' value='".$exibe_ciclos["Situacao"]."'>Fechado<br><br>";
            } 
            ?>
        </td>
    </tr>
    <tr>
            <td>
                <br>
                <?php
                echo "<a href='index.php'><button class='button3'>CANCELAR</button></a>";
                echo "&nbsp;&nbsp;&nbsp;<a href='AtualizarCiclo.php'><button class='button3'>ATUALIZAR</button></a></form>";
                mysqli_close($conn);
                ?>
            </td>
    </tr>
</table>

</center>
</body>
</html>
