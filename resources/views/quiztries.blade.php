@extends('layouts.quiz')

@section('nav')
    @component('components.loggedin')
    @endcomponent
@endsection

@section('content')

    <div class="layout">

        <div class="container">
            <div class="row">
                <div class="col m12">
                    <h2 class="center">Dine resultater</h2>




                    <div class="col m6 offset-m3">
                        @if($quiztries->count() === 0)
                            <h4 class="center text-black">Du har ikke tatt en quiz enda</h4>


                            <div class="col m6 s10 offset-s1 offset-m4">
                                <br>
                                <a class="btn  center btn-large light-blue" href="{{route('fullquiz')}}">Ta quiz</a>
                            </div>

                        @else

                            <table>
                                <thead>
                                <tr class="center">
                                    <th class="center">Nr</th>
                                    <th class="center">Antall riktige</th>
                                    <th class="center">Total</th>
                                </tr>
                                </thead>

                                <tbody>





                                @foreach($quiztries as $tries )

                                    <tr class="center">
                                        <td class="center">{{ $tries->id }}</td>
                                        <td class="center">{{ $tries->correct }}</td>
                                        <td class="center">{{ $tries->total }}</td>
                                    </tr>

                                @endforeach

                                </tbody>
                            </table>
                        @endif
                    </div>

                </div>
            </div>


        </div>

        <footer class="page-footer light-blue lighten-1" style="margin-top: 400px;">
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


    </div>
    <script
            src="https://code.jquery.com/jquery-2.2.4.js"
            integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
            crossorigin="anonymous">

    </script>



    <script>

        $(document).on('click', 'a[href^="#"]', function (event) {
            event.preventDefault();

            $('html, body').animate({
                scrollTop: $($.attr(this, 'href')).offset().top - 50
            }, 800);
        });



    </script>

    <script src="{{asset('js/fullquiz.js')}}"></script>




@endsection