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
            <p class='titulo'>NOVO CICLO</p>
            <?php
            $CODIGO = $_GET['codigo'];
            if($CODIGO<>"")
            {
                ?>
                <form method="post" action="UpdateCiclo.php">
                <?php
                include "conexao.php";
                
                $banco = mysqli_query($conn, "SELECT * FROM Ciclos WHERE Codigo='".$CODIGO."'"); 

                $total = mysqli_num_rows($banco); 

                while($exibe_ciclos = mysqli_fetch_array($banco)) { 
                    echo "<p class='texto'><b>Código:</b><input type='hidden' name='codigo' value='".$exibe_ciclos["Codigo"]."'>".$exibe_ciclos["Codigo"]."</p><br>";
                    echo "<p class='texto'><b>Data inicial do Ciclo:</b><br><input type='text' size='10' maxlength='10' name='data-inicio-geral' value='".$exibe_ciclos["Data-inicio-geral"]."'></p><br>";
                    echo "<p class='texto'><b>Horário inicial do Ciclo:</b><br><input type='text' size='5'  maxlength='5' name='hora-inicio-geral' value='".$exibe_ciclos["Hora-inicio-geral"]."'></p><br>";
                    echo "<p class='texto'><b>Data final	do Ciclo:</b><br><input type='text' size='10'  maxlength='10' name='data-fim-geral' value='".$exibe_ciclos["Data-fim-geral"]."'></p><br>";
                    echo "<p class='texto'><b>Horário de encerramento do Ciclo:</b><br><input type='text' size='5'  maxlength='5' name='hora-fim-geral' value='".$exibe_ciclos["Hora-fim-geral"]."'></p><br>";
                    echo "<p class='texto'><b>Data inicial para Produtores ofertarem produtos:</b><br><input type='text' size='10'  maxlength='10' name='data-inicio-produtores' value='".$exibe_ciclos["Data-inicio-produtores"]."'></p><br>";
                    echo "<p class='texto'><b>Data final para Produtores ofertarem produtos:</b><br><input type='text' size='10'  maxlength='10' name='data-fim-produtores' value='".$exibe_ciclos["Data-fim-produtores"]."'></p><br>";
                    echo "<p class='texto'><b>Data inicial para Consumidores realizarem pedido:</b><br><input type='text' size='10'  maxlength='10' name='data-inicio-consumidores' value='".$exibe_ciclos["Data-inicio-consumidores"]."'></p><br>";
                    echo "<p class='texto'><b>Data final para Consumidores realizarem pedido:</b><br><input type='text' size='10'  maxlength='10' name='data-fim-consumidores' value='".$exibe_ciclos["Data-fim-consumidores"]."'></p><br>";
                    echo "<p class='texto'><b>Título para Ciclo aberto:</b><br><input type='text' size='40'  maxlength='200' name='titulo-ciclo-aberto' value='".$exibe_ciclos["Titulo-ciclo-aberto"]."'></p><br>";
                    echo "<p class='texto'><b>Texto para Ciclo aberto:</b><br><input type='text' size='40'  maxlength='200' name='texto-complementar-título' value='".$exibe_ciclos["Texto-complementar-título"]."'></p><br>";
                    echo "<p class='texto'><b>Texto com as Dicas para o Ciclo aberto:</b><br><input type='text' size='40'  maxlength='200' name='texto-dicas' value='".$exibe_ciclos["Texto-dicas"]."'></p><br>";
                    echo "<p class='texto'><b>Texto para quando o Ciclo estiver fechado:</b><br><input type='text' size='40'  maxlength='200' name='texto-ciclo-fechado' value='".$exibe_ciclos["Texto-ciclo-fechado"]."'></p><br>";
                    echo "<p class='texto'><b>URL para a página de Produtores:</b><br><input type='text' size='40'  maxlength='200' name='url-produtores' value='".$exibe_ciclos["URL-produtores"]."'></p><br>";
                    echo "<p class='texto'><b>Texto para exibir após Produtor finalizar Ofertas:</b><br><input type='text' size='40'  maxlength='200' name='texto-confirma-ofertas' value='".$exibe_ciclos["Texto-confirma-ofertas"]."'></p><br>";
                    echo "<p class='texto'><b>Texto para exibir após Produtores finalizar Pedido:</b><br><input type='text' size='40'  maxlength='200' name='texto-confirma-pedido-produtores' value='".$exibe_ciclos["Texto-confirma-pedido-produtores"]."'></p><br>";
                    echo "<p class='texto'><b>URL para a página de Consumidores:</b><br><input type='text' size='40'  maxlength='200' name='url-consumidores' value='".$exibe_ciclos["URL-consumidores"]."'></p><br>";
                    echo "<p class='texto'><b>Texto para exibir após Consumidores finalizar Pedido:</b><br><input type='text' size='40'  maxlength='200' name='texto-confirma-pedido-consumidores' value='".$exibe_ciclos["Texto-confirma-pedido-consumidores"]."'></p><br>";
                    echo "<p class='texto'><b>URL para a página de Administradores:</b><br><input type='text' size='40'  maxlength='200' name='url-administradores' value='".$exibe_ciclos["URL-administradores"]."'></p><br>";
                    if($exibe_ciclos["Situacao"] == 1)
                        {
                        $selecao1="checked";
                        }
                    else
                        {
                        $selecao2="checked";
                        }
                    
                    echo "<b>Situação:</b><br><input type='radio' name='situacao' value='1' ".$selecao1.">Aberto - <input type='radio' name='situacao' value='0' ".$selecao2.">Fechado<br><br>";      
                    } 
            }
            else
            {
                ?>
                <form method="post" action="InserirCiclo.php">
                <?php
                echo "<b>Data inicial do Ciclo:</b><br><input type='text' size='10' maxlength='10' name='data-inicio-geral'><br>";
                echo "<b>Horário inicial do Ciclo:</b><br><input type='text' size='5'  maxlength='5' name='hora-inicio-geral'><br>";
                echo "<b>Data final	do Ciclo:</b><br><input type='text' size='10'  maxlength='10' name='data-fim-geral'><br>";
                echo "<b>Horário de encerramento do Ciclo:</b><br><input type='text' size='5'  maxlength='5' name='hora-fim-geral'><br>";
                echo "<b>Data inicial para Produtores ofertarem produtos:</b><br><input type='text' size='10'  maxlength='10' name='data-inicio-produtores'><br>";
                echo "<b>Data final para Produtores ofertarem produtos:</b><br><input type='text' size='10'  maxlength='10' name='data-fim-produtores'><br>";
                echo "<b>Data inicial para Consumidores realizarem pedido:</b><br><input type='text' size='10'  maxlength='10' name='data-inicio-consumidores'><br>";
                echo "<b>Data final para Consumidores realizarem pedido:</b><br><input type='text' size='10'  maxlength='10' name='data-fim-consumidores'><br>";
                echo "<b>Título para Ciclo aberto:</b><br><input type='text' size='40'  maxlength='200' name='titulo-ciclo-aberto'><br>";
                echo "<b>Texto para Ciclo aberto:</b><br><input type='text' size='40'  maxlength='200' name='texto-complementar-título'><br>";
                echo "<b>Texto com as Dicas para o Ciclo aberto:</b><br><input type='text' size='40'  maxlength='200' name='texto-dicas'><br>";
                echo "<b>Texto para quando o Ciclo estiver fechado:</b><br><input type='text' size='40'  maxlength='200' name='texto-ciclo-fechado'><br>";
                echo "<b>URL para a página de Produtores:</b><br><input type='text' size='40'  maxlength='200' name='url-produtores'><br>";
                echo "<b>Texto para exibir após Produtor finalizar Ofertas:</b><br><input type='text' size='40'  maxlength='200' name='texto-confirma-ofertas'><br>";
                echo "<b>Texto para exibir após Produtores finalizar Pedido:</b><br><input type='text' size='40'  maxlength='200' name='texto-confirma-pedido-produtores'><br>";
                echo "<b>URL para a página de Consumidores:</b><br><input type='text' size='40'  maxlength='200' name='url-consumidores'><br>";
                echo "<b>Texto para exibir após Consumidores finalizar Pedido:</b><br><input type='text' size='40'  maxlength='200' name='texto-confirma-pedido-consumidores'><br>";
                echo "<b>URL para a página de Administradores:</b><br><input type='text' size='40'  maxlength='200' name='url-administradores'><br>";
                echo "<b>Situação:</b><br><input type='radio' name='situacao' value='1'>Aberto - <input type='radio' name='situacao' value='0'>Fechado<br><br>"; 
            }
            ?>
        </td>
    </tr>
    <tr>
            <td>
                <br>
                <?php
                if($CODIGO<>"")
                {
                    echo "<input type='submit' class='button3' value='CADASTRAR'></form>";
                }
                else
                {
                    echo "<input type='submit' class='button3' value='ATUALIZAR'></form>";
                }
                echo "&nbsp;&nbsp;&nbsp;<a href='index.php'><button class='button3'>CANCELAR</button></a>";
                
                mysqli_close($conn);
                ?>
            </td>
    </tr>
</table>

</center>
</body>
</html>
