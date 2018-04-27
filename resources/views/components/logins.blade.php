<div class="navbar-fixed">
    <nav id="nav-container" class="light-blue lighten-1 z-depth-0 navigation" role="navigation">
        <div class="nav-wrapper container"><a id="logo-container" href="{{route('index')}}" class="brand-logo">Lappn.no</a>
            <ul class="right hide-on-med-and-down">
                <li {{ (Request::is('introquiz') ? 'class=active' : '') }} ><a  href="{{route('introquiz')}}">Introquiz</a></li>
                <li {{ (Request::is('login') ? 'class=active' : '') }}><a  href="{{route('login')}}">Logg inn</a></li>
                <li {{ (Request::is('register') ? 'class=active' : '') }}><a  href="{{route('register')}}">Registrer</a></li>

            </ul>
            <a id="mobile-trigger" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
    </nav>

</div>

<ul id="mobile-demo" class="sidenav left-aligned">
    <br>

    <li ><a  href="{{route('introquiz')}}">Introquiz</a></li>
    <li><div class="divider"></div></li>
    <li {{ (Request::is('login') ? 'class=active' : '') }}><a  href="{{route('login')}}">Logg inn</a></li>
    <li><div class="divider"></div></li>
    <li {{ (Request::is('register') ? 'class=active' : '') }}><a  href="{{route('register')}}">Registrer</a></li>

</ul>