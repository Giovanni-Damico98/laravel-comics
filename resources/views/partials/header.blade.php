@vite('../../scss/header.scss')
<header>
    <div class="container d-flex align-items-center justify-content-center my-2">
        <nav class="col-12 d-flex align-items-center justify-content-between">
            <div class="header-logo">
                <img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="DC Logo" />
            </div>
            <div class="w-100 justify-content-center d-flex">
                <ul class="nav-menu list-unstyled gap-3 d-flex ">
                    <li class="fw-bold fs-4 text-center"><a href="{{ route('pages.home') }}">HOME</a></li>
                </ul>
            </div>
            <div class="w-25">
                <form class="d-flex" role="search" id="search-bar">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Cerca</button>
                </form>
            </div>
        </nav>
    </div>
</header>
