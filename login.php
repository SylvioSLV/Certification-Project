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
    <!-- Section formulaire de connexion -->
    <section class="form login">
      <header>TAURUS. Messagerie</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Adresse Mail</label>
          <input type="text" name="email" placeholder="Votre adresse mail" required>
        </div>
        <div class="field input">
          <label>Mot de passe</label>
          <input type="password" name="password" placeholder="Votre mot de passe" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Continuer la discussion">
        </div>
      </form>
      <div class="link">Pas encore inscrit ? <a href="signup.php">S'inscrire</a></div>
    </section>
  </div>
  
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>

</body>
</html>
