<a href="http://localhost/mvc/admin/cat" class="btn btn-success mt-4">Retour</a>
<form method="post" class="mt-4" action=<?= isset($params['cat']) ? "/mvc/admin/cat/edit/{$params['cat']->id}" : 
"/mvc/admin/cat/create"  ?>>
<div class="form-group">
<label for="cat">Categorie</label>
<input type="text" class="form-control" value="<?= $params['cat']->nom_de_cat ?? '' ?>" name="nom_de_cat" id="cat" required>
</div>
<button class="btn btn-primary"><?= isset($params['cat']) ? 'Modifier' : 'Ajouter'?></button>
</form>