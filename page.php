@layout('template-parts.app')

@section('content')

<?php
if( have_posts() ): the_post();

    // Load default block template page
    get_template_part('template-parts/page/content', 'default');

endif;
?>

<?php wp_link_pages(); ?>


@endsection







