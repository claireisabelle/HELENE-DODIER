<?php get_header(); ?>

	<section class="showcase">
      <img src="<?php echo get_theme_mod('bandeau_image', get_bloginfo('template_url').'/img/header.jpg'); ?>" class="img-responsive" alt="" title="" />
    </section>

    <section class="bandeau-rose">
      <div class="container">
        <h2 class="text-center"><?php echo get_theme_mod('bandeau_rose_titre', 'Soutenir Hélène...'); ?></h2>
        <div class="row">
          
          <div class="col-xs-12 col-md-4">
            <h3><i class="<?php echo get_theme_mod('encart1_icone', 'fa fa-user-circle'); ?>" aria-hidden="true"></i> 
            <?php echo get_theme_mod('encart1_titre', 'Particuliers'); ?></h3>
            <p><?php echo get_theme_mod('encart1_description', 'Soutenez Hélène en participant au financement de son projet'); ?></p>
            <p class="text-center"><a class="btn btn-primary" href="<?php echo get_theme_mod('encart1_lien', '#'); ?>">
            <?php echo get_theme_mod('encart1_texte_lien', 'Soutenir Hélène'); ?></a></p>
          </div><!-- /.col -->
          
          <div class="col-xs-12 col-md-4">
            <h3><i class="<?php echo get_theme_mod('encart2_icone', 'fa fa-industry'); ?>" aria-hidden="true"></i> 
            <?php echo get_theme_mod('encart2_titre', 'Entreprises'); ?></h3>
            <p><?php echo get_theme_mod('encart2_description', 'Sponsorisez Hélène et bénéficiez des contre-parties pour votre société'); ?></p>
            <p class="text-center"><a class="btn btn-primary" href="<?php echo get_theme_mod('encart2_lien', '#'); ?>">
            <?php echo get_theme_mod('encart2_texte_lien', 'Sponsoriser Hélène'); ?></a></p>
          </div><!-- /.col -->

          <div class="col-xs-12 col-md-4">
            <h3><i class="<?php echo get_theme_mod('encart3_icone', 'fa fa-institution'); ?>" aria-hidden="true"></i> 
            <?php echo get_theme_mod('encart3_titre', 'Institutionnels'); ?></h3>
            <p><?php echo get_theme_mod('encart3_description', 'Accompagnez Hélène tout au long de la saison sportive'); ?></p>
            <p class="text-center"><a class="btn btn-primary" href="<?php echo get_theme_mod('encart3_lien', '#'); ?>">
            <?php echo get_theme_mod('encart3_texte_lien', 'Accompagner Hélène'); ?></a></p>
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
            <p class="text-center"><img src="<?php echo get_theme_mod('bulle1_image', get_bloginfo('template_url').'/img/bulle1.jpg'); ?>" class="img-circle" alt="" title="" width="180px" /></p>
            <h3><?php echo get_theme_mod('bulle1_titre', 'Actualités'); ?></h3>
            <p class="description"><?php echo get_theme_mod('bulle1_texte', 'Retrouvez toutes les actualités et informations d\'Hélène'); ?></p>
            <p class="description"><a href="<?php echo get_theme_mod('bulle1_lien', '#'); ?>"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> <?php echo get_theme_mod('bulle1_titre', 'Actualités'); ?></a></p>
          </div><!-- /.col -->

          <div class="col-xs-12 col-sm-6 col-md-3">
            <p class="text-center"><img src="<?php echo get_theme_mod('bulle2_image', get_bloginfo('template_url').'/img/bulle2.jpg'); ?>" class="img-circle" alt="" title="" width="180px" /></p>
            <h3><?php echo get_theme_mod('bulle2_titre', 'Portrait'); ?></h3>
            <p class="description"><?php echo get_theme_mod('bulle2_texte', 'Découvrez le parcours sportif et professionnel de la pilote'); ?></p>
            <p class="description"><a href="<?php echo get_theme_mod('bulle2_lien', '#'); ?>"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> <?php echo get_theme_mod('bulle2_titre', 'Portrait'); ?></a></p>
          </div><!-- /.col -->

          <div class="col-xs-12 col-sm-6 col-md-3">
            <p class="text-center"><img src="<?php echo get_theme_mod('bulle3_image', get_bloginfo('template_url').'/img/bulle3.jpg'); ?>" class="img-circle" alt="" title="" width="180px" /></p>
            <h3><?php echo get_theme_mod('bulle3_titre', 'Objectifs'); ?></h3>
            <p class="description"><?php echo get_theme_mod('bulle3_texte', 'Au programme, un sacré défi : challenger ces messieurs en classe 3 !'); ?></p>
            <p class="description"><a href="<?php echo get_theme_mod('bulle3_lien', '#'); ?>"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> <?php echo get_theme_mod('bulle3_titre', 'Objectifs'); ?></a></p>
          </div><!-- /.col -->

          <div class="col-xs-12 col-sm-6 col-md-3">
            <p class="text-center"><img src="<?php echo get_theme_mod('bulle4_image', get_bloginfo('template_url').'/img/bulle4.jpg'); ?>" class="img-circle" alt="" title="" width="180px" /></p>
            <h3><?php echo get_theme_mod('bulle4_titre', 'Galeries'); ?></h3>
            <p class="description"><?php echo get_theme_mod('bulle4_texte', 'Retrouvez toutes les photos et vidéos autour d\'Hélène'); ?></p>
            <p class="description"><a href="<?php echo get_theme_mod('bulle4_lien', '#'); ?>"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> <?php echo get_theme_mod('bulle4_titre', 'Galeries'); ?></a></p>
          </div><!-- /.col -->

        </div><!-- /.row -->

      </div><!-- /.container -->
    </section><!-- /.MAIN CONTENT -->

<?php get_footer(); ?>