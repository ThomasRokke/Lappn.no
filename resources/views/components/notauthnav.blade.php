

<div class="navbar-fixed">
    <nav id="nav-container" class="transparent lighten-1 z-depth-0 navigation" role="navigation">
        <div class="nav-wrapper container"><a id="logo-container" href="{{ route('index') }}" class="brand-logo brand-logo-zero">Lappn.no</a>
            <ul class="right hide-on-med-and-down">
                <li class="#"><a  href="/introquiz">Introquiz</a></li>
                <li class="login-toggle"><a  href="{{route('login')}}">Logg inn</a></li>
                <li class="login-toggle"><a  href="{{route('register')}}">Registrer bruker</a></li>

            </ul>
            <a id="mobile-trigger" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
    </nav>
</div>


<ul id="mobile-demo" class="sidenav left-aligned">

    <br>
    <li class="#"><a  href="/introquiz">Introquiz</a></li>

    <li class="login-toggle"><a  href="{{route('login')}}">Logg inn</a></li>
    <li class="login-toggle"><a  href="{{route('register')}}">Registrer bruker</a></li>
</ul>