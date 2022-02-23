<div class="animation-element column {{ array_key_exists('class', $column) ? $column['class'] : '' }}">
    @if($column["column"])
        @foreach($column["column"] as $flex)
            @if($flex["acf_fc_layout"] == "title")
                <h2 class="fade-in {!! $flex['title_class'] !!}">{!! $flex["title"] !!}</h2>
            @endif

            @if($flex["acf_fc_layout"] == "subtitle")
                <h5 class="fade-in animation-delay-2 {!! $flex['subtitle_class'] !!}">{!! $flex["subtitle"] !!}</h5>
            @endif

            @if($flex["acf_fc_layout"] == "icon_list")
                <x-icon_list :list="$flex['icon_list']"/>
            @endif

            @if($flex["acf_fc_layout"] == "content")
                <div class="fade-in animation-delay-3">{!! $flex['content'] !!}</div>
            @endif

            @if($flex["acf_fc_layout"] == "image")
                {{ the_image($flex['image']) }}
            @endif

            @if($flex["acf_fc_layout"] == "ordered_list")
                <x-ordered_list :list="$flex['ordered_list']"/>
            @endif

            @if($flex["acf_fc_layout"] == "video")
                <div class="column-video">{!!  $flex['video'] !!}</div>
            @endif

            @if($flex["acf_fc_layout"] == "testimonial")
                <x-testimonial />
            @endif

        @endforeach
    @endif
</div>
