<section class="component title_with_two_column {{ $flex['class'] ? $flex['class'] : '' }}">
    <div class="container">
        <div class="row row--padding animation-element fade-in">
            {!! $flex['title'] !!}
        </div>
        <div class="row justify-content-between row--padding">
            <div class="special-col">
                <x-column :column="$flex['column_1']"/>
            </div>
            <div class="special-col">
                <x-column :column="$flex['column_2']"/>
            </div>
        </div>
    </div>
</section>