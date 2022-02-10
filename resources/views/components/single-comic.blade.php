

@foreach ($comics_array as $single_comic)

    <!-- single serie -->
    <div class="single-serie">
        <!-- img-->
        <div class="img-serie">
            <img src="{{ $single_comic['thumb'] }}" alt="">
        </div>

        <!-- title  -->
        <h4>{{ $single_comic['title'] }}</h4>

    </div>

@endforeach


