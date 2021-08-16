<div class="navbar navbar-expand-md navbar-dark bg-primary">
    <div class="container-fluid">
        <a href="/" class="navbar-brand"> Vauvenhauser Open House</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navigationCenter" aria-controls="navigationCenter" aria-expanded="false" aria-label="Navbar on smol">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navigationCenter">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('tag') ? 'active' : '' }}" href="/tag">Tags</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('media') ? 'active' : '' }}" href="/media">Media</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('guestbook') ? 'active' : '' }}" href="/guestbook">Guestbook</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('login') ? 'active' : '' }}" href="/login">Login</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('register') ? 'active' : '' }}" href="/register">Register</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('messaging') ? 'active' : '' }}" href="/messaging">Messaging</a>
                </li>
            </ul>
        </div>
    </div>
</div>
