<section class="component leadership_team_section animation-element">
    <div class="container">
        <div class="row">
            <div class="col-12 justify-content-center">
                <h2 class="fade-in">{!! $flex['title'] !!}</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            @if($flex['team_members'])
                <?php $i = 1 ?>
                @foreach($flex['team_members'] as $tm)
                    <div class="col-lg-4 col-md-6">
                        <div class="leadership_team_section__member-container_member fade-in animation-delay-{{ $i + 1 }}">
                            <img src="{{$tm['team_member']['image']}}" alt="">
                            <h4>{{$tm['team_member']['name']}}</h4>
                            <h5>{{$tm['team_member']['position']}}</h5>
                            <p>{!! $tm['team_member']['content'] !!}</p>
                        </div>
                    </div>
                    <?php $i++ ?>
                @endforeach
            @endif
        </div>
    </div>
</section>