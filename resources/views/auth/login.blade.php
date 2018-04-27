@extends('layouts.auth')

@section('nav')
    @component('components.logins')
    @endcomponent
@endsection

@section('content')

    <div class="container auth-content">
        <div class="row">
            <div class="col m8 offset-m2 z-depth-2  white">

                <div class="row">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="input-field col s10 offset-s1 m7 offset-m3">
                            <a href="/login/facebook" class="waves-effect waves-light btn-large social facebook light-blue">
                                <i class="fab fa-facebook-square"></i> Logg inn med facebook</a>

                        </div>




                        <div class="input-field col s10 offset-s1">
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                            <label class="light-blue-text" for="email">{{ __('E-post') }}</label>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="input-field col s10 offset-s1">
                            <input id="Password" placeholder="passord" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>



                            @if ($errors->has('name'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="input-field col s10 offset-s1">

                            <div class="row">
                                <div class="col s6">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <span>Husk meg?</span>
                                    </label>
                                </div>
                                <div class="col s6">
                                    <a class="right" href="{{ route('register') }}">
                                        {{ __('Opprett bruker +') }}
                                    </a>

                                </div>
                            </div>






                        </div>


                        <div class="input-field col s10 offset-s1">

                            <div class="row">
                                <div class="col s6">
                                    <button type="submit" class="btn waves-effect waves-light light-blue">
                                        {{ __('Logg inn') }} <i class="material-icons right">send</i>
                                    </button>
                                    <a class="nowrap" href="{{ route('password.request') }}">
                                        {{ __('Glemt passord?') }}
                                    </a>

                                </div>



                            </div>



                        </div>


                    </form>
                </div>



            </div>
        </div>
    </div>


    <footer class="page-footer light-blue lighten-1">
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