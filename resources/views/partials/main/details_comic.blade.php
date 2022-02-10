<section id="details-comic">
    <div class="container">

        <div class="wrapping-col">

            {{-- col --}}
            <div class="col col-dx">
                {{-- title --}}
                <h2>{{$comics_array['title']}}</h2>
                {{-- price --}}
                <div class="wrapping-i-col price-section">

                    {{-- col --}}
                    <div class="col col-i-dx">

                        {{-- price --}}
                        <div>
                            <span class="green-light-green">
                                U.S. Price: 
                            </span>
                            <span>
                                {{$comics_array['price']}}
                            </span>
                        </div>

                        {{-- available --}}
                        <div id="status">
                            <span class="green-light-green">
                                AVAILABLE
                            </span>
                        </div>

                    </div>

                    {{-- col --}}
                    <div class="col col-i-sx">

                        <select name="" id="">
                            <option value="">Check Availability</option>
                        </select>

                    </div>

                </div>

                {{-- paragraph --}}

                <div class="description">
                    <p>{{$comics_array['description']}}</p>
                </div>

            </div>
            
            {{-- col --}}
            <div class="col col-sx">
                <h5>ADVERTISEMENT</h5>
                <div>
                    <img src="{{asset('images/adv.jpg')}}" alt="">
                </div>
            </div>

        </div>

    </div>
</section>