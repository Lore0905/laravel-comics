@extends('layout.app')

@section('page_name')
    Comics-details
@endsection

@section('main_content')

    {{-- jumbotron  --}}
    @include('partials.main.jumbotron')
    {{-- card --}}
    @include('partials.main.card-comic', [
        'comics_array' => $comics_array
    ]))
    {{-- details comic --}}
    @include('partials.main.details_comic', [
        'comics_array' => $comics_array
    ])
    {{-- talent and specs --}}
    @include('partials.main.talent_specs_comic', [
        'comics_array' => $comics_array
    ])

    

    

@endsection