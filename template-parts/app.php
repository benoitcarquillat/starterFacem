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
		<nav>
			Je suis la nav y'a quoi? 
		</nav>
    </header>
    
	<section id="content" role="main">
        <section class="entry-section">
            @yield('content')
        </section>
    </section>

    <footer id="footer">
    </footer>
    {{wp_footer()}}
</body>
</html>