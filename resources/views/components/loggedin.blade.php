<div class="navbar-fixed">
    <nav id="nav-container" class="light-blue lighten-1 z-depth-0 navigation" role="navigation">
        <div class="nav-wrapper container"><a id="logo-container" href="{{route('home')}}" class="brand-logo">Lappn.no</a>
            <ul class="right hide-on-med-and-down">

                <li {{ (Request::is('home') ? 'class=active' : '') }}><a  href="{{route('home')}}">Dashboard</a></li>
                <li {{ (Request::is('quiz') ? 'class=active' : '') }}><a  href="{{route('fullquiz')}}">Quiz</a></li>
                <li {{ (Request::is('introq') ? 'class=active' : '') }}><a  href="{{route('introq')}}">Introquiz</a></li>
                <li {{ (Request::is('myquiz') ? 'class=active' : '') }}><a  href="{{route('myquiz')}}">Min statestikk</a></li>
                <li class="#">
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logg ut') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>

            </ul>
            <a id="mobile-trigger" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
    </nav>

</div>

<ul id="mobile-demo" class="sidenav left-aligned">
    <br>

    <li {{ (Request::is('introq') ? 'class=active' : '') }}><a href="{{route('myquiz')}}"><i class="material-icons">show_chart</i>Mine resultater</a></li>
    <li><a href="#!"><i class="material-icons">people_outline</i>Inviter en venn</a></li>
    <li><a href="#!"><i class="material-icons">security</i>Endre passord</a></li>
    <li class="#">
        <a href="{{ route('logout') }}"
           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
            <i class="material-icons">exit_to_app</i>{{ __('Logg ut') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </li>

    <li><div class="divider"></div></li>

    <li {{ (Request::is('home') ? 'class=active' : '') }}><a  href="{{route('home')}}">Dashboard</a></li>
    <li {{ (Request::is('fullquiz') ? 'class=active' : '') }}><a  href="{{route('fullquiz')}}">Quiz</a></li>
    <li {{ (Request::is('introq') ? 'class=active' : '') }}><a  href="{{route('introq')}}">Introquiz</a></li>





</ul>

