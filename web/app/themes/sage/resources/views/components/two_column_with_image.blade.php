<?php
    $classname = '';
?>
<section
    class="component two_column_with_image {{ $flex['reverse_column'] ? 'two_column_with_image--reverse' : '' }} {{ $flex['class'] ? $flex['class'] : '' }} {{ $classname }} {{ $flex['image_is_video'] ? 'two_column_with_image--is-video' : '' }}">
    <div class="container">
        <div class="row justify-content-lg-between justify-content-md-center justify-content-sm-center justify-content-center {{ $flex['class'] != 'our-solution-lion-section' ? 'align-items-center' : '' }} row--padding">
            <div class="special-col {{ $flex['reverse_column'] ? 'order-lg-1 order-2' : 'order-1' }}">
                <x-column :column="$flex['column_1']"/>
            </div>
            <div class="special-col {{ $flex['reverse_column'] ? 'order-lg-2 order-1' : 'order-2' }}">
                <x-column :column="$flex['column_2']"/>
            </div>
        </div>
    </div>
</section>
