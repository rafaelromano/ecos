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
            <p class='titulo'>PRODUTOS</p>
            <a href="NovoProduto.php" class='subtitulo'>Novo Produto</a>
            <br>
            <br>
            <?php
            include "conexao.php";
            $pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1; 

            $banco = mysqli_query($conn, "SELECT * FROM Produtos WHERE Disponibilidade='1'"); 

            $total = mysqli_num_rows($banco); 

            $registros = 20;

            $numPaginas = ceil($total/$registros);

            $inicio = ($registros*$pagina)-$registros; 
            //echo $inicio;
            //echo $registros;
            $banco = mysqli_query($conn, "SELECT * FROM Produtos WHERE Disponibilidade='1' ORDER BY 'Codigo' ASC LIMIT $inicio,$registros"); 
            $total = mysqli_num_rows($banco); 

            while($exibe_produtos = mysqli_fetch_array($banco)) { 
                echo "<p class='texto'><b>Código Produto:"; 
                ?>
                <a href="NovoProduto.php?codigo=<?php echo $exibe_produtos["Codigo"]; ?>">
                <?php
                echo "</b>" . $exibe_produtos["Codigo"]."</a></p>";
                echo "<p class='texto2'><b> Código Produtor:</b> ".$exibe_produtos["PT-Codigo"]."</p>";
                echo "<p class='texto2'><b> Código Categoria: </b>".$exibe_produtos["CP-Codigo"]."</p>";
                echo "<p class='texto2'><b> Descição:</b> ".$exibe_produtos["Descicrao"]."</p>";
                echo "<p class='texto2'><b> Quantidade Disponivel: </b>".$exibe_produtos["Qtd-Disponivel"]."</p>";
                echo "<p class='texto2'><b> Custo: R$</b>".$exibe_produtos["Custo"]."</p>";
                echo "<p class='texto2'><b> Preço: R$</b>".$exibe_produtos["Preco"]."</p>";
                if($exibe_produtos["Disponibilidade"] == 1)
                        {
                        $selecao="SIM";
                        }
                    else
                        {
                        $selecao="NÃO";
                        }
                    
                    echo "<p class='texto'><b>Disponibilidade:</b>".$selecao."</p>";      
            } 
            ?>
            <br>
        </td>
    </tr>
    <tr>
            <td>
                <br>
                <?php
                if($pagina > 1) {
                    echo "<a href='produtos.php?pagina=".($pagina - 1)."'><button class='button3'>Produtos Anteriores</button></a>&nbsp;&nbsp;";
                }
    
                for($i = 1; $i < $numPaginas; $i++) {
                    $ativo = ($i == $pagina) ? 'numativo' : '';
                    echo "<a href='produtos.php?pagina=".$i."' class='numero ".$ativo."'><input type='Button' value='".$i."' class='button2'></a>";
                }
    
                if($pagina < $numPaginas) {
                    echo "&nbsp;&nbsp;<a href='produtos.php?pagina=".($pagina + 1)."'><button class='button3'>Exibir Próximos Produtos</button></a>";
                }
                mysqli_close($conn);
                ?>
            </td>
    </tr>
</table>

</center>
</body>
</html>
