<header>

    <div class="container nav-bar">
        <!-- logo -->
        <div class="logo">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="dc logo" />
        </div>
        <!-- nav -->
        <div class="nav-bar">
            <ul>
                <li>
                    <a class="{{ Route::currentRouteName() === 'home' ? 'active' : '' }}"
                        href="{{ route('home') }}">CHARACTERS</a>
                </li>
                <li>
                    <a class="{{ Route::currentRouteName() === 'comics' ? 'active' : '' }}"
                        href="{{ route('comics') }}">COMICS</a>
                </li>
                <li>
                    <a href="#">MOVIES</a>
                </li>
                <li>
                    <a href="#">TV</a>
                </li>
                <li>
                    <a href="#">GAMES</a>
                </li>
                <li>
                    <a href="#">COLLECTIBLES</a>
                </li>
                <li>
                    <a href="#">VIDEOS</a>
                </li>
                <li>
                    <a href="#">FANS</a>
                </li>
                <li>
                    <a href="#">NEWS</a>
                </li>
                <li>
                    <a href="#">SHOP</a>
                </li>
            </ul>
        </div>
    </div>
</header>
