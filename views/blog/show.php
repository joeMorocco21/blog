<?php foreach($params['post']->getImage() as $img):?>
<img src="<?= $img->img_url  ?>" alt="">
<?php endforeach ?>
<?php foreach($params['post']->getAuteur() as $atr):?>
<h5>posté par <?= $atr->nom  ?></h5>
<?php endforeach ?>
<h1><?= $params['post']->title ?></h1>
<p><?= $params['post']->content ?></p>
<div>
<?php
foreach($params['post']->getTags() as $tag):
?>
<span class="badge badge-info">
<?= $tag->name  ?>
</span>
<?php endforeach ?>
</div>
<div>
<?php
foreach($params['post']->getCat() as $cat):
?>
<span class="badge badge-info">
<?= $cat->nom_de_cat ?>
</span>
<?php endforeach ?>
</div>
<a href="../posts" class="btn btn-danger mt-5">Back</a>
<div class="mt-5">
<?php foreach($params['post']->getComment() as $comment): ?>
    <div class="card bg-light mt-3">
    <h4 class="card bg-dark text-white"><?= htmlspecialchars($comment->nom) ?></h4>
    <div class="card-body">
    <p class="card-text"><?= htmlspecialchars($comment->comment) ?></p>
  </div>
</div>
<?php endforeach ?>
</div>
<form class="mt-5" method="post" action="../comment">
<input type="hidden" name="post_id" value="<?= $params['post']->id ?>">
<div class="form-group">
<label for="name">Nom:</label>
<input type="text" name="nom" id="name" placeholder="Votre Nom" class="form-control" required>
</div> 
<div class="form-group">
<label for="email">Email</label>
<input type="email" name="email" id="email" placeholder="Votre Email" class="form-control" required>
</div> 
<div class="form-group">
<label for="comment">Votre commentaire</label>
<textarea name="comment" id="comment" cols="30" rows="10" class="form-control" required></textarea>
</div> 
<script src="https://www.google.com/recaptcha/api.js?render=6LeSYc0UAAAAAGMsQaQAATvvR5yIt_3rI7uSVGsY"></script>
<button class="btn btn-primary">Commenter</button>
</form>