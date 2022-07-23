<?php
    session_start(); 
    include_once("conexao.php");

    $email = $_POST['email'];
    $senha = md5($_POST['senha']);

     $result = mysqli_query($conn,"SELECT senha, nm_usuario, tipo_usuario FROM usuario
                                     WHERE email = '$email'");
            
    $resultado = mysqli_fetch_row($result);


    if($resultado != NULL){
        if($senha == $resultado[0]){
            echo "Acesso";
            setcookie("user", $email, time()+3600);
            $_SESSION['usuarioNome'] = $resultado[1];
            $_SESSION['usuarioTipo'] = $resultado[2];
            header('location: dashboard.php');
        }else{
            echo "Senha errada";
            header('location: pages/autenticacao/login.php');
        }
    }else{
        header('location:  pages/autenticacao/login.php');
    };

    //mysqli_close($conn);

   // header('location: form.php');
    
?>