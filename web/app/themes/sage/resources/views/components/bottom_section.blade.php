<section
        class="component bottom_section animation-element"
        style="background-image: url('{{ $flex['background_image'] }}')"
>
    <div class="container">
        <div class="row">
            <div class="col-12">
                @if($flex['flex_content'])
                    @foreach($flex['flex_content'] as $f)
                        @if($f['acf_fc_layout'] == 'title')
                            <h2 class="slide-in-left">{!! $f['title'] !!}</h2>
                        @endif

                        @if($f['acf_fc_layout'] == 'content')
                                {!! $f['content'] !!}
                        @endif

                        @if($f['acf_fc_layout'] == 'button')
                            <div class="row">
                                <div class="col-12">
                                    <div class="bottom_section__button-container fade-in animation-delay-3">
                                        <a href="{{ $f['button']['button_link'] }}" class="btn btn--primary">{!! $f['button']['button_text'] !!}</a>
                                        {!! $f['button']['after_button_content'] !!}
                                    </div>
                                </div>
                            </div>
                        @endif

                    @endforeach
                @endif
            </div>
        </div>

        @if($f == ['secondary_content'])
            {{ $f['secondary_content'] }}
        @endif

    </div>
</section>