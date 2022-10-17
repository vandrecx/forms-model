<?php
    include_once('conexao.php');

    if((isset($_POST['emaill'])) && (isset($_POST['senhaa']))){
        $email = $_POST['emaill'];
        $senha = $_POST['senhaa'];
        $senhacripto = md5($senha);

        $cad = "INSERT INTO teste(email,senha) VALUES ('$email','$senhacripto')";
        $resultado_usuario = mysqli_query($con, $cad);

        header("Location:index.php");
    }else{
        echo "Digite seus dados!";
    }
?>