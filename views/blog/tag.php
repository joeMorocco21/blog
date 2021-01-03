
<?php foreach ($params['tag']->getPosts() as $post): ?>
<div class="card">
    <div class="card-body">
        <a href="../posts/<?= $post->id ?>"><?= $post->title ?></a>
    </div>
</div>
<?php endforeach ?>