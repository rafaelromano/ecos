<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Produtos</title>
        <script>
            function validar()
                {
                    //ar datainiciogeral = document.getElementById("data-inicio-geral");
                    var datainiciogeral = formulario.data-inicio-geral.value;
                    var horainiciogeral = document.getElementById("hora-inicio-geral");
                    var datafimgeral = document.getElementById("data-fim-geral");
                    var horafimgeral = document.getElementById("hora-fim-geral");
                    var datainicioprodutores = document.getElementById("data-inicio-produtores");
                    var datafimprodutores = document.getElementById("data-fim-produtores");
                    var datainicioconsumidores = document.getElementById("data-inicio-consumidores");
                    var datafimconsumidores = document.getElementById("data-fim-consumidores");
                    var titulocicloaberto = document.getElementById("titulo-ciclo-aberto");
                    var textocomplementartítulo = document.getElementById("texto-complementar-título");
                    var textodicas = document.getElementById("texto-dicas");
                    var textociclofechado = document.getElementById("texto-ciclo-fechado");
                    var urlprodutores = document.getElementById("url-produtores");
                    var textoconfirmaofertas= document.getElementById("texto-confirma-ofertas");
                    var textoconfirmapedidoprodutores = document.getElementById("texto-confirma-pedido-produtores");
                    var urlconsumidores = document.getElementById("url-consumidores");
                    var textoconfirmapedidoconsumidores = document.getElementById("texto-confirma-pedido-consumidores");
                    var urladministradores = document.getElementById("url-administradores");
                    var situacao = document.getElementById("situacao");

                    if(datainiciogeral == " " || datainiciogeral == NULL)
                        {
                            alert("Data Inicial do Clico não definida!");
                            formulario.data-inicio-geral.value.focus();
                            return false                           // se inválida :(
                        }
                    
                }
        </script>
</head>

<body>
<center>
<p class='titulo1'>Feira Orgânico Solidário </p>
<table class='table'>
    <tr>
        <td class='td01'>
            <p class='titulo'>NOVO PEDIDO CONSUMIDOR</p>
            <?php
            include "conexao.php";
            $CODIGO = $_GET['codigo'];
            if($CODIGO<>"")
                {
                ?>
                <form method="post" action="UpdatePedConsumidorH.php" name="formulario">
                <?php
                }
            else
                {
                ?>
                <form method="post" action="InserirPedConsumidorH.php" name="formulario">
                <?php
                }
            if($CODIGO<>"")
            {
                              
                $banco = mysqli_query($conn, "SELECT * FROM Pedidos-Consumidores-Header WHERE Codigo='".$CODIGO."'"); 
                $total = mysqli_num_rows($banco); 

                while($exibe_pedidos = mysqli_fetch_array($banco)) { 
                    echo "<p class='texto'><b>Código:</b><input type='hidden' name='codigo' value='".$exibe_pedidos["Codigo"]."'>".$exibe_pedidos["Codigo"]."</p>";
                    
                    $codigo = $exibe_pedidos["CI-Codigo"];
                    $banco3 = mysqli_query($conn, "SELECT * FROM `Ciclos` WHERE Codigo='$codigo'"); 
                    while($exibe_ciclo = mysqli_fetch_array($banco3)) { 
                        echo "<p class='texto2'><b>- Ciclo: </b>".$exibe_ciclo["Titulo-ciclo-aberto"]."</p>";
                    }      
                    $codigo = $exibe_pedidos["CO-Codigo"];
                    $banco2 = mysqli_query($conn, "SELECT * FROM `Consumidores` WHERE Codigo='$codigo'"); 
                    while($exibe_consumidor = mysqli_fetch_array($banco2)) { 
                        echo "<p class='texto2'><b>- Consumidor: </b>".$exibe_consumidor["Nome"]."</p>";
                    }      
                    
                    echo "<p class='texto2'><b> - OBS Consumidor:<br></b> ".$exibe_pedidos["OBS-Consumidor"]."</p>";
                    if($exibe_pedidos["Forma-Pagamento"] == 1)
                            {
                            $selecao1="selected";
                            }
                        elseif($exibe_pedidos["Forma-Pagamento"] == 2)
                            {
                            $selecao2="selected";
                            }
                        else
                            {
                            $selecao3="selected";
                            }
                    echo "<p class='texto'><b>Forma de Pagamento:</b><br><select name='pt-codigo'><option value='0'>Selecione...</option>";
                    echo "<select name='pt-codigo' ".$selecao1."><option value='1'>1 - Cartão de Débito</option>";
                    echo "<select name='pt-codigo' ".$selecao2."><option value='2'>2 - Cartão de Crédito</option>";
                    echo "<select name='pt-codigo' ".$selecao3."><option value='3'>3 - Uber</option>";        
                    if($exibe_pedidos["Tipo-Entrega"] == 1)
                            {
                            $selecao4="selected";
                            }
                        elseif($exibe_pedidos["Tipo-Entrega"] == 2)
                            {
                            $selecao5="selected";
                            }
                        else
                            {
                            $selecao6="selected";
                            }
                    echo "<p class='texto'><b>Tipo de Entrega:</b><br><select name='pt-codigo'><option value='0'>Selecione...</option>";
                    echo "<select name='pt-codigo' ".$selecao4."><option value='1'>1 - Consumidor retira mercadoria</option>";
                    echo "<select name='pt-codigo' ".$selecao5."><option value='2'>2 - Produtor envia mercadoria</option>";
                    echo "<select name='pt-codigo' ".$selecao6."><option value='3'>3 - Dinheiro</option>";        
                    if($exibe_pedidos["Situacao"] == 1)
                        {
                        $selecao7="checked";
                        }
                    else
                        {
                        $selecao8="checked";
                        }
                    echo "<p class='texto'><b>Situação:</b><br><input type='radio' name='situacao' value='1' ".$selecao7.">Ativo - <input type='radio' name='situacao' value='0' ".$selecao8.">Inativo<br></p>";      
                    echo "<p class='texto2'><b> - Descrição de Pendência:<br></b> ".$exibe_pedidos["Descricao-Pendencia"]."</p>";
                    
                    } 
            }
            else
            { 
                $banco1 = mysqli_query($conn, "SELECT * FROM Produtores"); 
                
                echo "<p class='texto'><b>Código Produtor:</b><br><select name='pt-codigo'><option value='0'>Selecione...</option>";
                while($exibe_produtores = mysqli_fetch_array($banco1)) { 
                    echo "<option value='".$exibe_produtores["Codigo"]."'>".$exibe_produtores["Codigo"]." - ".$exibe_produtores["Nome"]."</option></p>";
                }
                echo "</select>";

                $banco2 = mysqli_query($conn, "SELECT * FROM `Categoria-Produtos`"); 
                
                echo "<p class='texto'><b>Categoria:</b><br><select name='cp-codigo'><option value='0'>Selecione...</option>";
                while($exibe_categoria = mysqli_fetch_array($banco2)) { 
                    echo "<option value='".$exibe_categoria["Codigo"]."'>".$exibe_categoria["Codigo"]." - ".$exibe_categoria["Descricao"]."</option></p>";
                }
                echo "</select>";
                echo "<p class='texto'><b>Descrição:</b><br><input type='text' class='texto' size='20'  maxlength='200' name='descricao'></p>";
                echo "<p class='texto'><b>Quantidade Disponível:</b><br><input type='text' class='texto' size='5'  maxlength='5' name='qtd-disponivel'></p>";
                echo "<p class='texto'><b>Custo: R$</b><br><input type='text' class='texto' size='5'  maxlength='10' name='custo'></p>*** Usar . para para centavos";
                echo "<p class='texto'><b>Preço: R$</b><br><input type='text' class='texto' size='5'  maxlength='10' name='preco'></p>*** Usar . para para centavos";             
                echo "<p class='texto'><b>Disponibilidade:</b><br><input type='radio' name='disponibilidade' value='1'>SIM - <input type='radio' name='disponibilidade' value='0'>NÃO<br></p>";      
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
                    echo "<input type='submit' class='button3' value='ATUALIZAR' onclick='return validar()'></form>";
                }
                else
                {
                    echo "<input type='submit' class='button3' value='CADASTRAR' onclick='return validar()'></form>";
                }
                echo "&nbsp;&nbsp;&nbsp;<a href='pedidosconsumidores.php'><button class='button3'>CANCELAR</button></a>";
                
                mysqli_close($conn);
                ?>
            </td>
    </tr>
</table>

</center>
</body>
</html>
