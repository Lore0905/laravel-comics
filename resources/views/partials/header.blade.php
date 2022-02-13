

<header>

    {{-- first header --}}
    <div class="f-header">
        <div class="container">
            <ul>
                <li>
                    DC POWER VISA
                </li>
                <li>
                    ADDITIONAL DC SITES
                </li>
            </ul>

        </div>
    </div>

    {{-- second header --}}
    <div class="container">

        <div class="col col-sx">
            <img id="logo" src="{{ asset('images/dc-logo.png')}}" alt="logo">
        </div>
        
        <div class="col col-dx">

            <ul>
                <li >
                    <a href="#" class="{{ Request::route()->getName() === 'details' ? 'active' : '' }}" >CHARACTERS</a>
                </li>
                <li >
                    <a href="/" class="{{ Request::route()->getName() === 'homepage' ? 'active' : '' }}">COMICS</a>
                </li>
                <li >
                    <a href="#">MOVIES</a>
                </li>
                <li >
                    <a href="#">TV</a>
                </li>
                <li >
                    <a href="#">GAMES</a>
                </li>
                <li >
                    <a href="#">COLLECTIBLES</a>
                </li>
                <li >
                    <a href="#">VIDEOS</a>
                </li>
                <li >
                    <a href="#">FANS</a>
                </li>
                <li >
                    <a href="#">NEWS</a>
                </li>
                <li >
                    <a href="#">SHOP</a>
                </li>
                
            </ul>

        </div>

    </div>

</header>
    
