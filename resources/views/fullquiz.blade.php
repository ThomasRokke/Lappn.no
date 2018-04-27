@extends('layouts.fullquiz')

@section('nav')
    @component('components.loggedin')
    @endcomponent
@endsection

@section('content')

    <div class="layout">

        <div class="container quizcontainer">
            <div class="row">
                <div class="col m10 offset-m1 z-depth-2 padding-15 introquiz-container">
                    <!-- Main page -->
                    <div class="main">
                        <div id="startquiz">
                            <h6 class="center">Denne teoriquizen har 8 spørsmål som ikke endrer seg.</h6>
                            <h6 class="center"> Du kan ta testen så mange ganger du ønsker</h6>
                            <div class="col m7 s10 offset-s1 offset-m2 center">
                                <br>

                                <div id="startQuiz" onclick="showQuestions()" class="btn btn-large light-blue">Start Quiz</div>
                            </div>

                        </div>

                        <div id="quiz">
                            <!-- Number of Question  -->
                            <div class="wrapper center" id="pages">
                                <span id="quizNumber">1</span><span id="questionTotal">/8</span>
                            </div>

                            <!-- Quiz Question -->
                            <div class="quiz-questions" id="display-area">
                                <br>
                                <img src="" alt="" class="questionImg" id="questionImg">
                                <p id="question"></p>
                                <ul class="answer" id="answer">
                                </ul>

                                <div id="quiz-results">
                                    <button type="button" name="button" class="submit" id="submit">Svar</button>
                                </div>
                            </div>
                        </div>


                    </div>

                    <canvas id="canvas"></canvas>

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

    <script src="{{asset('js/quiz.js')}}"></script>




@endsection