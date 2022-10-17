<?php
    include_once('conexao.php');

    if((isset($_POST['email'])) && (isset($_POST['senha']))){
        $email = $_POST['email'];
        $senha = md5($_POST['senha']);

        $sql = "SELECT * FROM teste WHERE email = '$email' && senha = '$senha'";
        $resu = mysqli_query($con, $sql);
        $resultado = mysqli_fetch_assoc($resu);

        if(empty($resultado)){
            header("Location: index.php");
        }else if(!empty($resultado)){
            header("Location: destino.php");
        }else{
            header("Location:index.php");
        }
    }
?>