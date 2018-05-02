@include('template-parts.includes.header')

<section id="content" role="main">
    <section class="entry-section">
        @yield('content')
    </section>
</section>

@include('template-parts.includes.footer')
