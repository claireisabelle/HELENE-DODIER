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
							
							<h1><?php the_title() ?></h1>
							<?php the_content(); ?>
						<?php endwhile; ?>

					<?php else : ?>
					<?php __('Erreur survenue'); ?>
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