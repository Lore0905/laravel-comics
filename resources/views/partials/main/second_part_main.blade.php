
<section id="second-part-main" >
    <div class="container">
        @foreach($second_part_main as $item)
            <!-- col -->
            <div class="col">
                <div class="col-img">
                    <img src="{{ asset('/images/'.$item['img']) }} " alt="{{$item['img']}}">
                </div>
                <div class="col-text">
                    {{ $item['text'] }}
                </div>
            </div> 
        @endforeach
    </div>
</section>

