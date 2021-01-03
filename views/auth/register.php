<form action="./register/create" method="post">
<div class="form-group">
<label for="name">Nom:</label>
<input type="text" class="form-control" name="nom" id="nom" placeholder="Nom" required>
</div>
<div class="form-group">
<label for="lname">Prénom:</label>
<input type="text" class="form-control" name="prenom" id="lname" placeholder="Prénom" required>
</div>
<div class="form-group">
<label for="email">Email:</label>
<input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
</div>
<div class="form-group">
<label for="name">Mot de pass:</label>
<input type="password" class="form-control"  id="password" placeholder="Mot de pass" required>
</div>
<div class="form-group">
<label for="name">Confirmer votre mot de pass :</label>
<input type="password" class="form-control" name="password" id="password2" placeholder="Confirmer votre mot de pass" required>
</div>
<button class="btn btn-primary">S'enregistrer</button>
</form>