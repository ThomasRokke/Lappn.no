@extends('layouts.quiz')

@section('nav')
    @component('components.loggedin')
    @endcomponent
@endsection

@section('content')

    <div class="layout">

        <div class="container quizcontainer">
            <div class="row">
                <div class="col m8 offset-m2 z-depth-2 padding-15 introquiz-container finishQuizContainer">
                    <div id="canvasNode">
                        <canvas id="canvas"></canvas>
                    </div>

                    <div class="col m10 offset-m1">
                        @if($correct === $total)
                            <h4 class="center">Gratulerer du fikk alle riktig!</h4>

                        @else
                            <h4 class="center">Du fikk {{$correct}}/{{$total}} riktige.</h4>
                        @endif

                        @if(!$hasRole)

                            @if($totalTries < 5)
                                <h5 class="center">Du har brukt {{$totalTries}} av 5 forsøk</h5>
                            @else
                                <h5 class="center">Du har dessverre ikke flere forsøk</h5>
                            @endif




                            <h6 class="center">Inviter en venn og få ubegrenset tilgang begge to!</h6>

                            <div class="linkurl">
                                <p class="bold-txt center light-blue-text">Vervekode: {{ $inviteURL }}</p>
                            </div>

                        @else
                                <h5 class="center">Du kan ta testen så mange ganger du ønsker!</h5>
                                <h6 class="center">Send denne til en venn for å gi full tilgang.</h6>

                                <h6 class="bold-txt center light-blue-text">Vervekode: {{ $inviteURL }}</h6>

                        @endif




                            @if(($totalTries < 5))
                                <div class="col m6 s10 offset-s1 offset-m3">
                                    <br>
                                    <a class="btn  center btn-large light-blue" href="{{route('fullquiz')}}">Prøv igjen</a>
                                </div>
                            @endif

                    </div>





                </div>

            </div>
        </div>

        <footer class="page-footer light-blue lighten-1" style="margin-top: 200px;">
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

    @if($correct === $total)
        <script src="{{asset('js/finishquiz.js')}}"></script>
    @endif





@endsection