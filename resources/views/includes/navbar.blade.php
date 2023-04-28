<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container-fluid">
        <a href="#" class="navbar-brand">Layout One</a>
        <button class="navbar-toggler" type="buttom" data-bs-toggle="collapse" data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>

    <div class="collapse navbar-collapse" id="menu">
        <ul class="navbar-nav me-auto mb-0 mt-0">
            <li class="nav-item">
                <a href="{{route('home')}}" class="nav-link">Home</a>
            </li>

            <li class="nav-item">
                <a href="{{route('about')}}" class="nav-link">About</a>
            </li>

            <li class="nav-item">
                <a href="{{route('service')}}" class="nav-link">Services</a>
            </li>

            <li class="nav-item">
                <a href="{{route('contact')}}" class="nav-link">Contact</a>
            </li>
        </ul>
    </div>
</nav>