<h1><?= $params['post']->title ?? 'Créer un nouvelle article'  ?></h1>
<form method="post" action=<?= isset($params['post']) ? "/mvc/admin/posts/edit/{$params['post']->id}" : 
"/mvc/admin/posts/create"  ?> enctype="multipart/form-data">
<div class="form-group">
<label for="title">Titre:</label>
<input type="text" name="title" value="<?= $params['post']->title ?? '' ?>" id="title" class="form-control">
</div>
<div class="form-group">
<label for="content">Article:</label>
  <script src="https://cdn.tiny.cloud/1/r96owszm0d3f18buukegmvjd1fwrx9ntdfjnxuec4w2zpkph/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name'
    });
  </script>
<textarea name="content" class="form-control" rows="8" ><?= $params['post']->content ?? '' ?> </textarea>
</div>
<?php if(!isset($params['post'])): ?>
<input type="hidden" name="auteur" id="auteur" value="<?= $_SESSION['id']  ?>">
<?php endif ?>
<div class="form-group">
<label for="tag">Tags de l'article</label>
<select multiple name="tag[]" id="tag" class="form-control">
<?php foreach ($params['tags'] as $tags): ?>
<option value="<?= $tags->id  ?>"
<?php if (isset($params['post'])) : ?>
<?php foreach($params['post']->getTags() as $postTag)
{
    echo($tags->id === $postTag->id) ? 'selected' : '';
}
?><?php endif ?>
><?= $tags->name ?>
</option>
<?php endforeach ?>
</select>
</div>
<div class="form-group">
<label for="cat">Catégories de l'article</label>
<select multiple name="cat[]" id="cat" class="form-control">
<?php foreach ($params['cats'] as $cats): ?>
<option value="<?= $cats->id  ?>"
<?php if (isset($params['post'])) : ?>
<?php foreach($params['post']->getCat() as $postCat)
{
    echo($cats->id === $postCat->id) ? 'selected' : '';
}
?>
<?php endif ?>
><?= $cats->nom_de_cat ?>
</option>
<?php endforeach ?>
</select>
</div>
<?php if(!isset($params['post'])): ?>
<div class="control-group">
<label for="img">Image de l'article</label>
<input type="file" name="img[]" id="img" class="form-control">
</div>
<?php endif ?>
<button type="submit" class="btn btn-primary"><?= isset($params['post']) ? 'Modifier' : 'Ajouter'?></button>
</form>