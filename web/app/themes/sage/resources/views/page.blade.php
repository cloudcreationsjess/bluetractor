@extends('layouts.app')

@section('content')
{{--    Flex content Demo --}}
    @php($flexible = get_field('flex_content'))
    @if($flexible)
        @foreach ($flexible as $flex)

            @if($flex['acf_fc_layout'] == 'splash')
                <x-splash :flex="$flex" />
            @endif

            @if($flex['acf_fc_layout'] == 'two_column')
                <x-two_column :flex="$flex" />
            @endif

            @if($flex['acf_fc_layout'] == 'two_column_with_image')
                <x-two_column_with_image :flex="$flex" />
            @endif

            @if($flex['acf_fc_layout'] == 'equation_layout')
                <x-equation_layout :flex="$flex" />
            @endif

            @if($flex['acf_fc_layout'] == 'home_bottom_section')
                <x-home_bottom_section :flex="$flex" />
            @endif

            @if($flex['acf_fc_layout'] == 'leadership_team_section')
                <x-leadership_team_section :flex="$flex" />
            @endif

            @if($flex['acf_fc_layout'] == 'about_us_bottom')
                <x-about_us_bottom :flex="$flex" />
            @endif

            @if($flex['acf_fc_layout'] == 'full_width_image')
                <x-full_width_image :flex="$flex" />
            @endif

            @if($flex['acf_fc_layout'] == 'title_with_two_column')
                <x-title_with_two_column :flex="$flex" />
            @endif

            @if($flex['acf_fc_layout'] == 'bottom_section')
                <x-bottom_section :flex="$flex" />
            @endif

            @if($flex['acf_fc_layout'] == 'button_section')
                <x-button_section :flex="$flex" />
            @endif

        @endforeach
    @endif

@endsection
