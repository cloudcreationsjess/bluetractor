<section
        class="component home_bottom_section animation-element"
        style="background-image: url('{{ $flex['background_image'] }}')"
>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <h2>{!! $flex['title'] !!}</h2>
                @if($flex['button'])
                    <a href="{{ $flex['button']['button_link'] }}" class="btn btn--primary">{!! $flex['button']['button_label'] !!}</a>
                @endif
            </div>
        </div>
    </div>
    <div class="container home-bottom__bottom-container">
        <div class="row justify-content-end">
            <div class="col-lg-7 col-md-12">
                <div class="home_bottom_section__secondary-button-container">
                    <div class="home_bottom_section__secondary-button-container__inner">
                        {!! $flex['content'] !!}
                        <div class="home_bottom_section__secondary-button-container__inner--buttons">
                            @if( $flex['secondary_button'])
                                <a href="{{ $flex['secondary_button']['button_link'] }}" class="btn btn--secondary">{!! $flex['secondary_button']['button_label'] !!}</a>
                            @endif
                            @if ( $flex['third_button'])
                                <a target="_blank" href="{{ $flex['third_button']['button_url'] }}" class="btn btn--primary">{!! $flex['third_button']['button_label'] !!}</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
