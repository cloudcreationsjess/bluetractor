<?php
$params = [
    'post_type'   => 'testimonial',
    'post_status' => 'publish',
    'order'       => 'DESC',
];

$testimonials = new WP_Query($params);
?>

<div class="events__slider animation-element fade-in">
    @if( $testimonials->have_posts() )
        <div class="swiper-2" id="swiper-testimonial">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                @while( $testimonials->have_posts()) @php( $testimonials->the_post() )
                <div class="swiper-slide">
                    <div class="swiper-slide__quote">
                        {!! get_field('quote') !!}
                    </div>
                    <div class="swiper-slide__people">
                        @if( get_field('authors') )
                            @foreach ( get_field('authors') as $author)
                                <div class="swiper-slide__person">
                                    <div class="swiper-slide__person--name">{{ $author['name'] }},</div>
                                    <div class="swiper-slide__person--position">{{ $author['title'] }}</div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <div class="swiper-slide__company">{{ get_field('company') }}</div>
                </div>
                @endwhile
            </div>
            <div class="swiper-pagination"></div>
            <div id="swiper-next1" class="swiper-button-prev"></div>
            <div id="swiper-next2" class="swiper-button-next"></div>
        </div>
    @endif
    <?php wp_reset_query(); ?>
</div>

