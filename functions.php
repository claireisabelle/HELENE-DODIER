<?php
/*
 * 1 - Register Custom Navigation Walker
 * 2 - Theme Support
 * 3 - Excerpt Customization 'Tronquage texte'
 * 4 - Breadcrumps - Fil d'ariane
 * 5 - Widget locations
 * 6 - Customizer File
 * 7 - Ajout de format / styles pour l'éditeur Tiny MCE
 */




/*
 *
 * 1 - Register Custom Navigation Walker
 *
 */
require_once('wp_bootstrap_navwalker.php');




/*
 *
 * 2 - Theme Support
 *
 */
function wpb_theme_setup(){
    // Nav Menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'helenedodier')
    ));

    // Thumbnails 'Image à la une'
    add_theme_support( 'post-thumbnails' );

    // Post Formats
    add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );

	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	add_theme_support( 'customize-selective-refresh-widgets' );

}

add_action('after_setup_theme', 'wpb_theme_setup');




/*
 *
 * 3 - Excerpt Customization 'Tronquage texte'
 *
 */
function set_excerpt_length(){
     return 35; // longueur du tronquage en nombre de mots
}

add_filter ('excerpt_length', 'set_excerpt_length');




/*
 *
 * 4 - Breadcrumps - Fil d'ariane
 *
 */
function the_breadcrumb() {
	echo '<ol class="breadcrumb">';
		// Si c'est la page d'actualités
		if(is_home()){
			echo '<li><a href="';
			echo get_home_url();
			echo '"><i class="fa fa-home" aria-hidden="true"></i></a></li>';
			echo '<li class="active">Actualités</li>';
		}

		// Si ce n'est pas la page d'actualités...
		if(!is_home()){
			echo '<li><a href="';
			echo get_home_url();
			echo '"><i class="fa fa-home" aria-hidden="true"></i></a></li>';

				//...et que c'est un article, on affiche le lien vers la page d'actualités
				if(is_single()){
					echo '<li><a href="';
					echo get_page_link(11);
					echo '">Actualités</a></li>';
				}

				//...et que c'est une page statique, on affiche les parents éventuels	
				elseif(is_page()){
					$id_post = get_the_ID(); // Récupération de l'ID de la page
					$id_parent = wp_get_post_parent_id($id_post); // Récupération de l'ID du parent de la page

						// Si l'ID du parent est différent de 0, c'est qu'il exite un parent à afficher
						if($id_parent != 0){
							$title_parent = get_the_title($id_parent);
							echo '<li><a href="';
							echo get_page_link($id_parent);
							echo '">';
							echo $title_parent;
							echo'</a></li>';
						}
				}

			echo '<li class="active">';
			echo wp_title('');
			echo '</li>';
		}
	echo '</ol>';
}




/*
 *
 * 5 - Widget locations
 *
 */
function wpb_init_widgets($id){
     register_sidebar(array(
          'name' => 'Logos Partenaires',
          'id' => 'sidebar-logos',
          'before_widget' => '<section class="encart-logos">', 
          'after_widget' => '</section>', 
          'before_title' =>'<p>', 
          'after_title' => '</p>'
     ));

     register_sidebar(array(
          'name' => 'Cagnotte',
          'id' => 'sidebar-cagnotte',
          'before_widget' => '<section class="encart-head"><p>', 
          'after_widget' => '</p></section>', 
          'before_title' =>'<p>', 
          'after_title' => '</p>'
     ));
}

add_action('widgets_init', 'wpb_init_widgets');




/*
 *
 * 6 - Customizer File
 *
 */
require get_template_directory().'/inc/customizer.php';




/*
 *
 * 7 - Ajout de format / styles pour l'éditeur Tiny MCE
 *
 */
require get_template_directory().'/inc/editeur.php';
		