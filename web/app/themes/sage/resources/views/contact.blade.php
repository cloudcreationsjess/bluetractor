{{--
  Template Name: Contact
--}}

@extends('layouts.app')

@section('content')
    <?php
    $params = [
        'post_type'   => 'events',
        'post_status' => 'publish',
        'order'       => 'DESC',
    ];

    $events = new WP_Query($params);
    ?>
    <section class="contact-us__splash animation-element" style="background-image: url('{{ get_field('splash_background') }}')">
        <div class="container">
            <div class="splash-content">
                <h1 class="slide-in-left">{!! get_field('splash_title') !!}</h1>
            </div>
        </div>
        <div class="splash-events-container fade-in animation-delay-2">
            <div class="events">
                <div class="events__title-box">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48.213" height="53.525" viewBox="0 0 48.213 53.525">
                        <path id="contactUs-icon-calendar" d="M2737.312,12335.262a4.968,4.968,0,0,1-4.963-4.963v-37.08a4.965,4.965,0,0,1,4.963-4.96h3.405V12287a4.292,4.292,0,0,1,8.584,0v1.26h12.46V12287a4.294,4.294,0,0,1,8.587,0v1.26h4.25a4.965,4.965,0,0,1,4.963,4.96v37.08a4.968,4.968,0,0,1-4.963,4.963Zm-2.963-4.963a2.965,2.965,0,0,0,2.963,2.963H2774.6a2.965,2.965,0,0,0,2.963-2.963v-28.375h-43.213Zm0-37.08v6.705h43.213v-6.705a2.964,2.964,0,0,0-2.963-2.96h-4.25v1.5a4.266,4.266,0,0,1-4.263,4.26h-.065a4.263,4.263,0,0,1-4.26-4.26v-1.5H2749.3v1.5a4.264,4.264,0,0,1-4.26,4.26h-.065a4.264,4.264,0,0,1-4.26-4.26v-1.5h-3.405A2.964,2.964,0,0,0,2734.349,12293.219Zm29.413-6.22v4.758a2.26,2.26,0,0,0,2.26,2.26h.065a2.263,2.263,0,0,0,2.263-2.26V12287a2.294,2.294,0,0,0-4.588,0Zm-21.045,0v4.758a2.26,2.26,0,0,0,2.26,2.26h.065a2.26,2.26,0,0,0,2.26-2.26V12287a2.293,2.293,0,0,0-4.585,0Zm24.4,38.477a2.484,2.484,0,1,1,2.486,2.483A2.485,2.485,0,0,1,2767.118,12325.476Zm-9.1,0a2.483,2.483,0,1,1,2.483,2.483A2.482,2.482,0,0,1,2758.022,12325.476Zm-9.1,0a2.483,2.483,0,1,1,2.483,2.483A2.482,2.482,0,0,1,2748.924,12325.476Zm-9.1,0a2.483,2.483,0,1,1,2.483,2.483A2.482,2.482,0,0,1,2739.826,12325.476Zm27.292-8a2.484,2.484,0,1,1,2.486,2.482A2.485,2.485,0,0,1,2767.118,12317.471Zm-9.1,0a2.483,2.483,0,1,1,2.483,2.482A2.483,2.483,0,0,1,2758.022,12317.471Zm-9.1,0a2.483,2.483,0,1,1,2.483,2.482A2.483,2.483,0,0,1,2748.924,12317.471Zm-9.1,0a2.483,2.483,0,1,1,2.483,2.482A2.483,2.483,0,0,1,2739.826,12317.471Zm27.292-8.006a2.484,2.484,0,1,1,2.486,2.482A2.485,2.485,0,0,1,2767.118,12309.465Zm-9.1,0a2.483,2.483,0,1,1,2.483,2.482A2.482,2.482,0,0,1,2758.022,12309.465Zm-9.1,0a2.483,2.483,0,1,1,2.483,2.482A2.482,2.482,0,0,1,2748.924,12309.465Z" transform="translate(-2731.849 -12282.236)" fill="#00c7b1" stroke="rgba(0,0,0,0)" stroke-miterlimit="10" stroke-width="1"/>
                    </svg>
                    {{ get_field('events_title') }}
                </div>
                <div class="events__slider">
                    @if( $events->have_posts() )
                        <div class="swiper">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                @while( $events->have_posts()) @php( $events->the_post() )
                                <div class="swiper-slide">
                                    <div class="swiper-slide__dates">
                                        @if((get_field('start_date')))
                                            <span class="start-date">
                                                <span class="month">{{ date('M', strtotime(get_field('start_date'))) }}</span>
                                                <span class="day">{{ date('d', strtotime(get_field('start_date'))) }}</span>
                                            </span>
                                        @endif

                                        @if((get_field('end_date')))
                                            <span class="dash">-</span>
                                            <span class="end-date">
                                                <span class="month">{{ date('M', strtotime(get_field('end_date'))) }}</span>
                                                <span class="day">{{ date('d', strtotime(get_field('end_date'))) }}</span>
                                                <span class="year">{{ date('Y', strtotime(get_field('end_date'))) }}</span>
                                            </span>
                                        @endif
                                    </div>
                                    <h5>{!!  get_the_title() !!}</h5>
                                    <p>{{ get_field('content') }}</p>
                                    <span class="location-link">
                                        <p>{{ get_field('location') }}</p>
                                        <a target="_blank" href="//{{ get_field('link') }}" rel="noreferrer">{{ get_field('link_display_name') }}</a>
                                    </span>
                                </div>
                                @endwhile
                            </div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-pagination"></div>
                        </div>
                    @else
                        <div class="swiper-no-posts">There are no upcoming events.</div>
                    @endif
                    <?php wp_reset_query(); ?>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-us__form-section animation-element">
        <div class="row">
            <div class="col-lg-7">
                <div class="contact-us__form-section__col-1 fade-in">
                    <h2>{{ get_field('contact_form_title') }}</h2>
                    {!! do_shortcode( get_field('contact_form_shortcode') ) !!}
                </div>
            </div>
            <div class="col-lg-5">
                <div class="contact-us__form-section__col-2 fade-in animation-delay-2">
                    <div class="contact-us__form-section__col-2__content">
                        <h2>{{ get_field('contact_title') }}</h2>
                        {{ get_field('phone_text') }}
                        <a href="tel:{{ get_field('phone_number') }}">{{ get_field('phone_number') }}</a>
                        {{ get_field('email_text') }}
                        <a href="mailto:{{ get_field('email_address') }}">{{ get_field('email_address') }}</a>
                        {{ get_field('address_text') }}
                        <p class="location">{!! get_field('location') !!}</p>
                        <a class="map" href="{{ get_field('location_map_link') }}" target="_blank">
                            View in maps
                            <svg style="" xmlns="http://www.w3.org/2000/svg" width="14.531" height="14.531" viewBox="0 0 14.531 14.531">
                                <path id="contactUs-icon-arrow-open" d="M9.656,6.75V8.2H18.8L6.75,20.257l1.024,1.024L19.828,9.227v9.148h1.453V6.75Z" transform="translate(-6.75 -6.75)" fill="#ff6a39"/>
                            </svg>
                        </a>
                    </div>
                    {!!  get_field('map') !!}
                </div>
            </div>
        </div>

    </section>
@endsection
