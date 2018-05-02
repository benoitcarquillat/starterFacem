<!doctype html>
<html {{language_attributes() }}>

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
<link rel="profile" href="http://gmpg.org/xfn/11">


	 {{-- ENQUEUE your css and js in inc/enqueues.php --}}
    {{wp_head()}}

</head>
<body <?php echo body_class(); ?>>

	<header id="header" role="banner">

		<nav itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement" role="navigation">
        
            <?php
            wp_nav_menu(
                array(
                    'theme_location'  => 'primary', // identifiant du menu, défini dans functions.php
                    'menu_class'      => 'primary-menu', // class du menu
                    'menu_id'         => 'menu', // ID du menu
                    'echo'            => true, //true si on veut écrire le menu, false pour un simple return
                    'before'          => '', // texte à mettre devant le lien
                    'after'           => '', // texte à mettre après le lien
                    'link_before'     => '', // texte par lequel commence le lien
                    'link_after'      => '', // texte par lequel termine le lien
                    'items_wrap'      => '<ul id="\"%1$s\"" class="\"%2$s\"">%3$s</ul>', //défini la forme du menu (ul, ol, rien...)
                    'depth'           => 0, // profondeur de menu admise (0 pour no-limit)
                    'walker'          => new My_Walker() // C'EST CET ELEMENT QUI NOUS INTÉRESSE !!
                )
            );
            ?>
        </nav>
        
    </header>