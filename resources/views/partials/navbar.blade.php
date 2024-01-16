{{-- Navbar --}}
<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
        <a class="navbar-brand" href="/Home">WEB UPT</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ ($active === "home") ? 'active' : '' }}" href="/Home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($active === "about") ? 'active' : '' }}" href="/About">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($active === "blog") ? 'active' : '' }}" href="/Post">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($active === "category") ? 'active' : '' }}" href="/Categories">Category</a>
                </li>
            </ul>
        </div>
    </div>
</nav> {{-->>> Navbar End --}}