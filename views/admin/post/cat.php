<h5 class="title-one mt-5">Gestion des catégories</h5>
<a href="http://localhost/mvc/admin/posts" class="btn btn-success mt-4">Retour</a>
<a href="http://localhost/mvc/admin/cat/create" class="btn btn-info mt-4">Ajouter une catégorie</a>
<table class="table table-dark mt-3">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">categorie</th>
      <th scope="col">date de publication</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <tbody>
<?php foreach($params['cats'] as $cat ) : ?>
<tr>
      <th scope="row"><?= $cat->id ?></th>
      <td><?= $cat->nom_de_cat ?></td>
      <td><?= $cat->create_at ?></td>
      <td>
      <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-12">
      <a href="http://localhost/mvc/admin/cat/edit/<?= $cat->id ?>" class="btn btn-warning">Modifier <i class='fas fa-edit'></i></a>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12">
      <form method="POST" action="http://localhost/mvc/admin/cat/delete/<?= $cat->id ?>">
      <button type="submit" class="btn btn-danger">Supprimer <i class="fas fa-trash-alt"></i></button>
      </form>
      </div>
      </div>
      </td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>