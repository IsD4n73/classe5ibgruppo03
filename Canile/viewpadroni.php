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
    <h1 id="titolo">Canile Dog's Star - Visualizza Padroni</h1>

<?php
  include "connect.php";

  $str = "select * from padroni" ;
  $result = mysqli_query($conn,$str);


  if(!$result)
  {
    exit();
    echo '<p id="descrizione">Abbiamo avuto problemi a conneterci al database, riprova...<p>';
  }

  echo '<table>
          <thead>
            <tr>
              <th scope="col">Codice Fiscale</th>
              <th scope="col">Nome Padrone</th>
              <th scope="col">Cognome Padrone</th>
            </tr>
          </thead>
        <tbody>';

  while($row = mysqli_fetch_assoc($result)) {
    echo '<tr>
            <td data-label="Codice Fiscale">'.$row["codice_fiscale"].'</td>
            <td data-label="Nome Padrone">'.$row["nome_padrone"].'</td>
            <td data-label="Cognome Padrone">'.$row["cognome_padrone"].'</td>
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