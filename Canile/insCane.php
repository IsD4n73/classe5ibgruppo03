<?php
    $cf = ucfirst(trim($_POST["cf"]));
    $nome = ucfirst(trim($_POST["nome"]));
    $razza = ucfirst(trim($_POST["razza"]));

    $sql = "INSERT INTO cani (cf_padrone, nome_cane, razza) VALUES
    ('".$cf."', '".$nome."', '".$razza."')";

    include "connect.php";
    try {
        if(mysqli_query($conn, $sql)){
            mysqli_close($conn);
            echo '<script>window.open("./success.html", "_self")</script>';
        }else{
            mysqli_close($conn);
            echo '<script>window.open("./errore.html", "_self")</script>';
        }
    }catch (Exception $e) {
        mysqli_close($conn);
        echo '<script>window.open("./errore.html", "_self")</script>';
    }
?>
