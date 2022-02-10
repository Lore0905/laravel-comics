@extends('layout.app')

@section('page_name')
    Comics 
@endsection

@section('main_content')

    {{-- jumbotron  --}}
    @include('partials.main.jumbotron')

    {{-- comics --}}
    <section class="wrap-serie">

        <!-- text -->
        <div class="banner-text">
            <h3>CURRENT SERIES</h3>
        </div>

        <div class="container">
            
            @include('components.single-comic', [
                'comics_array' => $comics_array
            ])

        </div>
        
        <!-- button -->
        <div class="button-more">
            <button>LOAD MORE</button>
        </div>
            
    </section>

    {{-- second part main --}}
    @include('partials.main.second_part_main')

@endsection