@extends('web.pages.template')

@section('content')
    <!-- top adspace 1-->
    @include('web.pages.adspaces.top_adspace_1')
    <!-- Nav menu -->
    @include('web.pages.common.nav_menu')
    <!-- Search filter -->
    <div class="filter-container border mx-3 mb-4">
        @include('web.pages.common.search_filters')
        <!-- top adspace 2-->
        <div class="mb-4">
            @include('web.pages.adspaces.top_adspace_2')
        </div>
    </div>
    <!-- Featured Network -->
    <div class="container mt-4">
        <div class="mx-3">
            <div class="row row-cols-auto">
                {{-- @if ($networks->isNotEmpty())
                    @include('web.pages.search.search_result')
                @endif --}}
                {{-- * get review search --}}
                {{-- @if ($networks_review->isNotEmpty())
                    @include('web.pages.search.search_review')
                @endif --}}



                @include('web.pages.search.search_result')
                {{-- @include('web.pages.search.search_review') --}}
                <!-- ###################  side component  ############# -->
                <div class="col-md-5 col-sm-12">
                    <!-- top network -->
                    @include('web.pages.common.top_network')
                    <!-- top adspace 4-->
                    @include('web.pages.adspaces.top_adspace_4')
                    <!-- featured network -->
                    @include('web.pages.common.featured_network')
                </div>
            </div>
        </div>
    </div>
    @include('web.pages.adspaces.top_adspace_3')

    {{-- Seo Tag adding --}}
@section('seo')
    <title>{{ $seo_meta[9]['name'] }}</title>
    <meta name="title" content="{{ $seo_meta[9]['meta_title'] }}">
    <meta name="description" content="{{ $seo_meta[9]['meta_description'] }}">
    <meta name="keywords" content="{{ $seo_meta[9]['meta_keywords'] }}">
@endsection
@endsection
