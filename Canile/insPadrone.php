<?php
    $cf = ucfirst(trim($_POST["cf"]));
    $nome = ucfirst(trim($_POST["nome"]));
    $cognome = ucfirst(trim($_POST["cognome"]));

    $sql = "INSERT INTO padroni (codice_fiscale, nome_padrone, cognome_padrone) VALUES
    ('".$cf."', '".$nome."', '".$cognome."')";

    include "connect.php";
    try{
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

