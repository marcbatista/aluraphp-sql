<?php include('cabecalho.php') ?>
                <?php 
                $nome  = $_GET['nome'];
                $preco = $_GET['preco'];

                $conexao = mysqli_connect('localhost','root','root','loja');


                $query = "insert into produtos (nome,preco) values ('{$nome}', {$preco})";

               if(mysqli_query($conexao, $query)){
                ?>
                  <p class="alert-success">  Produto <?php echo $nome,$preco ?> adicionado com sucesso!</p>

                 <?php   }else{ ?>
                   <p class="alert-danger">  Produto <?php echo $nome ?> não adicionado com sucesso!</p>
                <?php      } 

                mysqli_close($conexao);
                ?>
            
  <?php include('rodape.php') ?>