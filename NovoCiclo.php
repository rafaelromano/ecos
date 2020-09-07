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
            <p class='titulo'>NOVO CICLO</p>
            <?php
            $CODIGO = $_GET['codigo'];
            if($CODIGO<>"")
                {
                ?>
                <form method="post" action="UpdateCiclo.php">
                <?php
                }
            else
                {
                ?>
                <form method="post" action="InserirCiclo.php">
                <?php
                }
            if($CODIGO<>"")
            {
                include "conexao.php";
                
                $banco = mysqli_query($conn, "SELECT * FROM Ciclos WHERE Codigo='".$CODIGO."'"); 

                $total = mysqli_num_rows($banco); 

                while($exibe_ciclos = mysqli_fetch_array($banco)) { 
                    echo "<p class='texto'><b>Código:</b><input type='hidden' name='codigo' value='".$exibe_ciclos["Codigo"]."'>".$exibe_ciclos["Codigo"]."</p>";
                    echo "<p class='texto'><b>Data inicial do Ciclo:</b><br><input type='date' class='texto' size='10' maxlength='10' name='data-inicio-geral' value='".$exibe_ciclos["Data-inicio-geral"]."'></p>";
                    echo "<p class='texto'><b>Horário inicial do Ciclo:</b><br><input type='time' class='texto' size='5'  maxlength='5' name='hora-inicio-geral' value='".$exibe_ciclos["Hora-inicio-geral"]."'></p>";
                    echo "<p class='texto'><b>Data final	do Ciclo:</b><br><input type='date' class='texto' size='10'  maxlength='10' name='data-fim-geral' value='".$exibe_ciclos["Data-fim-geral"]."'></p>";
                    echo "<p class='texto'><b>Horário de encerramento do Ciclo:</b><br><input type='time' class='texto' size='5'  maxlength='5' name='hora-fim-geral' value='".$exibe_ciclos["Hora-fim-geral"]."'></p>";
                    echo "<p class='texto'><b>Data inicial para Produtores ofertarem produtos:</b><br><input type='date' class='texto' size='10'  maxlength='10' name='data-inicio-produtores' value='".$exibe_ciclos["Data-inicio-produtores"]."'></p>";
                    echo "<p class='texto'><b>Data final para Produtores ofertarem produtos:</b><br><input type='date' class='texto' size='10'  maxlength='10' name='data-fim-produtores' value='".$exibe_ciclos["Data-fim-produtores"]."'></p>";
                    echo "<p class='texto'><b>Data inicial para Consumidores realizarem pedido:</b><br><input type='date' class='texto' size='10'  maxlength='10' name='data-inicio-consumidores' value='".$exibe_ciclos["Data-inicio-consumidores"]."'></p>";
                    echo "<p class='texto'><b>Data final para Consumidores realizarem pedido:</b><br><input type='date' class='texto' size='10'  maxlength='10' name='data-fim-consumidores' value='".$exibe_ciclos["Data-fim-consumidores"]."'></p>";
                    echo "<p class='texto'><b>Título para Ciclo aberto:</b><br><input type='text' class='texto' size='40'  maxlength='200' name='titulo-ciclo-aberto' value='".$exibe_ciclos["Titulo-ciclo-aberto"]."'></p>";
                    echo "<p class='texto'><b>Texto para Ciclo aberto:</b><br><input type='text' class='texto' size='40'  maxlength='200' name='texto-complementar-título' value='".$exibe_ciclos["Texto-complementar-título"]."'></p>";
                    echo "<p class='texto'><b>Texto com as Dicas para o Ciclo aberto:</b><br><input type='text' class='texto' size='40'  maxlength='200' name='texto-dicas' value='".$exibe_ciclos["Texto-dicas"]."'></p>";
                    echo "<p class='texto'><b>Texto para quando o Ciclo estiver fechado:</b><br><input type='text' class='texto' size='40'  maxlength='200' name='texto-ciclo-fechado' value='".$exibe_ciclos["Texto-ciclo-fechado"]."'></p>";
                    echo "<p class='texto'><b>URL para a página de Produtores:</b><br><input type='text' class='texto' size='40'  maxlength='200' name='url-produtores' value='".$exibe_ciclos["URL-produtores"]."'></p>";
                    echo "<p class='texto'><b>Texto para exibir após Produtor finalizar Ofertas:</b><br><input type='text' class='texto' size='40'  maxlength='200' name='texto-confirma-ofertas' value='".$exibe_ciclos["Texto-confirma-ofertas"]."'></p>";
                    echo "<p class='texto'><b>Texto para exibir após Produtores finalizar Pedido:</b><br><input type='text' class='texto' size='40'  maxlength='200' name='texto-confirma-pedido-produtores' value='".$exibe_ciclos["Texto-confirma-pedido-produtores"]."'></p>";
                    echo "<p class='texto'><b>URL para a página de Consumidores:</b><br><input type='text' class='texto' size='40'  maxlength='200' name='url-consumidores' value='".$exibe_ciclos["URL-consumidores"]."'></p>";
                    echo "<p class='texto'><b>Texto para exibir após Consumidores finalizar Pedido:</b><br><input type='text' class='texto' size='40'  maxlength='200' name='texto-confirma-pedido-consumidores' value='".$exibe_ciclos["Texto-confirma-pedido-consumidores"]."'></p>";
                    echo "<p class='texto'><b>URL para a página de Administradores:</b><br><input type='text' class='texto' size='40' maxlength='200' name='url-administradores' value='".$exibe_ciclos["URL-administradores"]."'></p>";
                    if($exibe_ciclos["Situacao"] == 1)
                        {
                        $selecao1="checked";
                        }
                    else
                        {
                        $selecao2="checked";
                        }
                    
                    echo "<p class='texto'><b>Situação:</b><br><input type='radio' name='situacao' value='1' ".$selecao1.">Aberto - <input type='radio' name='situacao' value='0' ".$selecao2.">Fechado<br></p>";      
                    } 
            }
            else
            {
                echo "<p class='texto'><b>Data inicial do Ciclo:</b><br><input type='date' class='texto' size='10' maxlength='10' name='data-inicio-geral'></p>";
                echo "<p class='texto'><b>Horário inicial do Ciclo:</b><br><input type='time' class='texto' size='5'  maxlength='5' name='hora-inicio-geral'></p>";
                echo "<p class='texto'><b>Data final do Ciclo:</b><br><input type='date' class='texto' size='10'  maxlength='10' name='data-fim-geral'></p>";
                echo "<p class='texto'><b>Horário de encerramento do Ciclo:</b><br><input type='time' class='texto' size='5'  maxlength='5' name='hora-fim-geral'></p>";
                echo "<p class='texto'><b>Data inicial para Produtores ofertarem produtos:</b><br><input type='date' class='texto' size='10'  maxlength='10' name='data-inicio-produtores'></p>";
                echo "<p class='texto'><b>Data final para Produtores ofertarem produtos:</b><br><input type='date' class='texto' size='10'  maxlength='10' name='data-fim-produtores'></p>";
                echo "<p class='texto'><b>Data inicial para Consumidores realizarem pedido:</b><br><input type='date' class='texto' size='10'  maxlength='10' name='data-inicio-consumidores'></p>";
                echo "<p class='texto'><b>Data final para Consumidores realizarem pedido:</b><br><input type='date' class='texto' size='10'  maxlength='10' name='data-fim-consumidores'><br>";
                echo "<p class='texto'><b>Título para Ciclo aberto:</b><br><input type='text' class='texto' size='40'  maxlength='200' name='titulo-ciclo-aberto'></p>";
                echo "<p class='texto'><b>Texto para Ciclo aberto:</b><br><input type='text' class='texto' size='40'  maxlength='200' name='texto-complementar-título'></p>";
                echo "<p class='texto'><b>Texto com as Dicas para o Ciclo aberto:</b><br><input type='text' class='texto' size='40'  maxlength='200' name='texto-dicas'></p>";
                echo "<p class='texto'><b>Texto para quando o Ciclo estiver fechado:</b><br><input type='text' class='texto' size='40'  maxlength='200' name='texto-ciclo-fechado'></p>";
                echo "<p class='texto'><b>URL para a página de Produtores:</b><br><input type='text' class='texto' size='40'  maxlength='200' name='url-produtores'></p>";
                echo "<p class='texto'><b>Texto para exibir após Produtor finalizar Ofertas:</b><br><input type='text' class='texto' size='40'  maxlength='200' name='texto-confirma-ofertas'></p>";
                echo "<p class='texto'><b>Texto para exibir após Produtores finalizar Pedido:</b><br><input type='text' class='texto' size='40'  maxlength='200' name='texto-confirma-pedido-produtores'></p>";
                echo "<p class='texto'><b>URL para a página de Consumidores:</b><br><input type='text' class='texto' size='40'  maxlength='200' name='url-consumidores'></p>";
                echo "<p class='texto'><b>Texto para exibir após Consumidores finalizar Pedido:</b><br><input type='text' class='texto' size='40'  maxlength='200' name='texto-confirma-pedido-consumidores'></p>";
                echo "<p class='texto'><b>URL para a página de Administradores:</b><br><input type='text' class='texto' 0size='40'  maxlength='200' name='url-administradores'></p>";
                echo "<p class='texto'><b>Situação:</b><br><input type='radio' name='situacao' value='1'>Aberto - <input type='radio' name='situacao' value='0'>Fechado<br></p>"; 
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
                    echo "<input type='submit' class='button3' value='ATUALIZAR'></form>";
                }
                else
                {
                    echo "<input type='submit' class='button3' value='CADASTRAR'></form>";
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
