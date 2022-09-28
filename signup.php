<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<!-- Inclusion du header -->
<?php 
  include_once "header.php"; 
?>
<body>
  <div class="wrapper">
    <!-- Section Formulaire d'inscription -->
    <section class="form signup">
      <header>TAURUS. Messagerie</header>
      <h4>Veuillez vous inscrire si c'est votre première fois.</h4>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>Nom:</label>
            <input type="text" name="fname" placeholder="Votre Nom" required>
          </div>
          <div class="field input">
            <label>Prénom:</label>
            <input type="text" name="lname" placeholder="Votre Prénom" required>
          </div>
        </div>
        <div class="field input">
          <label>Adresse Mail:</label>
          <input type="text" name="email" placeholder="Votre adresse mail" required>
        </div>
        <div class="field input">
          <label>Mot De Passe:</label>
          <input type="password" name="password" placeholder="Saisir un mot de passe" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label>Choisir une photo</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Continuer la discussion">
        </div>
      </form>
      <div class="link"> Déjà inscrit ? <a href="login.php">Se connecter</a></div>
      <a href="index.php"><button>Retourner à l'accueil</button></a>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>
</html>
