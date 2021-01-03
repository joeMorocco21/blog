<?php if(isset($_GET['success'])): ?>
<div class="alert alert-success">Vous êtes connecté(e)</div>
<?php endif ?>
<h1>Administration des articles</h1>
<a href="/mvc/admin/posts/create" class="btn btn-info">Ajouter un article</a>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">titre</th>
      <th scope="col">date de publication</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($params['posts'] as $post): ?>
    <tr>
      <th scope="row"><?= $post->id ?></th>
      <td><?= $post->title ?></td>
      <td><?= $post->create_at ?></td>
      <td>
      <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-12">
      <a href="../admin/posts/edit/<?= $post->id ?>" class="btn btn-warning">Modifier <i class='fas fa-edit'></i></a>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12">
      <form method="POST" action="../admin/posts/delete/<?= $post->id ?>">
      <button type="submit" class="btn btn-danger">Supprimer <i class="fas fa-trash-alt"></i></button>
      </form>
      </div>
      </div>
      </td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>

