<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Padma Bridge</title>
    <?php wp_head() ; ?>
</head>
<body>

    <!-- Slider part start -->
    <header class="container-fluid slider ps-0 pe-0">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
  <?php
    $cat=new Wp_query([
        'post_type'=>'post',
        'category_name'=>'slider1'
    ]);
    ?>
<div class="carousel-inner">
    <?php
    $x=0;
    while(have_posts()){the_post();
        $x++;
    ?>
    <div class="carousel-item <?= ($x==1)?'active' : '' ?>">
        <?php the_post_thumbnail();?>
      <!-- <img src="..." class="d-block w-100" alt="..."> -->
    </div>
    <?php }?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
        </header>

<!-- Slider part end -->


<!-- Logo Part Start -->
<section class="container-fluid logo">
    <div class="row">
        <div class="col-lg-6">
            <?php the_custom_logo() ; ?>
        </div>
        <div class="col-lg-6">
        <?php dynamic_sidebar('bdlogo') ; ?>
    </div>
    </div>
</section>
<!-- Logo Part End -->
<!-- Menu Part Start -->

    <section class="container-fluid">
        <div class="container navbar-expand s_menu">
            <?php 
             wp_nav_menu(array(
            'theme_location'=>'TM',
            'menu_class'=>'navbar-nav menu_1'
             ) );
            ?>
        </div>
    </section>
<!-- Menu Part End -->

<!-- Hero Part Start -->
<section class="container hero text-center">
    <div class="row mt-3">
        <?php dynamic_sidebar('herotitle') ; ?>
    </div>
    <div class="row mt-3 ">
        <div class="col-sm-4">
            <div class="card tt" style="width: 18rem;">
                     <?php dynamic_sidebar('card1') ; ?>
                     <div class="read-more-btn">
                        <a href="#">Read More+</a>
                     </div>
            </div>
        </div>
        <div class="col-sm-4">
        <div class="card" style="width: 18rem;">
                     <?php dynamic_sidebar('card1') ; ?>
                     <div class="read-more-btn">
                        <a href="#">Read More+</a>
                     </div>
            </div>
        </div>
        <div class="col-sm-4">
        <div class="card" style="width: 18rem;">
                     <?php dynamic_sidebar('card1') ; ?>
                     <div class="read-more-btn">
                        <a href="#">Read More+</a>
                     </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Part End -->

<!-- Recent Photo Part Start -->
                <section class="container photo">
                    <div class="row mt-5 text-center">
                        <div class="col-sm-4">
                            <?php dynamic_sidebar('pl') ; ?>
                        </div>
                        <div class="col-sm-4">
                            <?php dynamic_sidebar('ptitile') ; ?>
                        </div>
                        <div class="col-sm-4">
                            <?php dynamic_sidebar('pr') ; ?>
                        </div>
                    </div>

                    <div class="row text-center">
                        <div class="col-sm-3">
                            <div class="card" style="width: 16rem;">
                                <?php dynamic_sidebar('rp1') ; ?>
                            </div>
                        </div>
                        <div class="col-sm-3">
                        <div class="card" style="width: 16rem;">
                                <?php dynamic_sidebar('rp1') ; ?>
                            </div>
                        </div>
                        <div class="col-sm-3">
                        <div class="card" style="width: 16rem;">
                                <?php dynamic_sidebar('rp1') ; ?>
                            </div>
                        </div>
                        <div class="col-sm-3">
                        <div class="card" style="width: 16rem;">
                                <?php dynamic_sidebar('rp1') ; ?>
                            </div>
                        </div>
                    </div>
            

<!-- Recent Photo Part End -->

<!-- News Part Start -->
                <section class="container news">
                    <div class="row mt-5 text-center">
                    <div class="col-sm-4">
                            <?php dynamic_sidebar('pl') ; ?>
                        </div>
                        <div class="col-sm-4">
                            <?php dynamic_sidebar('ntitile') ; ?>
                        </div>
                        <div class="col-sm-4">
                            <?php dynamic_sidebar('pr') ; ?>
                        </div>
                    </div>
                    <div class="row">
                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
  <?php
    $cat=new Wp_query([
        'post_type'=>'post',
        'category_name'=>'slider1'
    ]);
    ?>
<div class="carousel-inner">
    <?php
    $x=0;
    while(have_posts()){the_post();
        $x++;
    ?>
    <div class="carousel-item <?= ($x==1)?'active' : '' ?>">
        <?php the_title();?>
      <!-- <img src="..." class="d-block w-100" alt="..."> -->
    </div>
    <?php }?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
                    </div>
                </section>

<!-- News Part End -->


<!-- Footer Part Start -->
<footer class="container-fluid foot mt-5">
    <div class="container">
        <div class="row ft">
            <div class="col-sm-8 f_left">
                <?php dynamic_sidebar('ftl') ; ?>
            </div>
            <div class="col-sm-4 f_right">
                <?php dynamic_sidebar('ftr') ; ?>
            </div>
        </div>
        <div class="row fb">
            <div class="col-sm-6 fb_left">
                <?php dynamic_sidebar('fbl') ; ?>
            </div>
            <div class="col-sm-6 fb_right">
            <?php dynamic_sidebar('fbr') ; ?>
            </div>
        </div>
    </div>

</footer>
<!-- Footer Part End -->










<?php wp_footer() ; ?>
    
</body>
</html>