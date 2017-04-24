<?php
//  1° Personnalisation de l'éditeur : ajoute le bouton "FORMAT"
function mon_theme_mce_buttons_2($buttons) { 
	array_unshift($buttons, 'styleselect');  
	return $buttons;
}
add_filter('mce_buttons_2', 'mon_theme_mce_buttons_2');

// 2° Ajout d'une feuille de style pour l'éditeur
function mon_theme_add_editor_styles() {   
	add_editor_style( 'custom-editor-style.css' );
}
add_action( 'init', 'mon_theme_add_editor_styles' );

// 3° Ajout des nouveaux styles
function my_mce_before_init_insert_formats( $init_array ) {  
	$style_formats = array(      
	// Chaque array défini 1 style    
	array(        
	'title' => 'Couleur rose',        
	'inline' => 'span',        
	'classes' => 'rose',      
	'wrapper' => false,    
	),    
	);    
	// On ajoute nos style a ceux existant  
	$init_array['style_formats'] = json_encode( $style_formats );    
	return $init_array;  
}
add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats');