<?php get_header(); ?>

    <!-- Header-->
    <?php
      if (have_posts()):
        while (have_posts()): the_post();
    ?>

    <?php if (has_post_thumbnail( )): ?>
      <header data-background=" <?php the_post_thumbnail_url('large') ?>" class="intro introhalf">
    <?php endif; ?>

    <?php if (!has_post_thumbnail( )): ?>
      <header data-background=" <?php echo get_template_directory_uri() ?>/img/9.jpg" class="intro introhalf">
    <?php endif; ?>


      <!-- Intro Header-->
      <div class="intro-body">
        <div class="container">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <?php the_title( "<h2>", "</h2>" ); ?>
            </div>
          </div>
        </div>
      </div>
    </header>
    <?php

        endwhile;
      endif;
    ?>

    <section id="news-single" class="section-small">
      <div class="container">
        <div class="row">
          <?php
            if (have_posts()):
              while (have_posts()): the_post();
                get_template_part( 'template/content', 'page' );
              endwhile;
            endif;
          ?>

          <div class="col-md-3 col-md-offset-1">

            <h4>search</h4>
            <form action="#" method="post" class="form-inline subscribe-form">
              <div class="input-group input-group-lg">
                <input type="search" name="search" placeholder="Search..." class="form-control"><span class="input-group-btn">
                  <button type="submit" name="search" class="btn btn-dark"><i class="fa fa-search fa-lg"></i></button></span>
              </div>
            </form>
            <hr>
            <h4>categories</h4>
            <ul class="list-unstyled">
              <li><a href="#">Design</a></li>
              <li><a href="#">Frameworks</a></li>
              <li><a href="#">Lifestyle</a></li>
              <li><a href="#">Fashion</a></li>
              <li><a href="#">Web Development</a></li>
              <li><a href="#">Front End</a></li>
            </ul>
            <hr>
            <h4>Partners</h4>
            <div class="row no-pad">
              <div class="col-md-6 col-sm-3">
                <p><a href="client-single.html"><img src="img/clients/logo1.png" alt="" class="img-responsive"></a></p>
              </div>
              <div class="col-md-6 col-sm-3">
                <p><a href="client-single.html"><img src="img/clients/logo3.png" alt="" class="img-responsive"></a></p>
              </div>
              <div class="col-md-6 col-sm-3">
                <p><a href="client-single.html"><img src="img/clients/logo5.png" alt="" class="img-responsive"></a></p>
              </div>
              <div class="col-md-6 col-sm-3">
                <p><a href="client-single.html"><img src="img/clients/logo6.png" alt="" class="img-responsive"></a></p>
              </div>
            </div>
            <hr>
            <h4>subscribe</h4>
            <p>Sign up with your email address to receive news and updates.</p>
            <!-- MailChimp Signup Form - Replace the form action in the line below with your MailChimp embed action! For more information on how to do this please visit the Docs!-->
            <form id="mc-embedded-subscribe-form" action="http://forbetterweb.us11.list-manage.com/subscribe/post?u=4f751a6c58b225179404715f0&amp;id=18fc72763a" method="post" name="mc-embedded-subscribe-form" target="_blank" novalidate="" class="form-inline subscribe-form">
              <div class="input-group input-group-lg">
                <input id="mce-EMAIL" type="email" name="EMAIL" placeholder="Email address..." class="form-control"><span class="input-group-btn">
                  <button id="mc-embedded-subscribe" type="submit" name="subscribe" class="btn btn-dark">go</button></span>
                <div id="mce-responses"></div>
                <div id="mce-error-response" style="display:none" class="response"></div>
                <div id="mce-success-response" style="display:none" class="response"></div>
              </div>
            </form>
            <!-- End MailChimp Signup Form--><img src="img/misc/mailchimp.png" alt="">
          </div>
        </div>
      </div>
    </section>

<?php get_footer(); ?>
