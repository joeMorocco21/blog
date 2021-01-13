<?php if(isset($_SESSION['errors'])): ?>
<?php foreach ($_SESSION['errors'] as $errorsArray): ?>
  <?php foreach($errorsArray as $errors): ?>
    <div class="alert alert-danger">
      <?php foreach($errors as $error): ?>
        <li><?= $error ?></li>
      <?php endforeach ?>
    </div>
    <?php endforeach ?>
  <?php endforeach ?>
<?php endif ?>
<?php session_destroy(); ?>
<form method="POST" action="/mvc/login">
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Entrer votre email">
    <small id="emailHelp" class="form-text text-muted">Ne jamais partager votre email</small>
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" name="password" id="password" placeholder="Mot de passe">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Rester connecté</label>
  </div>
  <button type="submit" class="btn btn-primary">Se connecter</button>
  <a href="./register" class="btn btn-success">Créer un compte</a>
  </div>
</form>
