<?php
    $classname = '';
    if ( $flex['background'] == 'Primary' ) {
        $classname = 'two_column--primary-background';
  } elseif ( $flex['background'] == 'Secondary' ) {
        $classname = 'two_column--secondary-background';
  } elseif ( $flex['background'] == 'White' ) {
        $classname = 'two_column--white-background';
  } elseif ( $flex['background'] == 'Image' ) {
        $classname = 'two_column--background-image';
  }
?>
<section
    class="component two_column animation-element {{ $flex['class'] ? $flex['class'] : '' }} {{ $classname }}"
    @if($flex['background'] == 'Image')
        style="background-image: url('{{ $flex['background_image'] }}')"
    @endif
>
    <div class="container">
        <div class="row justify-content-lg-between justify-content-sm-center justify-content-md-center justify-content-center row--padding">
            <div class="special-col">
                <x-column :column="$flex['column_1']"/>
            </div>
            <div class="special-col">
                <x-column :column="$flex['column_2']"/>
            </div>
        </div>
    </div>
</section>

