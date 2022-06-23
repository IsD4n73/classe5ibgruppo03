<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>ISS PITAGORA | 5itib</title>
  
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css'>
  <link rel="stylesheet" href="./css/style.css">
  <link rel="icon" href="asset/logo.png">
</head>
<body>

<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400&family=Montserrat&display=swap" rel="stylesheet">


<!-- NAVBAR -->
<nav id="navbar">

  <ul>

    <li><a class="section-link" href="#welcome-section"><i class="fas fa-chevron-right"></i>Inizio</a></li>

    <li><a class="section-link" href="#projects"><i class="fas fa-chevron-right"></i>Progetti</a></li>

    <li><a class="section-link" href="#more-pages"><i class="fas fa-chevron-right"></i>Nostre Pagine</a></li>

  </ul>



</nav>

<!-- WELCOME -->
<section id="welcome-section">

  <h1>Davidde Dante <br>&<br>Ferone Carmine<br><br> Pitagora - 5IB <br><br>
  <b style="color: var(--color-5)">/</b>Developers<b style="color: var(--color-5)">/</b></h1>

  <a id="link-to-contact" href="#projects">Vedi i progetti</a>

  <a id="link-to-projects" href="#projects"><i class="fas fa-chevron-down"></i></a>

</section>

<!-- PROJECTS -->
<section id="projects">


  <h2><b>I Nostri Progetti:</b></h2>



    <label for="searchbar">
      <span class="fa fa-2x fa-search" style="color: var(--color-5);"></span>
    </label>
    <input onkeyup="searchProject()" type="search" name="search" id="searchbar" placeholder="Cerca Progetto">


  <div id="projects-gallery">

    <!-- <div class="project-tile">
      <a href="#" target="_blank">
        <img class="webpage-img" src="https://i.postimg.cc/fT3CVj6P/page4.png" alt="webpage screen">
      </a>
      <p class="project-caption">Testo progetto</p>
    </div> -->

  <?php
    $servername = "127.0.0.1";
    $username = "classe5ibgruppo03";
    $password = "";
    $dbname = "my_classe5ibgruppo03";

    // Crea connessione
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Controllo cnnessione
    if ($conn->connect_error) {
      echo '<p style="color: red">Non è stato possibile connetteersi al database...</p>';
      die("Connection failed: " . $conn->connect_error);
      $conn->close();
    }
    $sql = "SELECT * FROM progetti";
    $result = $conn->query($sql);


    while($row = $result->fetch_assoc()) {
      if($row["foto_prog"] == 1){
        echo '<div class="project-tile"> 
          <a href="' . htmlspecialchars($row["percorso_pag"]) . '" target="_blank">
            <img class="webpage-img" src="' . htmlspecialchars($row["url_img"]) . '"> 
          </a>
          <p class="project-caption">' . htmlspecialchars($row["testo_prg"]) . '</p>
        </div>';

      }else{
        echo '<div class="project-tile">
          <a>
            <div class=placeholder-img>
              <p>' . htmlspecialchars($row["url_img"]) . '</p>
            </div>
          </a>
          <p class="project-caption">' . htmlspecialchars($row["testo_prg"]) . '</p>
        </div>';
      }
    }
    $conn->close();
  ?>



    <div class="project-tile">
      <a>
        <div class=placeholder-img>
          <p>Coming soon</p>
        </div>
      </a>
      <p class="project-caption">In arrivo</p>
    </div>



  </div>


 <!-- PAGES -->
 <div id="more-pages">

      <hr>
      <br>
        <h1>Le nostre Pagine</h1>
      <br>
    <a id="more-button" href="./dante.html">Dante</a>
      <br><br>
    <a id="more-button" href="./carmine.html">Carmine</a>
  </div>

</section>

  <div style="position: fixed; top: 90%; left: 5px; font-size: xx-large;">
    <a href="">
      <i class="fab fa-github" style="color: red;"></i>
    </a>
  </div> 

  <!-- FOOTER -->
  <div id="footer-container">
    <footer>
      <p>Powered by Davidde D. & Ferone C.</a></p>

      <p>Copyright <script>document.write(new Date().getFullYear())</script></p>
    </footer>
  </div>
</section>


</body>

<script src="./js/main.js"></script>
</html>
