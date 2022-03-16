<nav class="py-2 bg-light border-bottom">
    <div class="container d-flex flex-wrap">
        <ul class="nav me-auto">
            <li class="nav-item"><a href="#" class="nav-link link-dark px-2 active" aria-current="page">Go to Seller Ceter</a></li>
            <li class="nav-item"><a href="#" class="nav-link link-dark px-2">Join As Seller</a></li>
            <li class="nav-item"><a href="#" class="nav-link link-dark px-2">Download</a></li>
            <li class="nav-item"><a href="#" class="nav-link link-dark px-2"><i class="bi bi-facebook"></i></i></a></li>
            <li class="nav-item"><a href="#" class="nav-link link-dark px-2"><i class="bi bi-instagram"></i></a></li>
        </ul>
        <ul class="nav">
            @auth
            <li class="nav-item"><a href="#" class="nav-link link-dark px-2">{{Auth::user()->name}}</a></li>
            <li class="nav-item"><a href="{{route('user')}}" class="nav-link link-dark px-2">Manage User</a></li>
            <li class="nav-item"><a href="{{route('logout')}}" class="nav-link link-dark px-2">Logout</a></li>
            @endauth
            @guest
            <li class="nav-item"><a href="{{route('formlogin')}}" class="nav-link link-dark px-2">Login</a></li>
            @endguest
            {{-- @if (Auth::check())
            <li class="nav-item"><a href="#" class="nav-link link-dark px-2">{{Auth::user()->name}}</a></li>
            <li class="nav-item"><a href="#" class="nav-link link-dark px-2">Change Password</a></li>
            <li class="nav-item"><a href="{{route('logout')}}" class="nav-link link-dark px-2">Logout</a></li>
            @else
            <li class="nav-item"><a href="{{route('formlogin')}}" class="nav-link link-dark px-2">Login</a></li>
            @endif --}}
            
        </ul>
    </div>
</nav>
<header id="navbar_top" class="navbar py-3 mb-4 border-bottom bg-light">
    <div class="container d-flex flex-wrap justify-content-center">
        <div class="col-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" fill="currentColor" class="bi bi-bootstrap-fill" viewBox="0 0 16 16">
            <path d="M6.375 7.125V4.658h1.78c.973 0 1.542.457 1.542 1.237 0 .802-.604 1.23-1.764 1.23H6.375zm0 3.762h1.898c1.184 0 1.81-.48 1.81-1.377 0-.885-.65-1.348-1.886-1.348H6.375v2.725z"/>
            <path d="M4.002 0a4 4 0 0 0-4 4v8a4 4 0 0 0 4 4h8a4 4 0 0 0 4-4V4a4 4 0 0 0-4-4h-8zm1.06 12V3.545h3.399c1.587 0 2.543.809 2.543 2.11 0 .884-.65 1.675-1.483 1.816v.1c1.143.117 1.904.931 1.904 2.033 0 1.488-1.084 2.396-2.888 2.396H5.062z"/>
            </svg>
            <span class="fs-4">Bootstrap</span>
        </div>
        <div class="col-10">
            <form class="col-12 mb-3 mb-lg-0">
                <div class="input-group">
                    <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
                    <span class="input-group-text" id="basic-addon1">
                        <i class="bi bi-search"></i>
                    </span>
                </div>
            </form>
        </div>
    </div>
</header>