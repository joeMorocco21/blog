<h1>Articles</h1>
<?php foreach($params['posts'] as $post): ?>

<div class="card mb-3">
<div class="card-body">
<h2><?= $post->title ?></h2>
<div>
<?php foreach($post->getTags() as $tag): ?>
<span class="badge badge-success"><a href="./tags/<?= $tag->id ?>" class="text-white"><?= $tag->name  ?></a></span>
<?php endforeach ?>
</div>
<div>
<?php foreach($post->getCat() as $cat): ?>
<span class="badge badge-success"><a href="./cats/<?= $cat->nom_de_cat  ?>" class="text-white"><?= $cat->nom_de_cat  ?></a></span>
<?php endforeach ?>
</div>
<small class="badge badge-info">Publié le <?= $post->getCreateAt() ?> </small>
<p>
<?= $post->getExcerpt() ?>
</p>
<?= $post->getButton() ?>
</div></div>
<?php endforeach ?>