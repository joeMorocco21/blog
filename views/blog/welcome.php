<div class="row mt-5">
<div class="col-lg-1 col-md-1 col-sm-1">
<img src="http://localhost/mvc/ressources/file/rss.png" class="rss">
</div>
<div class="col-lg-11 col-md-11 col-sm-11">
<?php foreach($params['post'] as $post):?>
<?php endforeach ?>
<marquee behavior="" direction="left">
<?php foreach($post->getMarquee() as $marquee): ?>
<?= $marquee->title ?> <img src="http://localhost/mvc/ressources/file/logo.png" class="logo" alt="">
<?php endforeach ?>
</marquee>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 mt-4">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
  <?php foreach($params['post'] as $post):?>
    <?php foreach($post->getImageCarousel() as $img): ?>
    <div class="carousel-item">
      <img class="d-block w-100 car" src=<?= $img->img_url ?> alt="">
      <div class="carousel-caption d-none d-md-block">
        <div class="car-titles">
        <h5 class="car-title"><a href="http://localhost/mvc/posts/<?= $post->id ?>"><?= $post->title ?></a></h5>
        </div>
    </div>
    </div>

    <?php endforeach ?>
    <?php endforeach ?>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>


<div class="col-lg-12 col-md-12 col-sm-12 mt-5 title-one">
<h3>Cyber Sécurité</h3>
</div>
 <div class="col-lg-12 col-md-12 col-sm-12 mt-5">
    <div class="row">
    <?php foreach($post->getImageSecur() as $imgs): ?>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <img src="<?= $imgs->img_url ?>" alt="" class="secure">
                <div class="card bg-success text-white">
                    <?= $imgs->title ?>
                </div>
            </div>
    <?php endforeach ?>
    </div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 mt-5">
<h4 class="title-one">Hard</h4>
<div class="row">
    <?php foreach($post->getImagehard() as $hard): ?>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <img src="<?= $hard->img_url ?>" alt="" class="secure">
                <div class="card bg-success text-white">
                    <?= $hard->title ?>
                </div>
            </div>
    <?php endforeach ?>
    </div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 mt-5">
<h4 class="title-one">soft</h4>
<div class="row">
    <?php foreach($post->getImageSoft() as $soft): ?>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <img src="<?= $soft->img_url ?>" alt="" class="secure">
                <div class="card bg-success text-white">
                    <?= $soft->title ?>
                </div>
            </div>
    <?php endforeach ?>
    </div>
</div>

</div>