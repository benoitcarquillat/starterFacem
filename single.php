@layout('template-parts.app')
@section('content')

<?php
if( have_posts() ): the_post();
    get_template_part('template-parts/post/content', 'single');
endif;
?>

{{ wp_link_pages() }}

@endsection



