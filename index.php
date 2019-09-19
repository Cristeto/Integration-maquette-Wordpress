<?php get_header(); ?>

<header class="min-vh-100">
  <section id="menu">
    <nav class="navbar navbar-expand-lg navbar-dark container p-0">
      <a class="navbar-brand" href="#">
        <img id="logo" src="<?php bloginfo('template_directory'); ?>/img/logo-transparent.png" alt="logo lambda">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#hamburgerButton" aria-controls="hamburgerButton" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse navbar-brand" id="hamburgerButton">
        <ul class="navbar-nav mr-5 ml-auto">
          <li class="nav-item active">
            <a class="nav-link text-white font-weight-bold" href="#row-1">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white font-weight-bold ml-3" href="#food-bg-2">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white font-weight-bold ml-3" href="#row-3">Reservations</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white font-weight-bold ml-3" href="#food-bg-3">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white font-weight-bold ml-3" href="#row-5">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white font-weight-bold ml-3" href="#"><i class="fab fa-twitter"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white font-weight-bold" href="#"><i class="fab fa-facebook-f"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white font-weight-bold" href="#"><i class="fab fa-linkedin-in"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </section>
  <section class="container p-5 mt-5 text-center">
    <h1 id="header-title" class="display-1"><?php bloginfo('name'); ?> </h1>
    <h2 id="" class="display-1"><?php is_front_page() ? bloginfo('description') : wp_title(''); ?></h2>
    <img class="mt-4" src="<?php bloginfo('template_directory'); ?>/img/decor-1-big-white.png" alt="decor-1">
    <div class="display-2">
      <button type="button" class="btn btn-lg btn-outline-light rounded-0 text-uppercase m-2 p-2">Book a table</button>
      <button type="button" class="btn btn-lg btn-outline-light rounded-0 text-uppercase border-0 m-2 p-2" id="see-the-menu">See the menu</button>
    </div>
  </section>
</header>

<main>
  <article id="row-1" class="background-img">
    <section class="min-vh-100 container d-flex flex-column align-content-center">
      <div class="row flex-grow-1 justify-content-center p-5">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="col-12 col-md-5 text-center">
          <h1 class="text-gold"><a class="article" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
          <img class="mt-4" src="<?php bloginfo('template_directory'); ?>/img/decor-2-big-gold.png" alt="decor-2-gold">
          <p class="text-secondary mt-4"><?php the_content(); ?></p>
          <img style="width: 120px; border-radius: 50%;" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
        </div>
      <?php endwhile; else : ?>
            <article>
              <p>Sorry, no posts were found!</p>
            </article>
      <?php endif; ?>

        <!-- <div class="col-12 col-md-7">
          <img class="img-contain img-fluid" src="<?php bloginfo('template_directory'); ?>/img/sample-plate.png" alt="sample-plate">
        </div> -->
      </div>
    </section>
  </article>

<?php next_post_link( $format, $link, $in_same_term = false, $excluded_terms = '', $taxonomy = 'category' ); ?>

  <article id="food-bg-2">
    <section class="min-vh-100 container d-flex flex-column align-content-center">
      <div class="row flex-grow-1 justify-content-center align-items-center">
        <div class="col-12 col-md-6">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <div class="text-block p-3 text-center text-white">
            <h1 class="text gold"><a class="article" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
            <img class="mt-4" src="<?php bloginfo('template_directory'); ?>/img/decor-2-big-white.png" alt="decor-2-white">
            <p class="mt-4"><a class="article" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></p>
          </div>
        <?php endwhile; else : ?>
              <article>
                <p>Sorry, no posts were found!</p>
              </article>
        <?php endif; ?>
        </div>
      </div>
    </section>
  </article>

  <article id="row-3" class="background-img">
    <section class="min-vh-100 container d-flex flex-column align-content-center">
      <div class="row flex-grow-1 justify-content-center align-items-center">
        <div class="col-12 col-md-5 text-center">
          <h1 class="text-gold">Home Made Pasta</h1>
          <img class="mt-4" src="<?php bloginfo('template_directory'); ?>/img/decor-2-big-gold.png" alt="decor-2-gold">
          <p class="text-secondary mt-4">If you’ve been to one of our restaurants, you’ve seen – and tasted – what keeps our customers coming back for more. Perfect materials and freshly baked food, delicious Lambda cakes,  muffins, and gourmet coffees make us hard to resist! Stop in today and check us out!</p>
          <img class="pasta m-3" src="<?php bloginfo('template_directory'); ?>/img/pasta-1.png" alt="chef">
          <img class="pasta m-3" src="<?php bloginfo('template_directory'); ?>/img/pasta-2.png" alt="chef">
          <img class="pasta m-3" src="<?php bloginfo('template_directory'); ?>/img/pasta-3.png" alt="chef">
        </div>
        <div class="col-12 col-md-7">
          <img class="img-contain img-fluid" src="<?php bloginfo('template_directory'); ?>/img/sample-plate.png" alt="sample-plate">
        </div>
      </div>
    </section>
  </article>

  <article id="food-bg-4">
    <section class="min-vh-100 container d-flex flex-column align-content-center">
      <div class="row flex-grow-1 justify-content-center align-items-center">
        <div class="col-0 col-md-6"></div>
        <div class="col-12 col-md-6">
          <div class="text-block p-3 text-center text-white">
            <h2 class="pb-2">Fine ingredients</h2>
            <img src="<?php bloginfo('template_directory'); ?>/img/decor-2-big-white.png" class="img-fluid">
            <p class="p-3">If you’ve been to one of our restaurants, you’ve seen – and tasted – what keeps our customers coming back for more. Perfect materials and freshly baked food, delicious Lambda cakes,  muffins, and gourmet coffees make us hard to resist! Stop in today and check us out!
            </p>
            <ul class="list-unstyled ingredient">
              <li><img src="<?php bloginfo('template_directory'); ?>/img/ingredient_img1.png" alt="responsive img-fluid ingredient 1"></li>
              <li><img src="<?php bloginfo('template_directory'); ?>/img/ingredient_img2.png" alt="responsive img-fluid ingredient 2"></li>
              <li><img src="<?php bloginfo('template_directory'); ?>/img/ingredient_img3.png" alt="responsive img-fluid ingredient 3"></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
  </article>

  <article class="menu background-img">
    <section class="container p-5">
      <div class="row p-5">
        <div class="col-12 col-md-6 text-center">
          <h2>Appetisers</h2>
          <img src="<?php bloginfo('template_directory'); ?>/img/decor-2-big-black.png" class="img-fluid">
          <div class="dish text-left">
            <div class="dish-title row">
              <p class="col-9">Tzatsiki</p>
              <p class="price col-3">$3.99</p>
            </div>
            <p class="m_ingredients row">
              Refreshing traditional cucumber and garlic yoghurt dip.
            </p>
          </div>
          <div class="dish text-left">
            <div class="dish-title row">
              <p class="col-9">Aubergine Salad</p>
              <p class="price col-3">$5.50</p>
            </div>
            <p class="m_ingredients row">
              Pureed eggplant, garlic, green pepper and tomato dip.
            </p>
          </div>
          <div class="dish text-left">
            <div class="dish-title row">
              <p class="col-9">Aubergine Salad</p>
              <p class="price col-3">$5.25</p>
            </div>
            <p class="m_ingredients row">
              Pureed eggplant, garlic, green pepper and tomato dip.
            </p>
          </div>
          <h2>Salads</h2>
          <img src="<?php bloginfo('template_directory'); ?>/img/decor-2-big-black.png" class="img-fluid divider_white">
          <div class="dish text-left">
            <div class="dish-title row">
              <p class="col-9">Olive Special</p>
              <p class="price col-3">$5.99</p>
            </div>
            <p class="m_ingredients row">
              Refreshing traditional cucumber and garlic yoghurt dip.
            </p>
          </div>
          <div class="row special-label">
            <div class="col-9"> </div>
            <p class="col-3">Special</p>
          </div>
          <div class="dish special-dish text-left">
            <div class="dish-title row">
              <p class="col-9">Greek Salad</p>
              <p class="price col-3">$5.50</p>
            </div>
            <p class="m_ingredients row">
              Pureed eggplant, garlic, green pepper and tomato dip.
            </p>
          </div>
          <div class="dish text-left">
            <div class="dish-title row">
              <p class="col-9">Gusto Salad</p>
              <p class="price col-3">$5.25</p>
            </div>
            <p class="m_ingredients row">
              Pureed eggplant, garlic, green pepper and tomato dip.
            </p>
          </div>
        </div>
        <div class="starters col-12 col-md-6 text-center">
          <h2>Starters</h2>
          <img src="<?php bloginfo('template_directory'); ?>/img/decor-2-big-black.png" class="img-fluid divider_white">
          <div class="dish text-left">
            <div class="dish-title row">
              <p class="col-9">Haloumi</p>
              <p class="price col-3">$3.99</p>
            </div>
            <p class="m_ingredients row">
              Refreshing traditional cucumber and garlic yoghurt dip.
            </p>
          </div>
          <div class="dish text-left">
            <div class="dish-title row">
              <p class="col-9">Spinash Pie</p>
              <p class="price col-3">$5.50</p>
            </div>
            <p class="m_ingredients row">
              Pureed eggplant, garlic, green pepper and tomato dip.
            </p>
          </div>
          <h2>Main Dishes</h2>
          <img src="<?php bloginfo('template_directory'); ?>/img/decor-2-big-black.png" class="img-fluid divider_white">
          <div class="dish text-left">
            <div class="dish-title row">
              <p class="col-9">Cornish Mackerel</p>
              <p class="price col-3">$5.99</p>
            </div>
            <p class="m_ingredients row">
              Refreshing traditional cucumber and garlic yoghurt dip.
            </p>
          </div>
          <div class="row special-label">
            <div class="col-9"> </div>
            <p class="col-3">Special</p>
          </div>
          <div class="dish special-dish text-left">
            <div class="dish-title row">
              <p class="col-9">Roast Lamb</p>
              <p class="price col-3">$5.50</p>
            </div>
            <p class="m_ingredients row">
              Pureed eggplant, garlic, green pepper and tomato dip.
            </p>
          </div>
          <div class="dish text-left">
            <div class="dish-title row">
              <p class="col-9">Fried Chicken</p>
              <p class="price col-3">$5.25</p>
            </div>
            <p class="m_ingredients row">
              Pureed eggplant, garlic, green pepper and tomato dip.
            </p>
          </div>
          <div class="dish text-left">
            <div class="dish-title row">
              <p class="col-9">Pastitsio</p>
              <p class="price col-3">$5.99</p>
            </div>
            <p class="m_ingredients row">
              Refreshing traditional cucumber and garlic yoghurt dip.
            </p>
          </div>
        </div>
      </div>
    </section>
  </article>

  <article id="food-bg-3">
    <section class="min-vh-100 container d-flex flex-column align-content-center">
      <div class="row flex-grow-1 justify-content-center align-items-center">
        <div class="col-0 col-md-3"></div>
        <div class="col-12 col-md-6">
          <div class="text-block p-3 text-center">
            <h1 class="text-white">Guest Reviews</h1>
            <img class="mt-4" src="<?php bloginfo('template_directory'); ?>/img/decor-2-big-white.png" alt="decor-2-white">
            <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <p class="text-white mt-4">The ideal spot for any occasion, Lambda Restaurant serves dinner seven nights a week, and serves lunch Monday through Friday, when the room is awash in sunlight.</p>
                  <p class="text-secondary mt-2 mb-5"><small>&mdash; Steakhouse bliss</small></p>
                </div>
                <div class="carousel-item">
                  <p class="text-white mt-4">A charmingly original restaurant in a neighborhood starved for good fare. Greek cuisine with drop-dead delicious ingredients making every entree an experience.</p>
                  <p class="text-secondary mt-2 mb-5"><small>&mdash; Farm House</small></p>
                </div>
                <ol class="carousel-indicators">
                  <li class="rounded-btn" data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
                  <li class="rounded-btn" data-target="#carouselIndicators" data-slide-to="1"></li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <div class="col-0 col-md-3"></div>
      </div>
    </section>
  </article>

  <article id="row-5" class="background-img">
    <section class="min-vh-100 container d-flex flex-column align-content-center">
      <div class="row flex-grow-1 justify-content-center align-items-center">
        <div class="col-12 col-md-7">
          <img class="img-contain img-fluid m-3" src="<?php bloginfo('template_directory'); ?>/img/food-left.jpg" alt="food-left">
          <img class="img-contain img-fluid m-3" src="<?php bloginfo('template_directory'); ?>/img/food-right.jpg" alt="food-right">
        </div>
        <div class="col-12 col-md-5 text-center">
          <h1 class="text-gold">Book Your Table</h1>
          <img class="mt-4" src="<?php bloginfo('template_directory'); ?>/img/decor-2-big-gold.png" alt="decor-2-gold">
          <p class="text-secondary mt-4">If you’ve been to one of our restaurants, you’ve seen – and tasted – what keeps our customers coming back for more. Perfect materials and freshly baked food, delicious Lambda cakes,  muffins, and gourmet coffees make us hard to resist! Stop in today and check us out!</p>
          <form class="text-left">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label class="text-gold font-weight-bold" for="inputEmail4">Your email</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Your email*">
              </div>
              <div class="form-group col-md-6">
                <label class="text-gold font-weight-bold" for="inputDate">When?</label>
                <input type="date" class="form-control" id="inputDate" placeholder="">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label class="text-gold font-weight-bold" for="input5">What time ?</label>
                <select id="input5" class="form-control">
                  <option selected>18:00</option>
                  <option>18:30</option>
                  <option>19:00</option>
                  <option>19:30</option>
                  <option>20:00</option>
                  <option>20:30</option>
                  <option>21:00</option>
                  <option>21:30</option>
                </select>
              </div>
              <div class="form-group col-md-6">
                <label class="text-gold font-weight-bold" for="input4">Party Size</label>
                <select id="input4" class="form-control">
                  <option selected>Choose...</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                  <option>6</option>
                  <option>7</option>
                  <option>8</option>
                </select>
              </div>
            </div>
            <div class="text-center">
              <button type="submit" id="btn-gold" class="btn btn btn-lg btn-outline-light rounded-0 border-0 m-2 pl-3 pr-3">Book my table</button>
            </div>
          </form>
        </div>
      </div>
    </section>
  </article>

</main>

<footer>
  <section class="container p-5">
    <div class="row">
      <div class="col-12 col-md-4 text-center">
        <h5 class="text-white mt-3">About Us</h5>
        <img class="mt-2 mb-2 decor-small" src="<?php bloginfo('template_directory'); ?>/img/decor-2-big-white.png" alt="decor-2-white">
        <p class="text-secondary">Lambda's new and expanded Chelsea location represents a truly <span class="text-white">authentic</span> Greek patisserie, featuring breakfasts of fresh croissants and steaming bowls of café. </p>
      </div>
      <div class="col-12 col-md-4 text-center">
          <h5 class="text-white mt-3">Opening Hours</h5>
          <img class="mt-2 mb-2 decor-small" src="<?php bloginfo('template_directory'); ?>/img/decor-2-big-white.png" alt="decor-2-white">
          <p class="text-secondary"><span class="text-white">Mon-Thu:</span> 7:00am-8:00pm<br><span class="text-white">Fri-Sun:</span> 7:00am-10:00pm</p>
          <p>
            <a class="text-white" href="#"><i class="fab fa-cc-amex mr-2"></i></a>
            <a class="text-white" href="#"><i class="fab fa-paypal mr-2"></i></a>
            <a class="text-white" href="#"><i class="fas fa-university mr-2"></i></a>
            <a class="text-white" href="#"><i class="fab fa-cc-mastercard mr-2"></i></a>
            <a class="text-white" href="#"><i class="fab fa-google-wallet mr-2"></i></a>
            <a class="text-white" href="#"><i class="fab fa-credit-card mr-2"></i></a>
          </p>
      </div>
      <div class="col-12 col-md-4 text-center">
        <h5 class="text-white mt-3">Location</h5>
        <img class="mt-2 mb-2 decor-small" src="<?php bloginfo('template_directory'); ?>/img/decor-2-big-white.png" alt="decor-2-white">
        <p class="text-secondary">19th Paradise Street Sitia<br>128 Meserole Avenue </p>
        <p class="text-white">
          <a class="text-white" href="#"><i class="fab fa-twitter mr-2"></i></a>
          <a class="text-white" href="#"><i class="fab fa-facebook-f mr-2"></i></a>
          <a class="text-white" href="#"><i class="fab fa-linkedin-in mr-2"></i></a>
        </p>
      </div>
    </div>
  </section>
</footer>

<?php get_footer(); ?>
