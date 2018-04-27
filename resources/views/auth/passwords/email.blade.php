@extends('layouts.auth')

@section('nav')
    <div class="navbar-fixed">
        <nav id="nav-container" class="light-blue lighten-1 z-depth-0 navigation" role="navigation">
            <div class="nav-wrapper container"><a id="logo-container" href="" class="brand-logo">Lappn.no</a>
                <ul class="right hide-on-med-and-down">
                    <li class="#"><a  href="#">Introquiz</a></li>
                    <li class="#"><a  href="#">Om oss</a></li>
                    <li class="login-toggle"><a  href="#">Logg inn/Registrer</a></li>

                </ul>

            </div>
        </nav>

    </div>
@endsection

@section('content')


    <div class="container auth-content">
        <div class="row">
            <div class="col m8 offset-m2 z-depth-2  white">
                <h5 class="center">Tilbakestill passord</h5>
                <div class="row">
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf



                        <div class="input-field col s10 offset-s1">
                            <input id="email" type="email" class="validate {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                            <label for="email">{{ __('E-post') }}</label>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif

                        </div>


                        <div class="input-field col s10 offset-s1 mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn light-blue">
                                    {{ __('Tilbakestill passord') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>



            </div>
        </div>
    </div>


    <footer class="page-footer light-blue lighten-1" style="margin-top: 300px">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Om Lappn</h5>
                    <p class="grey-text text-lighten-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum doloremque esse, est et id minus molestias, neque omnis pariatur quibusdam quidem sed vel vitae voluptate..</p>


                </div>
                <div class="col l3 s12">
                    <h5 class="white-text">Navigasjon</h5>
                    <ul>
                        <li><a class="white-text" href="#!">Hjem</a></li>
                        <li><a class="white-text" href="#!">Anbud</a></li>
                        <li><a class="white-text" href="#!">Om oss</a></li>
                    </ul>
                </div>
                <div class="col l3 s12">
                    <h5 class="white-text">Lurer du på noe?</h5>
                    <ul>
                        <li><a class="white-text" href="#!">Kundeservice</a></li>
                        <li><a class="white-text" href="#!">Ofte stilte spørsmål</a></li>
                        <li><a class="white-text" href="#!">Om vår chatbot</a></li>


                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                Copyright © 2018 - Røkke Development
            </div>
        </div>
    </footer>


    <script
            src="https://code.jquery.com/jquery-2.2.4.js"
            integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
            crossorigin="anonymous"></script>


    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>

    <script>





    </script>

@endsection