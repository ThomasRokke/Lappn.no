@extends('layouts.user')

@section('nav')
    @component('components.loggedin')
    @endcomponent
@endsection


@section('content')

    <div class="layout">



        <div class="container">

            @if($dobSet === null && ($newsletterSet === null || $newsletterSet === 0))
            <div class="row z-depth-1 container-padding" id="set-info">
                <form method="POST" action="{{route('postHome')}}" class="more-info-top-margin">
                    {{ csrf_field() }}

                    @if($dobSet === null)
                        <div class="col s12 input-field">

                            <label>Når er du født?</label>
                            <input type="text" class="datepicker" id="dob" name="dob" placeholder="">
                        </div>
                    @endif
                    @if($newsletterSet === null || $newsletterSet === 0)
                        <div class="col s12 input-field">
                            <label class="label-margin-minus-top">Motta vårt nyhetsbrev med supre tilbud fra kjøreskoler?</label>
                            <br>
                            <p>
                                <label>
                                    <input class="with-gap"  type="radio" name="newsletter" value="1"/>
                                    <span>Ja takk!</span>
                                </label>

                                <label>
                                    <input class="with-gap" type="radio" name="newsletter" value="0" checked />
                                    <span>Nei, jeg ønsker ikke gode tilbud</span>
                                </label>
                            </p>

                        </div>
                    @endif


                    <div class="col s6 input-field right">
                        <a href="javascript:closeInfo();">Minn meg på det senere</a>
                        <button class="btn waves-effect waves-light light-blue" type="submit" name="action">Lagre
                            <i class="material-icons right">save</i>
                        </button>


                    </div>



                </form>




            </div>
            @endif

            <div class="row">
                <div class="col s12 m6">
                    <a href="{{route('fullquiz')}}">
                        <div class="card small">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img src="https://images.unsplash.com/photo-1493160503554-640891d88a0c?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=473e535dba984ef696149f66abe637a8&auto=format&fit=crop&w=2550&q=80">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">Teoriquiz</span>
                                <p><a href="#introquiz">Test deg selv nå!</a></p>
                            </div>
                            
                        </div></a>

                </div>

                <div class="col s12 m6">
                    <div class="card small">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img src="https://images.unsplash.com/photo-1504813184591-01572f98c85f?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=88b427d0f977a2ccdc16b00e94a760e9&auto=format&fit=crop&w=1951&q=80">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Førstehjelp</span>
                            <p><a href="#">Se videoer nå</a></p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Førstehjelp<i class="material-icons right">close</i></span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, delectus dolore esse obcaecati quaerat quisquam rerum. A architecto aspernatur dolore dolores doloribus, ducimus eos eum excepturi harum hic labore nam nostrum nulla odio placeat, provident, quasi quibusdam quisquam quos voluptates!</p>
                        </div>
                    </div>
                </div>

                <div class="col s12 m6">
                    <div class="card small">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img src="https://images.unsplash.com/photo-1500893099951-bfbcb107cd0b?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=f518e33095e8acffff04c182bb656cc3&auto=format&fit=crop&w=1950&q=80">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Trafikksikkerhet</span>
                            <p><a href="#">Lær mer</a></p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Trafikksikkerhet<i class="material-icons right">close</i></span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci alias aliquam aliquid beatae blanditiis commodi deleniti dignissimos distinctio eaque, et ex excepturi hic illum inventore maxime nemo numquam obcaecati officia perspiciatis quae repellat saepe sunt tenetur ullam vitae voluptates voluptatum!.</p>
                        </div>
                    </div>
                </div>

                <div class="col s12 m6">
                    <div class="card small">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img src="https://images.unsplash.com/photo-1500589177368-c810ea3db799?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=3fdae4c2036e5c929caa7b2f26d6fe3d&auto=format&fit=crop&w=1952&q=80">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Skiltquiz</span>
                            <p><a href="#">Test deg selv nå!</a></p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Førstehjelp<i class="material-icons right">close</i></span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, delectus dolore esse obcaecati quaerat quisquam rerum. A architecto aspernatur dolore dolores doloribus, ducimus eos eum excepturi harum hic labore nam nostrum nulla odio placeat, provident, quasi quibusdam quisquam quos voluptates!</p>
                        </div>
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


    </div>





    <script
            src="https://code.jquery.com/jquery-2.2.4.js"
            integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
            crossorigin="anonymous"></script>


    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>



    <script>



        var options = {
            // Close when date is selected
            autoClose: false,

            // the default output format for the input field value
            format: 'dd-mm-yyyy',

            // Used to create date object from current input string
            parse: null,

            // The initial date to view when first opened
            defaultDate: new Date('01-01-2002'),

            // Make the `defaultDate` the initial selected value
            setDefaultDate: true,

            disableWeekends: false,

            disableDayFn: null,

            // First day of week (0: Sunday, 1: Monday etc)
            firstDay: 1,

            // The earliest date that can be selected
            minDate: null,
            // Thelatest date that can be selected
            maxDate: null,

            // Number of years either side, or array of upper/lower range
            yearRange: 100,

            // used internally (don't config outside)
            minYear: 1940,
            maxYear: 2008,
            minMonth: undefined,
            maxMonth: undefined,

            startRange: null,
            endRange: null,

            isRTL: false,

            // Render the month after year in the calendar title
            showMonthAfterYear: false,

            // Render days of the calendar grid that fall in the next or previous month
            showDaysInNextAndPreviousMonths: true,

            // Specify a DOM element to render the calendar in
            container: null,

            // Show clear button
            showClearBtn: false,

            // internationalization
            i18n: {
                cancel: 'Avbryt',
                clear: 'Fjern',
                done: 'Ferdig',
                previousMonth : '‹',
                nextMonth     : '›',
                months        : ['Januar', 'Februar', 'Mars', 'April', 'Mai', 'Juni', 'Juli', 'August', 'September', 'Okbober', 'November', 'Desember'],
                monthsShort   : ['Jan','Feb','Mar','Apr','Mau','Jun','Jul','Aug','Sep','Okt','Nov','Des'],
                weekdays      : ['Søndag','Mandag','Tirsdag','Onsdag','Torsdag','Fredag','Lørdag'],
                weekdaysShort : ['Søn','Man','Tir','Ons','Tor','Fre','Lør'],
                weekdaysAbbrev : ['S','M','T','O','T','F','L']
            },

            // events array
            events: [],

            // callback function
            onSelect: null,
            onOpen: null,
            onClose: null,
            onDraw: null,
        };

        var elem = document.querySelector('.datepicker');
        var instance = M.Datepicker.init(elem, options);


        function closeInfo(){
            $('#set-info').hide('slow');
        }


    </script>

@endsection