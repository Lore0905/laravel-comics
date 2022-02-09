
<!-- single serie -->
<div class="single-serie">

    @foreach ($comics_list as $single_comic)
        <!-- img-->
        <div class="img-serie">
            <img src="{{ $single_comic['thumb'] }}" alt="">
        </div>

        <!-- title  -->
        <h4>titolo</h4>

    @endforeach


</div>
