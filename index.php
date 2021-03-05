<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="../img/LogoWoodUpW.png" type="image/png" sizes="16x16">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/effects.css">
  <link rel="stylesheet" href="css/header-responsive.css">
  <link rel="stylesheet" href="css/footer-responsive.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <title>Wood'Up</title>
</head>
<body>

  <?php include "php/header.php"?>

    <div class="div-container">

      <div class="banner">
        <h1>
        </br></br>
        WOOD'UP FORMATIONS </br>VOUS ACCOMPAGNE DANS </br>VOS PROBLÉMATIQUES </br>FORRESTIÈRES ET BIEN PLUS
        </h1>
        <a href="services.php" id="services-button">DÉCOUVRIR NOS SERVICES</a>
      </div>


      <section class="about">


          <div class="about-img">
            <img src="img/mainpage_about_img.jpg" alt="forest image" width="40%" length="40%">
          </div>
          


          <div class="card-about">
            <h2>À PROPOS DE NOUS</h2>
            <p></br></br></p>
            <h1>WOOD'UP QU'EST-CE QUE C'EST ?</h1>
            <p></br></br>Wood’Up est un cabinet fondé fin 2016 par Hélène Bolliot, ingénieure agronome spécialisée en foresterie. 

Notre entreprise s’est développée au fur et à mesure des années. D’abord rapidement, grâce à une collaboration avec un cabinet d’expertise forestière et agricole, qui permet aujourd’hui d’accompagner les propriétaires forestiers sur la gestion et l’expertise de leurs forêts. 

Et depuis 2019, avec la marque Les Petits Forestiers et la création d’un programme de sensibilisation et d’éducation à la forêt pour les enfants.  

En septembre 2020, Clément Lachaud rejoint l’entreprise en tant qu’associé. 

La suite, c’est à vous de l’écrire à nos côtés !</p>
              <a href="about.php" id="about-button">EN SAVOIR PLUS</a>
          </div>

        </section>
        
        <section class="service">

          <div class="service-txt">
            <h1>NOS SERVICES</h1>
            <p></br></br>De l’arbre en forêt aux multiples utilisations du bois : notre passion vous accompagne quel que soit votre projet !</p>

          </div>

          <div class="card-service-container">

            <div class="card-service">

              <div id="coaching-txt">
                <h2>COACHING EN LIGNE</h2>
                <p></br></br>Le coaching forestier : une innovation pour permettre à tous de gérer leurs bois.</br></p>
                  <a href="services.php" id="services-button2">EN SAVOIR PLUS</a>
              </div>

              <div id="coaching-img">
                <img src="img/mainpage_coaching_img.jpg" alt="forest image" width="400" length="400">
              </div>

            </div>

            <div class="card-service">
              
              <div id="formation-txt">
                <h2>FORMATION </br>VIDÉO</h2>
                <p></br></br>Découvrez notre offre de formations en vidéo pour apprendre les rudiments de la gestion forestière.</br></p>
                  <a href="services.php" id="services-button2">EN SAVOIR PLUS</a>
              </div>

              <div id="formation-img">
                <img src="img/mainpage_formation_img.jpg" alt="forest image" width="400" length="400">
              </div>

            </div>

          </div>

        </section>

        <section class="testimony">

          <div class="testimony-txt">
            <h1>ILS NOUS ONT DÉJÀ FAIT CONFIANCE</h1>
            <div class="carousel_container">
              <br>
              <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">

                  <div class="item active">
                    <img src="img/blank-avatar.jpg" alt="Chania" width="500" height="500">
                    <div class="carousel-caption">
                      <h3>Francis L.</h3>
                      <p>Propriétaire d’une parcelle de 0,7 hectares dans le 42.</br>« Grâce à leurs conseils, Wood’up m’a permis de voir que l’on peut faire quelque chose de ses bois, même quand on a une petite surface ! »</p>
                    </div>
                  </div>

                  <div class="item">
                    <img src="img/blank-avatar.jpg" alt="Chania" width="500" height="500">
                    <div class="carousel-caption">
                      <h3>Carole G.</h3>
                      <p>Propriétaire de 1,2 hectares dans le 07.</br>« Je ne me rappelais même plus que j’avais hérité de bois. Wood’up m’a aidé à retrouver les limites de ma parcelle toute seule, et m’ont conseillé sur quelques petits travaux à faire ces prochaines années ! Cela m’a permis de mieux savoir comment gérer mes bois. »
                      </p>
                    </div>
                  </div>
                
                  <div class="item">
                    <img src="img/blank-avatar.jpg" alt="Flower" width="500" height="500">
                    <div class="carousel-caption">
                      <h3>Louis C.</h3>
                      <p>Propriétaire en indivision de 0,8 hectares dans le 73.</br>«  Nous sommes trois frères et le partage n’avait pas été fait pour la succession de mes parents. Wood’up nous ont fait une estimation de valeur et pour que je puisse racheter les parts de mes frères au prix juste. Je sais maintenant quelles essences mettre en valeur sur ma parcelle pour lui donner un bel avenir. »</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </section>

        <section class="trainer">

          <div class="trainer-txt">
            <h1>NOS FORMATEURS</h1>
            <p></br></br>Notre équipe de formateurs vous accompagne et vous fait profiter de son expérience dans la gestion de votre patrimoine forestier.</p>
          </div>

          <div class="trainer-card-container">

            <div class="trainer-card">

              <div class="trainer-card-img">
                <img src="img/bg_forest.jpg" alt="forest image" width="35%" length="40%">
              </div>

              <div class="trainer-card-txt">
                <h2>HÉLÈNE BOLLIOT</h2>
                  <a href="contact.php" id="contact-button"> DÉCOUVRIR </a>
              </div>

            </div>

            <div class="trainer-card">

              <div class="trainer-card-img">
                <img src="img/bg_forest.jpg" alt="forest image" width="35%" length="40%">
              </div>

              <div class="trainer-card-txt">
                <h2>CLÉMENT LACHAUD</h2>
                  <a href="contact.php" id="contact-button"> DÉCOUVRIR </a>
              </div>

            </div>

          </div>

        </section>

      </div>

    <?php include "php/footer.php"?>
    <script src="js/app.js"></script>
</body>
</html>