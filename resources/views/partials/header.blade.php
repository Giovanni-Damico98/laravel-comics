@vite('../../scss/header.scss')
<header>
    <div class="container d-flex align-items-center justify-content-center my-2">
        <nav class="col-12 d-flex align-items-center justify-content-between">
            <div class="header-logo">
                <img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="DC Logo" />
            </div>
            <div class=w-100>
                <ul class="nav-menu list-unstyled gap-3 d-flex ">
                    <li><a href="">Characters</a></li>
                    <li class="active"><a href="">Comics</a></li>
                    <li><a href="">Movies</a></li>
                    <li><a href="">TV</a></li>
                    <li><a href="">Games</a></li>
                    <li><a href="">Collectibles</a></li>
                    <li><a href="">Videos</a></li>
                    <li><a href="">Fans</a></li>
                    <li><a href="">News</a></li>
                    <li><a href="">Shop</a></li>
                </ul>
            </div>
            <div class="w-25">
                <form class="d-flex" role="search" id="search-bar">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </div>
</header>
