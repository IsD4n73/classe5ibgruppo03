<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dog's Star</title>

    <link href="https://cdn-icons-png.flaticon.com/512/194/194630.png" rel="icon">
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <h1 id="titolo">Canile Dog's Star - Cerca Cane</h1>

    <?php
        if(isset($_POST["cf"])){
            $cf = trim($_POST["cf"]);
        }else{
            $cf = "";
        }
        if(isset($_POST["nome"])){
            $nome = ucfirst(trim($_POST["nome"]));
        }else{
            $nome = "";
        }
        if(isset($_POST["razza"])){
            $razza = ucfirst(trim($_POST["razza"]));
        }else{
            $razza = "";
        }
        if(isset($_POST["id"])){
            $id = trim($_POST["id"]);
        }else{
            $id = "";
        }
            
        $sql = "SELECT * FROM cani WHERE cf_padrone = '".$cf."' OR nome_cane = '".$nome."' OR razza = '".$razza."' OR id_cane = '".$id."'";

        include "connect.php";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {

            echo '<table>
            <thead>
              <tr>
                <th scope="col">ID Cane</th>
                <th scope="col">Nome Cane</th>
                <th scope="col">Razza Cane</th>
                <th scope="col">CF Padrone</th>
              </tr>
            </thead>
            <tbody>';

            while($row = mysqli_fetch_assoc($result)) {
                echo '<tr>
                    <td data-label="ID Cane">'.$row["id_cane"].'</td>
                    <td data-label="Nome Cane">'.$row["nome_cane"].'</td>
                    <td data-label="Razza Cane">'.$row["razza"].'</td>
                    <td data-label="CF Padrone">'.$row["cf_padrone"].'</td>
                </tr>';

            }
            echo '</tbody></table>';
        }else {
            echo '<p id="descrizione">Non corrisponde nessun risultato ai criteri di ricerca da te inseriti...<p>';
        }

        mysqli_close($conn);
    ?>  

    <div style="text-align: center;">
        <button id="indietro" onclick="vai('./cerca.html')"> Torna Indietro </button>
    </div>

    <script>
        function vai(pagina){
            window.open(pagina, "_self");
        }
    </script>
</body>
</html>
