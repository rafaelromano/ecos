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
            <p class='titulo'>NOVO PRODUTO</p>
            <?php
            include "conexao.php";
            $CODIGO = $_GET['codigo'];
            if($CODIGO<>"")
                {
                ?>
                <form method="post" action="UpdateProduto.php" name="formulario">
                <?php
                }
            else
                {
                ?>
                <form method="post" action="InserirProdutp.php" name="formulario">
                <?php
                }
            if($CODIGO<>"")
            {
                              
                $banco = mysqli_query($conn, "SELECT * FROM Produtos WHERE Codigo='".$CODIGO."'"); 
                $total = mysqli_num_rows($banco); 
                while($exibe_produtos = mysqli_fetch_array($banco)) { 
                    echo "<p class='texto'><b>Código:</b><input type='hidden' name='codigo' value='".$exibe_produtos["Codigo"]."'>".$exibe_produtos["Codigo"]."</p>";

                    $banco1 = mysqli_query($conn, "SELECT * FROM Produtores WHERE Codigo='$exibe_produtos["PT-Codigo"]'"); 
                    $ptcodigo= mysqli_result($banco1);

                    $banco1 = mysqli_query($conn, "SELECT * FROM Produtores"); 
                    echo "<p class='texto'><b>Código Produtor:</b><br><select name='pt-codigo'><option value='0'>Selecione...</option>";
                    while($exibe_produtores = mysqli_fetch_array($banco1)) {
                        if($exibe_produtos["PT-Codigo"] == $ptcodigo)
                            {
                            $selecao1="checked";
                            }
                        echo "<option value='".$exibe_produtores["Codigo"]."'>".$exibe_produtores["Codigo"]." - ".$exibe_produtores["Nome"]."</option></p>";
                    }
                    echo "</select>";

                    $banco2 = mysqli_query($conn, "SELECT * FROM `Categoria-Produtos` WHERE Codigo='$exibe_produtos["CP-Codigo"]'"); 
                    $cpcodigo= mysqli_result($banco2);

                    $banco2 = mysqli_query($conn, "SELECT * FROM `Categoria-Produtos`"); 
                    
                    echo "<p class='texto'><b>Categoria:</b><br><select name='cp-codigo'><option value='0'>Selecione...</option>";
                    while($exibe_categoria = mysqli_fetch_array($banco2)) { 
                        if($exibe_produtos["CP-Codigo"] == $ptcodigo)
                            {
                            $selecao1="checked";
                            }
                        echo "<option value='".$exibe_categoria["Codigo"]."'>".$exibe_categoria["Codigo"]." - ".$exibe_categoria["Descricao"]."</option></p>";
                    }

                    echo "<p class='texto'><b>Descição:</b><br><input type='date' class='texto' size='20'  maxlength='200' name='descricao' value='".$exibe_produtos["Descricao"]."'></p>";
                    echo "<p class='texto'><b>Quantidade Disponível:</b><br><input type='text' class='texto' size='5'  maxlength='10' name='qtd-disponivel' value='".$exibe_produtos["Qtd-Disponivel"]."'></p>";
                    echo "<p class='texto'><b>Preço: R$</b><br><input type='text' class='texto' size='5'  maxlength='10' name='preco' value='".$exibe_produtos["Custo"]."'></p>";
                    echo "<p class='texto'><b>:</b><br><input type='time' class='texto' size='5'  maxlength='10' name='preco' value='".$exibe_produtos["Preco"]."'></p>";
                    if($exibe_produtos["Disponibilidade"] == 1)
                        {
                        $selecao1="checked";
                        }
                    else
                        {
                        $selecao2="checked";
                        }
                    
                    echo "<p class='texto'><b>Disponibilidade:</b><br><input type='radio' name='disponibilidade' value='1' ".$selecao1.">Aberto - <input type='radio' name='disponibilidade' value='0' ".$selecao2.">Fechado<br></p>";      
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
                echo "<p class='texto'><b>Descição:</b><br><input type='text' class='texto' size='20'  maxlength='200' name='descricao'></p>";
                echo "<p class='texto'><b>Quantidade Disponível:</b><br><input type='text' class='texto' size='5'  maxlength='10' name='qtd-disponivel'></p>";
                echo "<p class='texto'><b>Custo: R$</b><br><input type='text' class='texto' size='5'  maxlength='10' name='custo'></p>";
                echo "<p class='texto'><b>Preço: R$</b><br><input type='text' class='texto' size='5'  maxlength='10' name='preco'></p>";             
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
                echo "&nbsp;&nbsp;&nbsp;<a href='produtos.php'><button class='button3'>CANCELAR</button></a>";
                
                mysqli_close($conn);
                ?>
            </td>
    </tr>
</table>

</center>
</body>
</html>
