<?php
    $classname = '';
    if ( $flex['button_color'] == 'orange' ) {
        $classname = 'btn--primary';
    } elseif ( $flex['button_color'] == 'teal' ) {
        $classname = 'btn--secondary';
    } elseif ( $flex['button_color'] == 'border' ) {
        $classname = 'btn--third';
    }
?>
<section class="component button_section animation-element">
    <div class="container row--padding">
        <a target="_blank" href="{{ $flex['button_link'] }}" class="btn btn--primary">{!! $flex['button_label'] !!}</a>
    </div>
</section>