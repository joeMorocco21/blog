<?php foreach ($params['cat']->getPosts() as $post): ?>
<div class="card mt-5">
    <div class="card-body">
    <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-4">
        <img src="<?= $post->img_url ?>" class="img-cat" alt="">
        </div>
    <div class="col-lg-8 col-md-8 col-sm-8">
        <a href="../posts/<?= $post->post_id ?>" class="cat-link"><?= $post->title ?></a>
        <br>
        <?= strip_tags(htmlspecialchars_decode($post->getExcerpt()))  ?>
        <br>
        <a href="http://localhost/mvc/posts/<?= $post->post_id ?>" class="">
        <button class="btn btn-info">lire la suite</button></a>
        </div>
        </div>
    </div>
</div>
<?php endforeach ?>