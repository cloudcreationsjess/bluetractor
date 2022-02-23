@extends('layouts.app')

@section('content')
    <?php
    global $posts;
    $paged = get_query_var('paged') ? absint(get_query_var('paged')) : 1;
    $posts_per_page = 16;
    $categories = get_categories();


    $params = [
        'post_type'      => 'post',
        'post_status'    => 'publish',
        'posts_per_page' => $posts_per_page,
        'paged'          => $paged,
    ];

    query_posts($params);
    ?>
    <div class="container animation-element fade-in">
        <h1>News & Resources</h1>
        <div class="filter">
            <span>Filter by:</span>
            <div class="filter__search-box">
                <div class="filter__search-box__title">All</div>
                <button type="button" class="js--category-button filter__search-box__button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30.96" height="16.56" viewBox="0 0 30.96 16.56">
                        <defs>
                            <style>.a {
                                    fill: #fff;
                                }</style>
                        </defs>
                        <path class="a" d="M25,31.352a1.255,1.255,0,0,1,0,1.762,1.224,1.224,0,0,1-1.744,0L9.166,18.88a1.255,1.255,0,0,1,0-1.762L23.26,2.884a1.224,1.224,0,0,1,1.744,0,1.255,1.255,0,0,1,0,1.762L12.15,18,25,31.352Z" transform="translate(-2.519 25.365) rotate(-90)"/>
                    </svg>
                </button>
            </div>
            <div class="filter__dropdown">
                @foreach($categories as $category)
                    <a href="/category/{{ $category->slug }}">{{ $category->name }}</a>
                @endforeach
            </div>
        </div>
        @if( have_posts() )
            <div class="grid" data-masonry='{ "columnWidth": ".grid-sizer", "itemSelector": ".grid-item", "gutter": 20, "horizontalOrder": true }'>
                <div class="grid-sizer"></div>
                @while( have_posts()) @php( the_post() )
                <?php
                $id = get_the_ID();
                $cats = get_the_category($id);
                $name = $cats[0]->name;
                ?>
                <div class="grid-item">
                @if( $name != 'Resources')

                    <!-- News or Regulatory -->
                        <div class="component blog-post">
                            <div class="blog-post__category {{ $name == 'Regulatory Update' ? 'blog-post__category__regulatory' : '' }}">
                                <a href="/category/{{ $cats[0]->slug }}">{{ $name }}</a>
                            </div>
                            <div class="blog-post__date">{{ get_the_date() }}</div>
                            @if( get_field('read_more') )
                                <div class="blog-post__excerpt">
                                    {{ wp_trim_words( get_the_excerpt(), 20, ' ...' ) }}
                                </div>
                                <a href="{{ get_the_permalink() }}" class="btn btn-secondary blog-post__button">Read
                                    more</a>
                            @else
                                <div class="blog-post__content">
                                    {!! get_the_content() !!}
                                </div>
                            @endif
                        </div>

                @else

                    <!-- Resources -->
                        <div class="component blog-post blog-post--resource">
                            <div class="blog-post__category blog-post__category__resources">
                                <a href="/category/{{ $cats[0]->slug }}">{{ $cats[0]->name }}</a>
                            </div>
                            <div class="blog-post__icon">
                                <img src="{{ get_field('icon') }}" alt="">
                            </div>
                            <div class="blog-post__excerpt">
                                {!! the_title() !!}
                            </div>
                            <div class="blog-post__icon-large">
                                <img src="{{ get_field('icon') }}" alt="">
                            </div>
                            <a class="blog-post--resources__download" href="{{ get_field('file_uploader') }}" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="27.5" viewBox="0 0 26 27.5">
                                    <g id="ourSolution-icon-download" transform="translate(-5 -5.001)">
                                        <path id="Union_43" data-name="Union 43" d="M11384,9698.5a4,4,0,0,1-4-4v-3a1,1,0,0,1,2,0v3a2,2,0,0,0,2,2h18a2,2,0,0,0,2-2v-3a1,1,0,0,1,2,0v3a4.005,4.005,0,0,1-4,4Zm9-7.5h-.049l-.041,0h-.007a1,1,0,0,1-.655-.336l-7.455-7.454a1,1,0,0,1,1.414-1.414l5.791,5.791V9672a1,1,0,0,1,2,0v15.586l5.794-5.793a1,1,0,0,1,1.414,1.414l-7.487,7.486a.992.992,0,0,1-.671.307Z" transform="translate(-11375 -9666)" fill="#fff"/>
                                    </g>
                                </svg>
                                <span>Download</span>
                            </a>
                        </div>

                    @endif
                </div>
                @endwhile
            </div>

            <!-- Pagination -->
            <div class="row justify-content-center">
                <div class="col-auto">
                    <?php
                    global $wp_query;
                    global $page, $numpages, $multipage, $more;

                    if ( is_singular() ) {
                        $page_key = 'page';
                        $paged = $page;
                        $max = $numpages;
                    } else {
                        $page_key = 'paged';
                        $paged = get_query_var('paged') ? absint(get_query_var('paged')) : 1;
                        $max = $wp_query->max_num_pages;
                    }

                    $big = 999999999; // need an unlikely integer
                    $output = '<div class="pagination">';
                    $output .= paginate_links(array(
                        'base'      => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                        'format'    => '?paged=%#%',
                        'current'   => max(1, get_query_var('paged')),
                        'total'     => $max,
                        //$q is your custom query
                        'prev_text' => __('<i class="fas fa-angle-left"></i>'),
                        'next_text' => __('<i class="fas fa-angle-right"></i>'),
                        //        'add_args' => array('boat_type'=>$boat_type,'no_of_passengers'=>$number_of_passengers)
                    ));
                    $output .= '</div><!-- navigation ENDS -->';
                    if ( $max > 1 ) {
                        echo $output;
                    }
                    ?>
                </div>
            </div>
        @else
            <h2>No Posts Found</h2>
        @endif
        @php( wp_reset_query())
    </div>
@endsection
