<div class="row mt-5">
<div class="col-lg-1 col-md-1 col-sm-1 marquee">
<i class="fas fa-rss rss"></i>
</div>
<div class="col-lg-11 col-md-11 col-sm-11 marquee">
<?php foreach($params['post'] as $post):?>
<?php endforeach ?>
<marquee behavior="" direction="left">
<?php foreach($post->getMarquee() as $marquee): ?>
<?= $marquee->title ?>&nbsp;&nbsp;&nbsp; <i class="fas fa-blog"></i>&nbsp;&nbsp;&nbsp;
<?php endforeach ?>
</marquee>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 mt-4">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">1</li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1">2</li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2">3</li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3">4</li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4">5</li>
    <li data-target="#carouselExampleIndicators" data-slide-to="5">6</li>


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
<h4>Cyber Sécurité <i class="fas fa-shield-alt"></i></h4>
</div>
 <div class="col-lg-12 col-md-12 col-sm-12 mt-5">
    <div class="row">
    <?php foreach($post->getImageSecur() as $imgs): ?>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <img src="<?= $imgs->img_url ?>" alt="" class="secure">
                <div class="card bg-light text-red">
                    <a href="http://localhost/mvc/posts/<?= $imgs->post_id ?>"><?= $imgs->title ?></a>
                </div>
            </div>
    <?php endforeach ?>
    </div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 mt-5">
<h4 class="title-one">Hard <i class="fas fa-hdd"></i></h4>
<div class="row">
    <?php foreach($post->getImagehard() as $hard): ?>
            <div class="col-lg-6 col-md-6 col-sm-6 mt-4">
                <img src="<?= $hard->img_url ?>" alt="" class="secure">
                <div class="card bg-light text-white">
                    <a href="http://localhost/mvc/posts/<?= $hard->post_id ?>"><?= $hard->title ?></a>
                </div>
            </div>
    <?php endforeach ?>
    </div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 mt-5">
<h4 class="title-one">Soft <i class="fas fa-terminal"></i></h4>
<div class="row">
    <?php foreach($post->getImageSoft() as $soft): ?>
            <div class="col-lg-6 col-md-6 col-sm-6 mt-4">
                <img src="<?= $soft->img_url ?>" alt="" class="secure">
                <div class="card bg-light text-white">
                <a href="http://localhost/mvc/posts/<?= $soft->post_id ?>"><?= $soft->title ?></a>
                </div>
            </div>
    <?php endforeach ?>
    </div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 mt-5 title-one">
<h3>Programation <i class="fas fa-code"></i></h3>
</div>
<div class="row">
    <?php foreach($post->getImageProgramation() as $pro): ?>
            <div class="col-lg-4 col-md-4 col-sm-4 mt-4">
                <img src="<?= $pro->img_url ?>" alt="" class="secure">
                <div class="card bg-light text-white">
                <a href="http://localhost/mvc/posts/<?= $pro->post_id ?>"><?= $pro->title ?></a>
                </div>
            </div>
    <?php endforeach ?>
    </div>
</div>
