

@foreach ($comics_array as $single_comic)

    <a href="details/{{$single_comic['id']}}" class="link-serie">
        <!-- single serie -->
        <div class="single-serie">
            <!-- img-->
            <div class="img-serie">
                <img src="{{ $single_comic['thumb'] }}" alt="{{ $single_comic['title'] }}">
            </div>

            <!-- title  -->
            <h4>{{ $single_comic['title'] }}</h4>

        </div>
    </a>

@endforeach


