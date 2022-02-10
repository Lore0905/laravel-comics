@extends('layout.app')

@section('page_name')
    Comics-details
@endsection

@section('main_content')

    {{-- jumbotron  --}}
    @include('partials.main.jumbotron')
    {{-- blue bar --}}
    @include('partials.main.blu_bar')
    {{-- details comic --}}
    @include('partials.main.details_comic', [
        'comics_array' => $comics_array
    ])

    

    

@endsection