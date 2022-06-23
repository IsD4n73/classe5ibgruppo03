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
    <h1 id="titolo">Canile Dog's Star - Visualizza Cani</h1>

<?php
  include "connect.php";

  $str = "select * from cani" ;
  $result = mysqli_query($conn,$str);


  if(!$result)
  {
    exit();
    echo '<p id="descrizione">Abbiamo avuto problemi a conneterci al database, riprova...<p>';
  }

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

  mysqli_close($conn);
?>
<div style="text-align: center;">
        <button id="indietro" onclick="vai('./visualizza.html')"> Torna Indietro </button>
    </div>

    <script>
        function vai(pagina){
            window.open(pagina, "_self");
        }
    </script>
</body>
</html>