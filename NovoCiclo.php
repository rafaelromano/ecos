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
                echo "<b>Código:</b>".$exibe_ciclos["Codigo"]."<br>";
                echo "<b>Data inicial do Ciclo:</b><br><input type='text' size='10' maxlength='10' name='codigo' value='".$exibe_ciclos["Data-inicio-geral"]."'><br>";
                echo "<b>Horário inicial do Ciclo:</b><br><input type='text' size='5'  maxlength='5' name='codigo' value='".$exibe_ciclos["Hora-inicio-geral"]."'><br>";
                echo "<b>Data final	do Ciclo:</b><br><input type='text' size='10'  maxlength='10' name='codigo' value='".$exibe_ciclos["Data-fim-geral"]."'><br>";
                echo "<b>Horário de encerramento do Ciclo:</b><br><input type='text' size='5'  maxlength='5' name='codigo' value='".$exibe_ciclos["Hora-fim-geral"]."'><br>";
                echo "<b>Data inicial para Produtores ofertarem produtos:</b><br><input type='text' size='10'  maxlength='10' name='codigo' value='".$exibe_ciclos["Data-inicio-produtores"]."'><br>";
                echo "<b>Data final para Produtores ofertarem produtos:</b><br><input type='text' size='10'  maxlength='10' name='codigo' value='".$exibe_ciclos["Data-fim-produtores"]."'><br>";
                echo "<b>Data inicial para Consumidores realizarem pedido:</b><br><input type='text' size='10'  maxlength='10' name='codigo' value='".$exibe_ciclos["Data-inicio-consumidores"]."'><br>";
                echo "<b>Data final para Consumidores realizarem pedido:</b><br><input type='text' size='10'  maxlength='10' name='codigo' value='".$exibe_ciclos["Data-fim-consumidores"]."'><br>";
                echo "<b>Título para Ciclo aberto:</b><br><input type='text' size='40'  maxlength='200' name='codigo' value='".$exibe_ciclos["Titulo-ciclo-aberto"]."'><br>";
                echo "<b>Texto para Ciclo aberto:</b><br><input type='text' size='40'  maxlength='200' value='".$exibe_ciclos["Texto-complementar-título"]."'><br>";
                echo "<b>Texto com as Dicas para o Ciclo aberto:</b><br><input type='text' size='40'  maxlength='200' name='codigo' value='".$exibe_ciclos["Texto-dicas"]."'><br>";
                echo "<b>Texto para quando o Ciclo estiver fechado:</b><br><input type='text' size='40'  maxlength='200' name='codigo' value='".$exibe_ciclos["Texto-ciclo-fechado"]."'><br>";
                echo "<b>URL para a página de Produtores:</b><br><input type='text' size='40'  maxlength='200' name='codigo' value='".$exibe_ciclos["URL-produtores"]."'><br>";
                echo "<b>Texto para exibir após Produtor finalizar Ofertas:</b><br><input type='text' size='40'  maxlength='200' name='codigo' value='".$exibe_ciclos["Texto-confirma-ofertas"]."'><br>";
                echo "<b>Texto para exibir após Produtores finalizar Pedido:</b><br><input type='text' size='40'  maxlength='200' name='codigo' value='".$exibe_ciclos["Texto-confirma-pedido-produtores"]."'><br>";
                echo "<b>URL para a página de Consumidores:</b><br><input type='text' size='40'  maxlength='200' name='codigo' value='".$exibe_ciclos["URL-consumidores"]."'><br>";
                echo "<b>Texto para exibir após Consumidores finalizar Pedido:</b><br><input type='text' size='40'  maxlength='200' name='codigo' value='".$exibe_ciclos["Texto-confirma-pedido-consumidores"]."'><br>";
                echo "<b>URL para a página de Administradores:</b><br><input type='text' size='40'  maxlength='200' name='codigo' value='".$exibe_ciclos["URL-administradores"]."'><br>";
                echo "<b>Situação:</b><br><input type='radio' name='situacao' ".if($exibe_ciclos["Situacao"]==1){echo "checked";}."value='1'>Aberto - <input type='radio' name='situacao' ".if($exibe_ciclos["Situacao"]==0){echo "checked";}." value='0'>Fechado<br><br>";
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
