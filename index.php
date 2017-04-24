<?php get_header(); ?>

    <section class="ariane">
    	<div class="container">
			<?php the_breadcrumb(); ?>
		</div><!-- /.container -->
    </section><!-- /.ariane -->

    <section class="page">
    	<div class="container">
	    	<div class="row">
	    		<div class="col-xs-12 col-md-9">

            <?php if (have_posts()) : ?>
              <?php while(have_posts()) : the_post(); ?>
                <h1><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h1>
                <p class="metas"><?php _e('Publié le '); ?> <?php the_time('j F Y'); ?> <?php _e('par '); ?> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></p>
                  <div class="row">
                    <div class="col-xs-12 col-sm-3">
                      <?php if(has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('thumbnail'); ?>
                      <?php endif; ?>
                    </div><!-- /.col -->

                    <div class="col-xs-12 col-sm-9">
                      <?php the_excerpt(); ?>
                      <p><a href="<?php the_permalink(); ?>" class="btn btn-primary blanc">Lire l'article</a></p>
                    </div><!-- /.col -->
                </div><!-- /.row -->
              <?php endwhile; ?>


                  <?php
                  // Previous/next page navigation.
                  the_posts_pagination(array(
                    'prev_text' => __( '&laquo;', 'helenedodier' ),
                    'next_text' => __( '&raquo;', 'helenedodier' ),
                    'screen_reader_text' => __( 'Pages', 'helenedodier' ),
                    ));
                  ?>


            <?php else : ?>
              <?php _e('<h1>Aucun article publié</h1>'); ?>
            <?php endif; ?>

	    		</div><!-- /.col -->

	    		<div class="col-xs-12 col-md-3">
	    			<?php if(is_active_sidebar('sidebar-cagnotte')) : ?>
              <?php dynamic_sidebar('sidebar-cagnotte'); ?>     
            <?php endif; ?>

            <?php if(is_active_sidebar('sidebar-logos')) : ?>
              <?php dynamic_sidebar('sidebar-logos'); ?>     
            <?php endif; ?>
	    		</div><!-- /.col -->
	    	</div><!-- /.row -->
    	</div><!-- /.container -->
    </section><!-- /.page -->
    

<?php get_footer(); ?>