<?php

    //CHAMA A PAGINA CONEXAO PARA CONECTAR O ENVIA_FORM COM O BANCO
    include_once("../../conexao.php"); 

    //CRIA VARIAVEIS PARA RECEBEREM OS DADOS DIGITADOS PELO USUARIO
    $titulo = $_POST['nm_livro'];
    $autor = $_POST['autor_id'];
    $editora = $_POST['editora_id'];
    $ano = $_POST['ano'];
    $sinopse = $_POST['sinopse'];
    $vl_aluguel = $_POST['preco'];
    $qtd = $_POST['quantidade'];
    $id = $_POST['id'];

    //UTILIZA-SE AS QUERIES PARA INSERIR DADOS NO BANCO VIA VARIAVEIS DO FORM
    $result = mysqli_query($conn, "UPDATE `livro` SET `nm_livro`='$titulo', `autor_id`='$autor', `editora_id`='$editora', `ano`='$ano', 
    `sinopse`='$sinopse', `preco`='$vl_aluguel', `quantidade`='$qtd'
    WHERE livro_id = $id");
    

    //ENCERRA A CONEXAO COM O BANCO
    mysqli_close($conn);

    //A PÁGINA É ATUALIZADA
    header('location: cad_livro.php');

?>