<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TAURUS.</title>
</head>

<body>
  <!-- Navbar -->
    <nav class="navbar navbar-expand-lg py-3 navbar-dark bg-primary sticky-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">TAURUS.</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#apropos">A propos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#domaines">Domaines</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#realisations">Réalisations</a>
            </li>
          </ul>
          <button class="btn btn-light ms-lg-3">
            <a class="nav-link" href="signup.php">Discuter d'un projet</a>
          </button>
        </div>
      </div>
    </nav>
  <!-- Navbar -->



  <!-- Hero section -->

    <section class="hero vh-100 d-flex align-items-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 mx-auto text-center">
            <h1 class="display-4 text-white">BIENVENUE SUR TAURUS.</h1>
            <p class="text-white">Prenez place et immergé vous dans le petit décor que je vous présente</p>
            <a href="#apropos" class="btn btn-primary my-2">A PROPOS</a>
            <a href="#realisations" class="btn btn-outline-light my-2">VOIR LES RÉALISATIONS</a>
          </div>
        </div>
      </div>
    </section>

  <!-- Hero section -->

  
  <!-- A propos -->

    <section class="section" id="apropos">
      <div class="container">
        <div class="row">
          <div class="col-md-8 mx-auto text-center">
            <h1>A PROPOS.</h1>
            <h6 class="text-primary mb-4">A quoi sert le site TAURUS.</h6>
            <p class="about">
              <span>Taurus.</span> est un site de présentation de mes réalisations en infographie plus précisement le graphisme 
              et aussi en developpement web plus précisement <span>le UI design</span>, et le developpement <span>Front</span>. 
              <span>Taurus.</span> comporte en même temps une page de <span>messagerie instantanée professionnelle</span> grace 
              au bouton <span>discuter d'un projet</span> dans la barre des menus dans laquelle 
              on pourra discuter si vous avez un ou des projets à faire vouloir dans les domaines cités ci-dessous.
            </p>
            <a href="#domaines" class="btn btn-outline-primary my-2">Voir les domaines</a>
          </div>
        </div>
      </div>
    </section>

  <!-- A propos -->


  <!-- Mes réseaux sociaux -->

    <section class="section">
      <div class="container-fluid social">
        <div class="row">
          <div class="col-md-8 mx-auto text-center">
            <h6 class="text-primary">Mes réseaux sociaux.</h6>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="iconbox mt-3">
                <div>
                  <a href="https://www.facebook.com/sylvio.desouza.5/" target="_blank"><i class='bx bxl-facebook-square' ></i></a>
                </div>
                <div>
                  <a href="https://www.instagram.com/sylvio_desouza/" target="_blank"><i class='bx bxl-instagram-alt' ></i></a>
                </div>
                <div>
                  <a href="https://twitter.com/deSOUZASylvio2" target="_blank"><i class='bx bxl-twitter'></i></a>
                </div>
                <div>
                  <a href="https://www.linkedin.com/in/marie-sylvio-k-souza-b842a5151/" target="_blank"><i class='bx bxl-linkedin-square' ></i></a>
                </div>
                <div>
                  <a href="https://github.com/SylvioSLV" target="_blank"><i class='bx bxl-github' ></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  <!-- Mes réseaux sociaux -->


  <!-- Domaines -->

    <section class="section" id="domaines">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-8 mx-auto text-center">
            <h1>DOMAINES.</h1>
            <h6 class="text-primary">Voici les domaines dans lesquels j'exerce.</h6>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 mt-4">
            <div class="domain card-effect">
              <div class="iconbox-dom">
                <i class='bx bx-laptop' ></i>
              </div>
              <h5 class="mt-4 mb-2">Développement web</h5>
              <p>Le développement Web est le travail impliqué dans le développement d'un site Web pour Internet ou un intranet. 
                  Le développement Web peut aller du développement d'une simple page statique de texte brut à des applications 
                  Web complexes, et des services de réseaux sociaux. 
              </p>
            </div>
          </div>
          <div class="col-lg-4 mt-4">
            <div class="domain card-effect">
              <div class="iconbox-dom">
                <i class='bx bx-pen' ></i>
              </div>
              <h5 class="mt-4 mb-2">Infographie - Graphsime</h5>
              <p>Le graphisme est une discipline qui consiste à créer, choisir et utiliser des éléments graphiques pour 
                élaborer un objet de communication et/ou de culture. C'est une manière de représenter. Moi en tant graphiste, 
                Je suis un professionnel de la communication qui conçoit des solutions de communication visuelle.
                Je travaille sur le sens des messages à l'aide des formes graphiques.
              </p>
            </div>
          </div>
          <div class="col-lg-4 mt-4">
            <div class="domain card-effect">
              <div class="iconbox-dom">
                <i class='bx bxs-user-pin' ></i>
              </div>
              <h5 class="mt-4 mb-2">UI Design</h5>
              <p>La conception d'interface utilisateur ou l'ingénierie d'interface utilisateur est la conception d'interfaces 
                utilisateur pour des machines et des logiciels, tels que des ordinateurs, des appareils ...
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

  <!-- Domaines -->



  <!-- Réalisations -->

    <section class="section" id="realisations">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-8 mx-auto text-center">
            <h1>RÉALISATIONS.</h1>
            <h6 class="text-primary">Voici quelques-unes de mes réalisations.</h6>
          </div>
        </div>
        <div class="row g-3">
          <div class="col-lg-4 .col-sm-6">
            <div class="realisations">
              <img src="images/1.jpg" alt="">
              <div class="overlay">
                <div>
                  <h4 class="text-white">Mamographie</h4>
                  <h6 class="text-white">Graphisme</h6>
                </div>
              </div>
            </div>
          </div> 
          <div class="col-lg-4 .col-sm-6">
            <div class="realisations">
              <img src="images/2.jpg" alt="">
              <div class="overlay">
                <div>
                  <h4 class="text-white">Précommande SPACE</h4>
                  <h6 class="text-white">Graphisme</h6>
                </div>
              </div>
            </div>
          </div> 
          <div class="col-lg-4 .col-sm-6">
            <div class="realisations">
              <img src="images/3.jpg" alt="">
              <div class="overlay">
                <div>
                  <h4 class="text-white">Précommande SPACE</h4>
                  <h6 class="text-white">Graphisme</h6>
                </div>
              </div>
            </div>
          </div> 
          <div class="col-lg-4 .col-sm-6">
            <div class="realisations">
              <img src="images/4.jpg" alt="">
              <div class="overlay">
                <div>
                  <h4 class="text-white">Campagne solaire</h4>
                  <h6 class="text-white">Graphisme</h6>
                </div>
              </div>
            </div>
          </div> 
          <div class="col-lg-4 .col-sm-6">
            <div class="realisations">
              <img src="images/5.jpg" alt="">
              <div class="overlay">
                <div>
                  <h4 class="text-white">Campagne solaire</h4>
                  <h6 class="text-white">Graphisme</h6>
                </div>
              </div>
            </div>
          </div> 
          <div class="col-lg-4 .col-sm-6">
            <div class="realisations">
              <img src="images/6.jpeg" alt="">
              <div class="overlay">
                <div>
                  <h4 class="text-white">Campagne solaire</h4>
                  <h6 class="text-white">Graphisme</h6>
                </div>
              </div>
            </div>
          </div> 
        </div>
      </div>

      <!-- Developpement -->
      <div class="container">
        <div class="row mb-3">
          <div class="col-md-8 mx-auto text-center">
            <h6 class="mt-5 text-primary">Developpement Web.</h6>
          </div>
        </div>
        <div class="row g-3">
          <div class="col-lg-4 .col-sm-6">
            <div class="realisations">
              <img src="images/dagba.png" alt="">
              <div class="overlay">
                <div>
                  <h4 class="text-white">DAGBA - ACCELERATEUR DES STARTUPS</h4>
                  <h6 class="text-white">Developpement Web</h6>
                </div>
              </div>
            </div>
            <div>
              <a href="https://www.dagba.net/" class="btn btn-outline-primary my-2" target="_blank">Aller sur le site</a>
            </div>
          </div>
          <div class="col-lg-4 .col-sm-6">
            <div class="realisations">
              <img src="images/vef.png" alt="">
              <div class="overlay">
                <div>
                  <h4 class="text-white">VENIR EN FRANCE - VEF Togo</h4>
                  <h6 class="text-white">Developpement Web</h6>
                </div>
              </div>
            </div>
            <div>
              <a href="https://vef-france.fr/" class="btn btn-outline-primary my-2" target="_blank">Aller sur le site</a>
            </div>
          </div>
          <div class="col-lg-4 .col-sm-6">
            <div class="realisations">
              <img src="images/portfolio.png" alt="">
              <div class="overlay">
                <div>
                  <h4 class="text-white">MON PORTFOLIO</h4>
                  <h6 class="text-white">Developpement Web</h6>
                </div>
              </div>
            </div>
            <div>
              <a href="https://sylvioslv.github.io/Mon-portfolio/" class="btn btn-outline-primary my-2" target="_blank">Aller sur le site</a>
            </div>
          </div>
        </div>
      </div>
    </section>

  <!-- Réalisations -->


  <!-- Footer -->
  
    <footer class="mt-5">
      <div class="footer-top">
        <div class="container">
          <div class="row gy-4">
            <div class="col-md-3">
              <a class="navbar-brand text-white" href="index.php">TAURUS.</a>
            </div>
            <div class="col-md-3 text-white">
              <h5 class="text-white">Menus</h5>
              <ul class="list-unstyled">
                <li><a href="#">Accueil</a></li>
                <li><a href="#apropos">A propos</a></li>
                <li><a href="#domaines">Domaines</a></li>
                <li><a href="#realisations">Réalisations</a></li>
                <li><a href="signup.php">Discuter d'un projet</a></li>
              </ul class="list-unstyled">
            </div>
            <div class="col-md-3 text-white">
              <h5 class="text-white">Autres</h5>
              <ul class="list-unstyled">
                <li><a href="#">FAQ's</a></li>
                <li><a href="#">Politique de confidentialités</a></li>
                <li><a href="#">Garantie</a></li>
              </ul>
            </div>
            <div class="col-md-3 text-white">
              <h5 class="text-white">Coordonnées</h5>
              <ul class="list-unstyled">
                <li>Addresse: 1057 Rue 15 BNG Atikpodji</li>
                <li>Tèl: +228 92 16 85 16</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <p class="text-center my-3">Copyright <i class='bx bx-copyright' ></i> TAURUS.</p>
      </div>
    </footer>

  <!-- Footer -->





  <!-- Syle css de la page index -->
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

    :root {
      --primary: #0d6efd;
      --dark: #21252f;
      --body: #888;
      --box-shadow: 0 8px 22px rgba(0,0,0,0.1);
    }

    body{
      font-family: Poppins, "sans-serif" ;
      line-height: 1.7;
    }

    img{
      width: 100%;
    }

    h1,h2,h3,h4,h5,h6, .display-4{
      color: var(--dark);
      font-weight: 700;
    }

    span{
      font-weight: 700;
    }

    .navbar-brand{
      font-weight: 700;
    }
    
    .navbar{
      box-shadow: var(--box-shadow);
    }

    .navbar .nav-link{
      font-size: 14px;
      font-weight: 700;
    }

    .hero{
      background-image: url(./img/hro.jpg);
      background-position: center;
      background-size: cover;
      background-attachment: fixed;
      position: relative;
      z-index: 2;
    }
    
    .hero::after{
      content: "";
      width: 100%;
      height: 100%;
      position: absolute;
      top: 0;
      left: 0;
      background-color: rgba(21,20, 51, 0.8);
      z-index: -1;
    }

    /* Style CSS des sections */
    .section{
      padding-top: 120px;
      padding-bottom: 20px;
    }

    /* Style CSS de la section Réseaux sociaux */
    
    .social{
      background-color: rgb(242, 242, 255);
      padding: 20px;
    }

    /* Style CSS de la section domaines */
    .iconbox{
      display: flex;
      align-items: center;
      justify-content: space-evenly;
      font-size: 30px;
    }

    .iconbox-dom{
      width: 54px;
      height: 54px;
      display: flex;
      align-items: center;
      justify-content: center;
      background-color: var(--primary);
      color: #fff;
      font-size: 32px;
      border-radius: 100px;
    }

    .card-effect{
      box-shadow: var(--box-shadow);
      background-color: #fff;
      padding: 25px;
      border-radius: 0 20px 0 20px;
      transition: all 0.35s ease;
    }

    .card-effect:hover{
      box-shadow: none;
      transform: translateY(5px);
    }

    .domain{
      position: relative;
      z-index: 2;
      overflow: hidden;
    }

    .domain::after{
      content: '';
      width: 100%;
      height: 100%;
      position: absolute;
      top: -100%;
      left: 0;
      background-color: var(--primary);
      z-index: -1;
      opacity: 0;
      transition: all 0.4s ease;
    }

    .domain:hover .iconbox-dom{
      background-color: #fff;
      color: var(--primary);
    }

    .domain:hover h5,
    .domain:hover p{
      color: #fff;
    }

    .domain:hover::after{
      opacity: 1;
      top: 0;
    }

    /* Style CSS de la session réalisations */

    .realisations{
      position: relative;
      overflow: hidden;
    }

    .realisations .overlay{
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(21, 20, 51, 0.8);
      padding: 30px;
      display: flex;
      align-items: flex-end;
      transition: all 0.4s ease;
      opacity: 0;
    }

    .realisations:hover .overlay{
      opacity: 1;
    }

    .realisations img{
      transition: all 0.4s ease;
    }

    .realisations:hover img{
      transform: scale(1.1);
    }

    /* Style CSS du footer */

    .footer-top{
      margin-top: 90px;
      padding-bottom: 90px;
      padding: 90px;
      background-color: var(--primary);
    }

    .list-unstyled a{
      text-decoration: none;
      color: white;
    }

    .list-unstyled a:hover{
      text-decoration: underline;
      color: white;
    }
  </style>
  <!-- Syle css de la page index -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>