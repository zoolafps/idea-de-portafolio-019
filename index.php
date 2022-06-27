<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#343a40" />
  <!-- ## METAINFO ## -->
  <title>zoolafps - Portafolio</title>
  <meta name="author" content="zoolafps"/>
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <meta name="robots" content="index, follow" />
  <meta name="description" content="Portafolio web de zoolafps" />
  <!-- ## GOOGLE_FONTS ## -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <!-- ## CSS ## -->
  <link rel="stylesheet" href="css/index.css">
</head>

<body>
  <!-- ## NAV_BAR ## -->
  <nav class="nav" role="navigation">
    <div class="nav_brand">
      <img src="img/zoolafps_logo.webp" alt="zoolafps_logo"  loading="lazy" />
      <h2>
        zoolafps
      </h2>
    </div>
  </nav>
  <!-- ## CONTAINER ## -->
  <div class="container">

    <header class="hero" id="hero" role="heading">
      <div class="hero_content">
        <div class="welcome">
          <h1>
            hello! i am zoolafps
          </h1>
          <p>Frontend Web Developer</p>
        </div>
        <div class="me">
          <div>
          <h3>Quien Soy?</h3>
            <p>
            soy un joven Colombiano apasionado por 
            la tecnologia, la fotografia, la ilustracion y el arte.
          </p>
          </div>
          <div>
          <h3>Que hago?</h3>
           <p>
            Actualmente freelancer:
            <br>
            Ofresco servicios de creacion de paginas web
          </p> 
          </div>
          <div>
            <h3>Contactame</h3>
            <ul>
              <li>
                <img class="icon" src="img/github_png.png" alt="github_png" loading="lazy" />
                <a role="button" href="https://github.com/zoolafps" target="_blank">
                  Github
                </a>
              </li>
              <li>
                <img class="icon" src="img/twitter_png.png" alt="twitter_png" loading="lazy" />
                <a role="button" href="https://twitter.com/zoolafps" target="_blank">
                  Twitter
                </a>  
              </li>
              <li>
                <img class="icon" src="img/LinkedIn_png.png" alt="LinkedIn_png" loading="lazy" />
                <a role="button" href="https://co.linkedin.com/in/andr%C3%A9s-felipe-pati%C3%B1o-sierra-915378211?original_referer=" target="_blank">
                  LinkedIn
                </a>  
              </li>
            </ul>
          </div>
        </div>
      </div>
      <button onclick="projects()">
        <strong>></strong>
      </button>
    </header>

    <section class="projects" id="projects">
      <button onclick="projects()">
        <strong> < </strong>
      </button>
      <div class="projects_content">
        <div class="inicio" id="inicio"></div>
          <?php
          include 'admin_dashboard/db.php';
          $query = "SELECT * FROM proyectos";
          $result = mysqli_query($conn, $query);

          while ($row = mysqli_fetch_assoc($result)) { ?>

          <div class="card">
            <img 
              src="images/<?php echo $row['img']; ?>" 
              alt="<?php echo $row['title']; ?>" loading="lazy" />
            <h2>
              <?php echo $row['title']; ?>
            </h2>
            <p>
              <?php echo $row['text']; ?>
            </p>
            <a 
              href="<?php echo $row['code']; ?>" 
              target="_blank">code
            </a>
            <a 
              href="<?php echo $row['demo']; ?>" 
              target="_blank">demo
            </a>
          </div>
        <?php } ?>
          <a href="#inicio">back</a>
      </div>
    </section>
  </div>

  <script>
    function projects() {
      document.querySelector(".hero").classList.toggle("dn");
      document.querySelector(".projects").classList.toggle("show");
    }
  </script>
</body>

</html>