<!-- Normal Drop Down Menu -->
<?php
$isBlog = is_home();
?>

<header id="header" class="autohide header js__header fixed-to-panel {{ is_home() || is_archive() || is_page("privacy-policy") || is_page("terms-of-use") || is_single() ? 'header--is-blog' : '' }}" role="banner" itemscope itemtype="https://schema.org/WPHeader">
    <div class="container-fluid">
        <div class="row align-items-center">
            <!-- Branding -->
            <div class="col-sm-auto col">
                <div class="header__site-branding">
                    <a id="header__site-branding__logo" class="" href="{{ esc_url(home_url('/')) }}" title="{{ esc_attr(get_bloginfo('name', 'display')) }}" rel="home">
                        @if( is_home() || is_archive()|| is_page("privacy-policy") || is_page("terms-of-use") || is_single() )
                            <img class="logo" src="/app/uploads/2021/10/blue-tractor-logo-color.svg" alt="Logo">
                        @else
                            <img class="logo" src="/app/uploads/2021/10/blue-tractor-logo-white.svg" alt="Logo">
                        @endif
                    </a>
                </div>
            </div>
            <div class="col">
                <!-- Menu -->
                <div class="header__site-menu text-center desktop" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
                    @if (has_nav_menu('primary_navigation'))
                        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_id' => 'main-menu', 'depth' => 2, 'echo' => false]) !!}
                    @endif
                </div>

                <!-- Mobile nav button -->
                <div class="header__site-nav-button-container mobile">
                    <button type="button" id="nav-btn" class="btn btn--nav js--hamburger hamburger hamburger--spin">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>
