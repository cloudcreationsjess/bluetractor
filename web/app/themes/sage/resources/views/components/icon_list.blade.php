<ul class="icon-list">
    <?php $i = 1; ?>
    @foreach($list as $item)
        <li class="icon-list__item">
            @if($item["icon"])
                <div class="icon-list__icon icon-list__icon__{{ $i }} fade-in animation-delay-{{ $i + 1 }}">{{ the_image($item["icon"]) }}</div>
            @endif
            <div class="icon-list__content fade-in animation-delay-{{ $i + 1 }}">
                @if($item["flex_content"])
                    @foreach($item["flex_content"] as $f)
                        @if($f["acf_fc_layout"] == "title")
                            <h5>{!! $f["title"] !!}</h5>
                        @endif
                        @if($f["acf_fc_layout"] == "content")
                            <p>{!! $f["content"] !!}</p>
                        @endif
                        @if($f["acf_fc_layout"] == "list")
                            <ul>
                                @foreach($f["list"] as $item)
                                    <li>{!! $item["list_item"] !!}</li>
                                @endforeach
                            </ul>
                        @endif
                    @endforeach
                @endif
            </div>
        </li>
        <?php $i++; ?>
    @endforeach
</ul>
