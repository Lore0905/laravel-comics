
<section class="section-talent-specs">
    <div class="container">
        <div class="wrapping-talent-specs">

            <div class="col">
                <h4>Talent</h4>

                {{-- art by --}}
                <div class="section-talent">
                    <h5>Art by:</h5>

                    {{-- articst --}}
                    <div>
                        <ul class="list">
                            @foreach ($comics_array['artists'] as $artist) 
                                <li>{{$artist}} ,</li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                {{-- written by --}}
                <div class="section-talent">
                    <h5>Written by:</h5>

                    {{-- articst --}}
                    <div>
                        <ul class="list">
                            @foreach ($comics_array['writers'] as $writers) 
                                <li>{{$writers}} ,</li>
                            @endforeach
                        </ul>
                    </div>
                </div>

            </div>

            {{-- Specs --}}
            <div class="col">
                <h4>Specs</h4>

                {{-- serie --}}
                <div class="section-specs">
                    <h5>Series:</h5>

                    {{-- value --}}
                    <div>
                        {{ $comics_array['series'] }}
                    </div>
                </div>

                {{-- serie --}}
                <div class="section-specs">
                    <h5>U.S. Price:</h5>

                    {{-- value --}}
                    <div>
                        {{ $comics_array['price'] }}
                    </div>
                </div>

                {{-- serie --}}
                <div class="section-specs">
                    <h5>On sale date:</h5>

                    {{-- value --}}
                    <div>
                        {{ $comics_array['sale_date'] }}
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>