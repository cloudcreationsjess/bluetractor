@extends('layouts.app')

@section('content')
    @while(have_posts()) @php(the_post())
    <?php
    $id = get_the_ID();
    $cats = get_the_category($id);
    $name = $cats[0]->name;
    $categories = get_categories();
    ?>
    <div class="container">
        <h1>News & Resources</h1>
        <div class="blog-post">
            <div class="blog-post__content">
                <div class="blog-post__category {{ $name == 'Regulatory Update' ? 'blog-post__category__regulatory' : '' }}">
                    <a href="/category/{{ $cats[0]->slug }}">{{ $name }}</a>
                </div>
                <div class="blog-post__date">{{ get_the_date() }}</div>
                <div class="blog-post__excerpt">
                    {!! get_the_content() !!}
                </div>
                @if( get_previous_post_link() )
                    <div class="blog-post__button">
                        {!! get_previous_post_link('%link', 'Previous', true) !!}
                    </div>
                @endif
                @if( get_next_post_link() )
                    <div class="blog-post__button">
                        {!! get_next_post_link('%link', 'Next', true) !!}
                    </div>
                @endif
            </div>
        </div>
    </div>
    @endwhile
@endsection
