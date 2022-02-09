@extends('layout.app')

@section('page_name')
    Comics 
@endsection

@section('main_content')
    <section>
        
        <div class="container">
            @include('components.comics-list')
        </div>

    </section>
@endsection