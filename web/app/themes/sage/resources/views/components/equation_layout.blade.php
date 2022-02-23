
<section
    class="animation-element component equation_layout"
>
    <img src="{{ $flex['background_image'] }}" class="equation_layout__bg"/>
    <img src="{{ $flex['mobile_image'] }}" class="equation_layout__bg--mobile"/>
    <div class="container">
        <div class="row row--padding justify-content-center">
            <div class="col-12">
                <ul class="equation-list">
                    <?php $i = 1 ?>
                    @foreach($flex['equation'] as $equation)
                        <li class="fade-in animation-delay-{{ $i + 1 }} equation-list__item {{ $equation['is_symbol'] ? 'equation-list__item--is-symbol' : '' }} {{ $equation['is_mobile_full_width'] ? 'equation-list__item--is_mobile_full_width' : '' }}">
                            <div class="equation-list__item__icon">
                                {{ the_image($equation['icon']) }}
                            </div>
                            @if(! $equation['is_symbol'])
                                <p>{{ $equation['text'] }}</p>

                            @endif
                        </li>
                        <?php $i++ ?>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>

