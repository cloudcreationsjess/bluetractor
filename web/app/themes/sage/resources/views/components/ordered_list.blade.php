<ul class="ordered-list">
    <?php $i = 1; ?>
    @foreach($list as $item)
        <li class="ordered-list__item">
            <div class="ordered-list__icon fade-in animation-delay-{{ $i + 2 }}">{{ $i }}</div>
            <div class="ordered-list__content slide-in-left animation-delay-{{ $i + 2 }}">
                @if($item["list_item"])
                    @foreach($item["list_item"] as $f)
                        @if($f["acf_fc_layout"] == "heading")
                        <h5>{!! $f["heading"] !!}</h5>
                        @endif
                        @if($f["acf_fc_layout"] == "sub_list")
                            <ol>
                                @foreach($f["sub_list_item"] as $item)
                                    <li>{!! $item["item"] !!}</li>
                                @endforeach
                            </ol>
                        @endif
                    @endforeach
                @endif
            </div>
        </li>
        <?php $i++ ?>
    @endforeach
</ul>