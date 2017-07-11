<?php include('cabecalho.php') ?>
                <h1>Formulario de  produto </h1>
                <form action="adiciona-produto.php">
                    <label> Nome: </label>
                    <input type="text" name="nome" /><br/>
                    <label> Preço: </label> 
                    <input type="number" name="preco" /><br/>

                    <input type="submit" value="Cadastrar" />
                </form>
<?php include('rodape.php') ?>