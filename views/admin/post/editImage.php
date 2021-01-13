<h5 class="title-one mt-5">Modifier l'images</h5>
<a href="/mvc/admin/posts/images" class="btn btn-success mt-2">retour</a>
<img src="<?= $params['image']->img_url ?>" class="editImage mt-2" alt="">
<form method="post" action="http://localhost/mvc/admin/posts/editImage/<?= $params['image']->id ?>"
     enctype="multipart/form-data">
<label for="img">Modifier l'image</label>
<div class="form-group">
    <input type="file" name="img[]" id="img" class="form-control">
    <br>
    <button class="btn btn-primary">Modifier</button>
</div>
</form>
