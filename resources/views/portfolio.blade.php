@extends('layouts.app')
@section('content')
<div id="portfolio">
    @if (isset($categories))
    <!-- portfolio -->
    @foreach ($categories as $category)
    @if (sizeOf($category->portfolioItems) > 0)
    <div class="row mt-4 mb-3 justify-content-center">
        <div class="col-xs-10">
            <h1 class="h1 text-center">{{$category->display_title}}</h1>
        </div>
    </div>
    <div class="row justify-content-center">
    @foreach ($category->portfolioItems as $portfolioItem)
        <div class="col-12 col-lg-6 d-flex align-items-stretch">
            <x-portfolio-item :item="$portfolioItem"></x-portfolio-item>
        </div>
    @endforeach
    </div>
    @endif
    @endforeach
    @endif
</div>
@endsection