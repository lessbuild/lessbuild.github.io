@extends('_layouts.master')

<!-- Header -->
@push('header')
    @component('_layouts.partials.header', [
        'image' => 'https://i.imgur.com/3eljYNZ.png',
        'title' => $page->sitename,
        'description' => 'Do you want a professional website built in little to no time? <br>
         We pride ourselves on building your website quickly and beautifully.'
    ])
        @slot('buttons')
            <a
                href="/"
                class="mr-3 bg-primary shadow border border-primary font-bold rounded py-4 px-8 uppercase tracking-wider"
            >Portfolio</a>
        @endslot
    @endcomponent
@endpush
<!-- // Header -->


@section('body')
    <!-- Features !-->
    <div class="px-16 mb-10 bg-white flex flex-wrap">

        <!-- Build with confidence !-->
        @component('_layouts.partials.bullet', [
            'title' => 'Build with confidence',
            'description' => 'Get your website and/or app built with confidence. We have over 15 years of experience'
        ])
            @slot('icon')
                <i class="mdi mdi-feature-search-outline"></i>
            @endslot
        @endcomponent
        <!-- // Build with confidence !-->

        <!-- Quick and Easy !-->
        @component('_layouts.partials.bullet', [
            'title' => 'Quick and Easy',
            'description' => 'We pride ourselves on the work we do, but we also know you are on a timescale'
        ])
            @slot('icon')
                <i class="mdi mdi-map-search-outline"></i>
            @endslot
        @endcomponent
        <!-- // Quick and Easy !-->

        <!-- Beautiful designs !-->
        @component('_layouts.partials.bullet', [
            'title' => 'Beautiful designs',
            'description' => 'We know customers judge your company on the look of your website, that is why we build beautiful websites'
        ])
            @slot('icon')
                <i class="mdi mdi-find-replace"></i>
            @endslot
        @endcomponent
        <!-- // Beautiful designs !-->

        <!-- Beautiful designs !-->
        @component('_layouts.partials.bullet', [
            'title' => 'Responsive',
            'description' => 'All of the websites we build look just as beautiful on the mobile as they do the desktop'
        ])
            @slot('icon')
                <i class="mdi mdi-cellphone"></i>
            @endslot
        @endcomponent
        <!-- // Beautiful designs !-->

    </div>
    <!-- // Features !-->

    <!-- Portfolio !-->
    <div class="px-16 my-10 bg-primary">
        <div class="text-center sm:text-left">
            <span class="text-2xl font-bold text-darker mb-1">
                Portfolio
            </span>
            <h3 class="text-dark mb-10">
                Here you can see some of the applications {{ $page->sitename }} has created or helped create
            </h3>
        </div>
        <div class="flex flex-col md:flex-row">
            @foreach($portfolios as $portfolio)
            <a
                href="{{ $portfolio->getUrl() }}"
                class="w-full md:w-1/3 rounded overflow-hidden mb-6 md:mb-0 flex flex-col"
            >
                <div class="h-48 xl:h-64 bg-gray-200 overflow-hidden rounded m-2 order-2 md:order-1">
                    <img
                        loading="lazy"
                        src="{{ $portfolio['image'] ?? '' }}"
                        class="w-full h-full object-cover">
                </div>
                <div class="mt-3 order-1 md:order-2">
                    <div class="flex">
                        <div class="m-2 flex-1 leading-snug w-0">
                            <h4 class="whitespace-no-wrap text-darker font-bold truncate hover:text-dark">
                                {{ $portfolio['title'] }}
                            </h4>
                            <p class="text-sm text-dark">
                                {{ $portfolio['description'] }}
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
@stop