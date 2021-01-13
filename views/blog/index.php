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
<?= strip_tags($post->getExcerpt()) ?>
</p>
<?= $post->getButton() ?>
</div></div>
<?php endforeach ?>
<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>