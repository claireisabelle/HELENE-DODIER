<?php
	function wpb_customize_register($wp_customize){
		// Création de la section bandeau
		$wp_customize->add_section('bandeau', array(
			'title' => __('Bandeau', 'helenedodier'),
			'description' => sprintf(__('Taille pour le bandeau : 2400px sur 860px', 'helenedodier')),
			'priority' => 220
		));

		$wp_customize->add_setting('bandeau_image', array(
			'default' => get_bloginfo('template_directory').'/img/header.jpg',
			'type'    => 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'bandeau_image', array(
			'label' => __('Image du bandeau', 'helenedodier'),
			'section' => 'bandeau',
			'settings' => 'bandeau_image',
			'priority' => 1
		)));

		// BANDEAU ROSE BANDEAU ROSE BANDEAU ROSE
		// Création de la section bandeau rose
		$wp_customize->add_section('bandeau_rose', array(
			'title' => __('Bandeau Rose', 'helenedodier'),
			'description' => sprintf(__('Options pour les encarts du bandeau rose', 'helenedodier')),
			'priority' => 225
		));

		// Bandeau Rose - Titre général
		$wp_customize->add_setting('bandeau_rose_titre', array(
			'default' => _x('Soutenir Hélène...', 'helenedodier'),
			'type' 	  => 'theme_mod'
		));

		$wp_customize->add_control('bandeau_rose_titre', array(
			'label' => __('Titre Général', 'helenedodier'),
			'section' => 'bandeau_rose',
			'priority' => 2
		));

		// Bandeau Rose - Encart 1
		$wp_customize->add_setting('encart1_titre', array(
			'default' => _x('Particuliers', 'helenedodier'),
			'type' 	  => 'theme_mod'
		));

		$wp_customize->add_control('encart1_titre', array(
			'label' => __('Encart 1 - Titre', 'helenedodier'),
			'section' => 'bandeau_rose',
			'priority' => 3
		));

		$wp_customize->add_setting('encart1_icone', array(
			'default' => _x('fa fa-user-circle', 'helenedodier'),
			'type' 	  => 'theme_mod'
		));

		$wp_customize->add_control('encart1_icone', array(
			'label' => __('Encart 1 - Icône', 'helenedodier'),
			'section' => 'bandeau_rose',
			'priority' => 4
		));

		$wp_customize->add_setting('encart1_description', array(
			'default' => _x('Soutenez Hélène en participant au financement de son projet', 'helenedodier'),
			'type' 	  => 'theme_mod'
		));

		$wp_customize->add_control('encart1_description', array(
			'label' => __('Encart 1 - Description', 'helenedodier'),
			'section' => 'bandeau_rose',
			'priority' => 5
		));

		$wp_customize->add_setting('encart1_lien', array(
			'default' => _x('#', 'helenedodier'),
			'type' 	  => 'theme_mod'
		));

		$wp_customize->add_control('encart1_lien', array(
			'label' => __('Encart 1 - URL du lien', 'helenedodier'),
			'section' => 'bandeau_rose',
			'priority' => 6
		));

		$wp_customize->add_setting('encart1_texte_lien', array(
			'default' => _x('Soutenir Hélène', 'helenedodier'),
			'type' 	  => 'theme_mod'
		));

		$wp_customize->add_control('encart1_texte_lien', array(
			'label' => __('Encart 1 - Texte du lien', 'helenedodier'),
			'section' => 'bandeau_rose',
			'priority' => 7
		));

		// Bandeau Rose - Encart 2
		$wp_customize->add_setting('encart2_titre', array(
			'default' => _x('Entreprises', 'helenedodier'),
			'type' 	  => 'theme_mod'
		));

		$wp_customize->add_control('encart2_titre', array(
			'label' => __('Encart 2 - Titre', 'helenedodier'),
			'section' => 'bandeau_rose',
			'priority' => 8
		));

		$wp_customize->add_setting('encart2_icone', array(
			'default' => _x('fa fa-industry', 'helenedodier'),
			'type' 	  => 'theme_mod'
		));

		$wp_customize->add_control('encart2_icone', array(
			'label' => __('Encart 2 - Icône', 'helenedodier'),
			'section' => 'bandeau_rose',
			'priority' => 9
		));

		$wp_customize->add_setting('encart2_description', array(
			'default' => _x('Sponsorisez Hélène et bénéficiez des contre-parties pour votre société', 'helenedodier'),
			'type' 	  => 'theme_mod'
		));

		$wp_customize->add_control('encart2_description', array(
			'label' => __('Encart 2 - Description', 'helenedodier'),
			'section' => 'bandeau_rose',
			'priority' => 10
		));

		$wp_customize->add_setting('encart2_lien', array(
			'default' => _x('#', 'helenedodier'),
			'type' 	  => 'theme_mod'
		));

		$wp_customize->add_control('encart2_lien', array(
			'label' => __('Encart 2 - URL du lien', 'helenedodier'),
			'section' => 'bandeau_rose',
			'priority' => 11
		));

		$wp_customize->add_setting('encart2_texte_lien', array(
			'default' => _x('Sponsoriser Hélène', 'helenedodier'),
			'type' 	  => 'theme_mod'
		));

		$wp_customize->add_control('encart2_texte_lien', array(
			'label' => __('Encart 2 - Texte du lien', 'helenedodier'),
			'section' => 'bandeau_rose',
			'priority' => 12
		));

		// Bandeau Rose - Encart 3
		$wp_customize->add_setting('encart3_titre', array(
			'default' => _x('Institutionnels', 'helenedodier'),
			'type' 	  => 'theme_mod'
		));

		$wp_customize->add_control('encart3_titre', array(
			'label' => __('Encart 3 - Titre', 'helenedodier'),
			'section' => 'bandeau_rose',
			'priority' => 13
		));

		$wp_customize->add_setting('encart3_icone', array(
			'default' => _x('fa fa-institution', 'helenedodier'),
			'type' 	  => 'theme_mod'
		));

		$wp_customize->add_control('encart3_icone', array(
			'label' => __('Encart 3 - Icône', 'helenedodier'),
			'section' => 'bandeau_rose',
			'priority' => 14
		));

		$wp_customize->add_setting('encart3_description', array(
			'default' => _x('Accompagnez Hélène tout au long de la saison sportive', 'helenedodier'),
			'type' 	  => 'theme_mod'
		));

		$wp_customize->add_control('encart3_description', array(
			'label' => __('Encart 3 - Description', 'helenedodier'),
			'section' => 'bandeau_rose',
			'priority' => 15
		));

		$wp_customize->add_setting('encart3_lien', array(
			'default' => _x('#', 'helenedodier'),
			'type' 	  => 'theme_mod'
		));

		$wp_customize->add_control('encart3_lien', array(
			'label' => __('Encart 3 - URL du lien', 'helenedodier'),
			'section' => 'bandeau_rose',
			'priority' => 16
		));

		$wp_customize->add_setting('encart3_texte_lien', array(
			'default' => _x('Accompagner Hélène', 'helenedodier'),
			'type' 	  => 'theme_mod'
		));

		$wp_customize->add_control('encart3_texte_lien', array(
			'label' => __('Encart 3 - Texte du lien', 'helenedodier'),
			'section' => 'bandeau_rose',
			'priority' => 17
		));

		// BULLE BULLE BULLE BULLE BULLE
		// Création de la section bulle
		$wp_customize->add_section('bulle', array(
			'title' => __('Bulles', 'helenedodier'),
			'description' => sprintf(__('Options pour les bulles', 'helenedodier')),
			'priority' => 230
		));

		// BULLE 1
		$wp_customize->add_setting('bulle1_titre', array(
			'default' => _x('Actualités', 'helenedodier'),
			'type' 	  => 'theme_mod'
		));

		$wp_customize->add_control('bulle1_titre', array(
			'label' => __('Bulle 1 Titre', 'helenedodier'),
			'section' => 'bulle',
			'priority' => 2
		));

		$wp_customize->add_setting('bulle1_texte', array(
			'default' => _x('Retrouvez toutes les actualités et infos d\'Hélène', 'helenedodier'),
			'type' 	  => 'theme_mod'
		));

		$wp_customize->add_control('bulle1_texte', array(
			'label' => __('Bulle 1 Texte', 'helenedodier'),
			'section' => 'bulle',
			'priority' => 3
		));

		$wp_customize->add_setting('bulle1_lien', array(
			'default' => _x('#', 'helenedodier'),
			'type' 	  => 'theme_mod'
		));

		$wp_customize->add_control('bulle1_lien', array(
			'label' => __('Bulle 1 Lien', 'helenedodier'),
			'section' => 'bulle',
			'priority' => 4
		));

		$wp_customize->add_setting('bulle1_image', array(
			'default' => get_bloginfo('template_directory').'/img/bulle1.jpg',
			'type'    => 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'bulle1_image', array(
			'label' => __('Bulle 1 Image (carré 300px)', 'helenedodier'),
			'section' => 'bulle',
			'settings' => 'bulle1_image',
			'priority' => 5
		)));


		// BULLE 2
		$wp_customize->add_setting('bulle2_titre', array(
			'default' => _x('Portrait', 'helenedodier'),
			'type' 	  => 'theme_mod'
		));

		$wp_customize->add_control('bulle2_titre', array(
			'label' => __('Bulle 2 Titre', 'helenedodier'),
			'section' => 'bulle',
			'priority' => 6
		));

		$wp_customize->add_setting('bulle2_texte', array(
			'default' => _x('Découvrez le parcours sportif et professionnel de la pilote', 'helenedodier'),
			'type' 	  => 'theme_mod'
		));

		$wp_customize->add_control('bulle2_texte', array(
			'label' => __('Bulle 2 Texte', 'helenedodier'),
			'section' => 'bulle',
			'priority' => 7
		));

		$wp_customize->add_setting('bulle2_lien', array(
			'default' => _x('#', 'helenedodier'),
			'type' 	  => 'theme_mod'
		));

		$wp_customize->add_control('bulle2_lien', array(
			'label' => __('Bulle 2 Lien', 'helenedodier'),
			'section' => 'bulle',
			'priority' => 8
		));

		$wp_customize->add_setting('bulle2_image', array(
			'default' => get_bloginfo('template_directory').'/img/bulle2.jpg',
			'type'    => 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'bulle2_image', array(
			'label' => __('Bulle 2 Image (carré 300px)', 'helenedodier'),
			'section' => 'bulle',
			'settings' => 'bulle2_image',
			'priority' => 9
		)));

		// BULLE 3
		$wp_customize->add_setting('bulle3_titre', array(
			'default' => _x('Objectifs', 'helenedodier'),
			'type' 	  => 'theme_mod'
		));

		$wp_customize->add_control('bulle3_titre', array(
			'label' => __('Bulle 3 Titre', 'helenedodier'),
			'section' => 'bulle',
			'priority' => 10
		));

		$wp_customize->add_setting('bulle3_texte', array(
			'default' => _x('Au programme, un sacré défi : challenger ces messieurs en classe 3 !', 'helenedodier'),
			'type' 	  => 'theme_mod'
		));

		$wp_customize->add_control('bulle3_texte', array(
			'label' => __('Bulle 3 Texte', 'helenedodier'),
			'section' => 'bulle',
			'priority' => 11
		));

		$wp_customize->add_setting('bulle3_lien', array(
			'default' => _x('#', 'helenedodier'),
			'type' 	  => 'theme_mod'
		));

		$wp_customize->add_control('bulle2_lien', array(
			'label' => __('Bulle 3 Lien', 'helenedodier'),
			'section' => 'bulle',
			'priority' => 12
		));

		$wp_customize->add_setting('bulle3_image', array(
			'default' => get_bloginfo('template_directory').'/img/bulle3.jpg',
			'type'    => 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'bulle3_image', array(
			'label' => __('Bulle 3 Image (carré 300px)', 'helenedodier'),
			'section' => 'bulle',
			'settings' => 'bulle3_image',
			'priority' => 13
		)));

		// BULLE 4
		$wp_customize->add_setting('bulle4_titre', array(
			'default' => _x('Galeries', 'helenedodier'),
			'type' 	  => 'theme_mod'
		));

		$wp_customize->add_control('bulle4_titre', array(
			'label' => __('Bulle 4 Titre', 'helenedodier'),
			'section' => 'bulle',
			'priority' => 14
		));

		$wp_customize->add_setting('bulle4_texte', array(
			'default' => _x('Retrouvez toutes les photos et vidéos autour d\'Hélène', 'helenedodier'),
			'type' 	  => 'theme_mod'
		));

		$wp_customize->add_control('bulle4_texte', array(
			'label' => __('Bulle 4 Texte', 'helenedodier'),
			'section' => 'bulle',
			'priority' => 15
		));

		$wp_customize->add_setting('bulle4_lien', array(
			'default' => _x('#', 'helenedodier'),
			'type' 	  => 'theme_mod'
		));

		$wp_customize->add_control('bulle4_lien', array(
			'label' => __('Bulle 3 Lien', 'helenedodier'),
			'section' => 'bulle',
			'priority' => 16
		));

		$wp_customize->add_setting('bulle4_image', array(
			'default' => get_bloginfo('template_directory').'/img/bulle4.jpg',
			'type'    => 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'bulle4_image', array(
			'label' => __('Bulle 4 Image (carré 300px)', 'helenedodier'),
			'section' => 'bulle',
			'settings' => 'bulle4_image',
			'priority' => 17
		)));

		// RESEAUX SOCIAUX RESEAUX SOCIAUX 
		// Création de la section réseaux sociaux
		$wp_customize->add_section('reseaux', array(
			'title' => __('Réseaux Sociaux', 'helenedodier'),
			'description' => sprintf(__('Liens pour les réseaux sociaux', 'helenedodier')),
			'priority' => 240
		));

		$wp_customize->add_setting('facebook_lien', array(
			'default' => _x('#', 'helenedodier'),
			'type' 	  => 'theme_mod'
		));

		$wp_customize->add_control('facebook_lien', array(
			'label' => __('Facebook', 'helenedodier'),
			'section' => 'reseaux',
			'priority' => 2
		));

		$wp_customize->add_setting('twitter_lien', array(
			'default' => _x('#', 'helenedodier'),
			'type' 	  => 'theme_mod'
		));

		$wp_customize->add_control('twitter_lien', array(
			'label' => __('Twitter', 'helenedodier'),
			'section' => 'reseaux',
			'priority' => 3
		));

		$wp_customize->add_setting('youtube_lien', array(
			'default' => _x('#', 'helenedodier'),
			'type' 	  => 'theme_mod'
		));

		$wp_customize->add_control('youtube_lien', array(
			'label' => __('YouTube', 'helenedodier'),
			'section' => 'reseaux',
			'priority' => 4
		));

		
	}

	add_action('customize_register', 'wpb_customize_register');