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
                echo $exibe_ciclos["Codigo"];
                echo "<b>Ciclo:</b><input type='text' size='40' name='codigo' value='".$exibe_ciclos["Codigo"].">";

                //echo "</b>" . $exibe_ciclos["Titulo-ciclo-aberto"]."</a>";
                //echo "<b> - Data Inicial:</b> ".$exibe_ciclos["Data-inicio-geral"];
                //echo "<b> - Data Final: </b>".$exibe_ciclos["Data-fim-geral"]."<br><br>";
               
            } 
            ?>
 <!--            Data inicial do Ciclo										(atualizar Data-início-geral)

Horário inicial do Ciclo									(atualizar Hora-início-geral

Data final	do Ciclo										(atualizar Data-fim-geral)

Horário de encerramento do Ciclo						(atualizar Hora-fim-geral)

Data inicial para Produtores ofertarem produtos		(atualizar Data-início-produtores)

Data final para Produtores ofertarem produtos		(atualizar Data-fim-produtores)

Data inicial para Consumidores realizarem pedido	(atualizar Data-início-consumidores)

Data final para Consumidores realizarem pedido		(atualizar Data-fim-consumidores)

URL do Banner do Site									(atualizar URL-banner-site)

Título para o período em que o Ciclo estiver aberto	(atualizar Título-ciclo-aberto)

Texto para o período em que o Ciclo estiver aberto	(atualizar Texto-complementar-título)

Texto com as Dicas do OS para o Ciclo aberto			(atualizar Texto-dicas)

Texto para exibir quando o Ciclo estiver fechado		(atualizar Texto-ciclo-fechador)

URL para a página de Produtores 						(atualizar URL-produtores - iniciar com “https://os.eco.br/produtores”)

Texto para exibir após Produtor finalizar Ofertas		(atualizar Texto-confirma-ofertas)

URL para a página de Consumidores 					(atualizar URL-consumidores - iniciar com “https://os.eco.br/consumidores”)

Texto para exibir após Consumidores finalizar Pedido	(atualizar Texto-confirma-pedido-consumidores)

URL para a página de Administradores					(atualizar URL-administradores - iniciar com “https://os.eco.br/admin”)

Situação do Ciclo											(atualizar Situação) -->
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
