@layout('template-parts.app')

@section('content')
<section class="entry-section">
    <h1 class="page-title">
        <?php _e( '404', 'facem' ); //@TODO : change i18n domain name to yours ?>
    </h1>
    <article class="entry">
        <section class="entry-content">
            <?php _e( 'Page not found', 'facem' ); //@TODO : change i18n domain name to yours ?>

                <p>Lorem ipsum</p>
        </section>
    </article>
</section>
@endsection