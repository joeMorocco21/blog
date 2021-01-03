<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><img src="http://localhost/mvc/ressources/file/logo.png" class="logo" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost/mvc">Accueil <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/mvc/posts">Les derniers articles</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/mvc/cats/Software">Software</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/mvc/cats/Securite_Informatique">Sécurité Informatique</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/mvc/cats/Reseaux">Réseaux</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/mvc/cats/Programmation">Programmation</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/mvc/cats/Mobile">Mobile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/mvc/cats/Programmation">Programmation</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/mvc/cats/Hardware">Hardware</a>
      </li>
      <?php if(isset($_SESSION['auth'])): ?>
      <li class="nav-item active">
        <a class="nav-link" href="./"><?= $_SESSION["name"]; ?> <span class="sr-only">(current)</span></a>
      </li>
      <?php endif ?>
      <li class="nav-item active">
      <?php if(isset($_SESSION['auth'])): ?>
        <a class="nav-link" href="http://localhost/mvc/login/logout">Se déconnecter <span class="sr-only">(current)</span></a>
        <?php else: ?>
        <a class="nav-link" href="http://localhost/mvc/login">Se connecter <span class="sr-only">(current)</span></a>
        <?php endif ?>
      </li>
    </ul>
  </div>
</nav>