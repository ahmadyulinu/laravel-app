<!-- Header-->
<nav class="navbar navbar-expand-sm navbar-dark">
    <h5 class="navbar-brand" style="margin-left: 2%; margin-top: -0.5%">
        <span><a href="/">TechHub</a></span> - Admin
    </h5>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        @guest
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/"><span>home</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" onclick="light()">
                    light
                </a>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item mr-2">
                <a href="/login"><button class="btn btn-outline-secondary">Login</button></a>
            </li>
        </ul>

        @else
        <ul class="navbar-nav ml-auto identifier">
            <!-- Authentication Links -->
            <li class="nav-item mr-2">
                <a href="/admin">
                    <button class="btn btn-outline-secondary">
                        Dashboard
                    </button></a>
            </li>
            <li class="nav-item mr-2">
                <a href="{{ route('register') }}"><button class="btn btn-outline-secondary">Register
                        Account</button></a>
            </li>
            <li class="nav-item">
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="">
                    @csrf
                    <button class="btn btn-outline-secondary" type="submit">{{ __("Logout") }}</button>
                </form>
        </ul>
        @endguest
    </div>
</nav>