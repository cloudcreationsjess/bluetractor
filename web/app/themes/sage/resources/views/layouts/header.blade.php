<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">

    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="theme-color" content="#253746"/>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

    @yield('styles')

    @stack('header.scripts')

    @php(wp_head())

<!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-BVB8M2ZGEV"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-BVB8M2ZGEV');
    </script>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-KCS3BFP');</script>
    <!-- End Google Tag Manager -->

</head>

<body @php(body_class()) >

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KCS3BFP"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

@php(wp_body_open())

@php(do_action('get_header'))

<div id="app">
    <div id="panel"><!-- Needed for mobile menu. This is what slides when you click mobile menu button -->
        <div class="mobile-popout">
            <nav class="mobile-menu mobile">
                <div id="site-navigation">
                    <div class="mobile-menu__site-menu text-center" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
                        @if (has_nav_menu('mobile'))
                            {!! wp_nav_menu(['theme_location' => 'mobile', 'menu_id' => 'mobile-menu', 'depth' => 3]) !!}
                        @endif
                    </div>
                </div>
            </nav>
        </div>


@include('partials.nav')

{{--        @include('partials.mega-nav')--}}
