<?php get_header(); ?>

	<section class="showcase">
      <img src="<?php bloginfo('template_url'); ?>/img/header.jpg" class="img-responsive" alt="" title="" />
    </section>

    <section class="bandeau-rose">
      <div class="container">
        <h2 class="text-center">Soutenir Hélène...</h2>
        <div class="row">
          <div class="col-xs-12 col-md-4">
            <h3><i class="fa fa-user-circle" aria-hidden="true"></i> Particuliers</h3>
            <p>Omitto iuris dictionem in libera civitate contra leges senatusque consulta; caedes relinquo; libidines praetereo</p>
            <p class="text-center"><a class="btn btn-primary" href"">Soutenir Hélène</a></p>
          </div><!-- /.col -->
          <div class="col-xs-12 col-md-4">
            <h3><i class="fa fa-industry" aria-hidden="true"></i> Entreprises</h3>
            <p>Omitto iuris dictionem in libera civitate contra leges senatusque consulta; caedes relinquo; libidines praetereo</p>
            <p class="text-center"><a class="btn btn-primary" href"">Sponsoriser Hélène</a></p>
          </div><!-- /.col -->
          <div class="col-xs-12 col-md-4">
            <h3><i class="fa fa-institution" aria-hidden="true"></i> Institutionnels</h3>
            <p>Omitto iuris dictionem in libera civitate contra leges senatusque consulta; caedes relinquo; libidines praetereo</p>
            <p class="text-center"><a class="btn btn-primary" href"">Accompagner Hélène</a></p>
          </div><!-- /.col -->                    
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!--/.BANDEAU ROSE -->

    <section class="main-content">
      <div class="container">
		<?php if (have_posts()) : ?>
			<?php while(have_posts()) : the_post(); ?>
			  <h1><?php the_title() ?></h1>
			  <?php the_content(); ?>
			<?php endwhile; ?>

		<?php else : ?>
			<?php __('Erreur survenue'); ?>
		<?php endif; ?>

        <div class="row section-bulle">
          <div class="col-xs-12 col-sm-6 col-md-3">
            <p class="text-center"><img src="<?php bloginfo('template_url'); ?>/img/bulle1.jpg" class="img-circle" alt="" title="" width="180px" /></p>
            <h3>Actualités</h3>
            <p class="description">Ibi victu recreati et quiete, postquam abierat timor, vicos opulentos adorti equestrium adventu cohortium</p>
            <p class="description"><a href=""><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Actualités</a></p>
          </div><!-- /.col -->
          <div class="col-xs-12 col-sm-6 col-md-3">
            <p class="text-center"><img src="<?php bloginfo('template_url'); ?>/img/bulle2.jpg" class="img-circle" alt="" title="" width="180px" /></p>
            <h3>Portrait</h3>
            <p class="description">Ibi victu recreati et quiete, postquam abierat timor, vicos opulentos adorti equestrium adventu cohortium</p>
            <p class="description"><a href=""><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Portrait</a></p>
          </div><!-- /.col -->
          <div class="col-xs-12 col-sm-6 col-md-3">
            <p class="text-center"><img src="<?php bloginfo('template_url'); ?>/img/bulle3.jpg" class="img-circle" alt="" title="" width="180px" /></p>
            <h3>Objectifs</h3>
            <p class="description">Ibi victu recreati et quiete, postquam abierat timor, vicos opulentos adorti equestrium adventu cohortium</p>
            <p class="description"><a href=""><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Objectifs</a></p>
          </div><!-- /.col -->
          <div class="col-xs-12 col-sm-6 col-md-3">
            <p class="text-center"><img src="<?php bloginfo('template_url'); ?>/img/bulle4.jpg" class="img-circle" alt="" title="" width="180px" /></p>
            <h3>Galeries</h3>
            <p class="description">Ibi victu recreati et quiete, postquam abierat timor, vicos opulentos adorti equestrium adventu cohortium</p>
            <p class="description"><a href=""><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Galeries</a></p>
          </div><!-- /.col -->
        </div><!-- /.row -->

      </div><!-- /.container -->
    </section><!-- /.MAIN CONTENT -->

<?php get_footer(); ?>