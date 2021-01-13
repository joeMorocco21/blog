<h5 class="title-one mt-5">Gestion des images</h5>
<a href="/mvc/admin/posts" class="btn btn-success mt-2">retour</a>
<table class="table table-dark mt-3">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">image</th>
      <th scope="col">date de publication</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
<?php foreach($params['images'] as $img ) : ?>
<tr>
      <th scope="row"><?= $img->id ?></th>
      <td><img src="<?= $img->img_url ?>" class="imageEdit" alt=""></td>
      <td><?= $img->create_at ?></td>
      <td>
      <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-12">
      <a href="http://localhost/mvc/admin/posts/editImage/<?= $img->id ?>" class="btn btn-warning">Modifier <i class='fas fa-edit'></i></a>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12">
      <form method="POST" action="../admin/posts/delete/<?= $img->id ?>">
      <button type="submit" class="btn btn-danger">Supprimer <i class="fas fa-trash-alt"></i></button>
      </form>
      </div>
      </div>
      </td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>