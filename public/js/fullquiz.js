

var q1 = {
    q: "Hvordan skal barn lavere enn 135 cm sikres i bilen?",
    answers: ["I baksetet med bare bilbelte","I tilpasset barnesikringsutstyr", "På fanget til en voksen", "I forsetet med bilbelte"],
    correct: 1
};

var q2 = {
    q: "Hvilket av disse krav stilles til øvingskjøring i klasse B?",
    answers: ['Ledsager må ha fullført eget kurs', 'Det kan ikke være med passasjerer', 'Den som øvingskjører må ha med gyldig legitimasjon', 'Det er ikke tillatt å øvingskjøre med tilhenger'],
    correct: 2
};

var q3 = {
    q: 'Hva er riktig om krav til lys bak på bilen?',
    answers: ['Ryggelys skal være røde', 'Det er ingen krav til bestemt farge', 'Baklys skal være røde', 'Baklys skal være hvite'],
    correct: 2
};

var q4 = {
    q: "Du skal svinge til venstre i et kryss. Hvilket møtende kjøretøy vil det være vanskeligst å vurdere avstanden til?",
    answers: ["Lastebil", "Letebil", "Motorsykkel", "Traktor"],
    correct: 2
};

var q5 = {
    q: "Hva sier trafikkreglene om høyeste tillatte fart etter at du har passert dette skiltet?",
    qImg: 'https://www.vegvesen.no/_public/vegvesen.no/images/teoriprovedemo/skilt1.jpg?_ts=15f05c18328',

    answers: ["Gangfart", "20km/t", "50km/t", "20-30km/t"],
    correct: 0
};

var q6 = {
    q: "Hva betyr skiltet?",
    qImg: 'https://www.vegvesen.no/_public/vegvesen.no/images/teoriprovedemo/skilt2.jpg?_ts=1578e8f1038',
    answers: ["Felt A er for buss i rute", "Felt B er felt for avkjøring", "Felt B er et forbikjøringsfelt", "Felt A er for lastebiler over 3500 kg" ],
    correct: 2
};

var q7 = {
    q: "Du kjører på landeveg. Hva er høyeste tillatte hastighet etter dette skiltet?",
    qImg: 'https://www.vegvesen.no/_public/vegvesen.no/images/teoriprovedemo/skilt3.jpg?_ts=1578e8f1038',
    answers: ["60km/t", "70km/t", "80km/t", "90km/t"],
    correct: 2
};

var q8 = {
    q: "Du skal kjøre rett fram i lyskrysset. Lyssignalet blinker gult. Hva sier reglene om vikeplikt?",
    qImg: 'https://www.vegvesen.no/_public/vegvesen.no/images/teoriprovedemo/lyskryss.jpg?_ts=15f05c18328',
    answers: ["Jeg har vikeplikt for kryssende trafikk", "Jeg har vikeplikt for trafikk fra høyre", "Jeg har vikeplikt for trafikk fra venstre", "Jeg har ikke vikeplikt"],
    correct: 1
};
var q9 = {
    q: "Hvordan skal barn lavere enn 135 cm sikres i bilen?",
    answers: ["I baksetet med bare bilbelte","I tilpasset barnesikringsutstyr", "På fanget til en voksen", "I forsetet med bilbelte"],
    correct: 1
};

var q10 = {
    q: "Hvilket av disse krav stilles til øvingskjøring i klasse B?",
    answers: ['Ledsager må ha fullført eget kurs', 'Det kan ikke være med passasjerer', 'Den som øvingskjører må ha med gyldig legitimasjon', 'Det er ikke tillatt å øvingskjøre med tilhenger'],
    correct: 2
};

var q11 = {
    q: 'Hva er riktig om krav til lys bak på bilen?',
    answers: ['Ryggelys skal være røde', 'Det er ingen krav til bestemt farge', 'Baklys skal være røde', 'Baklys skal være hvite'],
    correct: 2
};

var q12 = {
    q: "Du skal svinge til venstre i et kryss. Hvilket møtende kjøretøy vil det være vanskeligst å vurdere avstanden til?",
    answers: ["Lastebil", "Letebil", "Motorsykkel", "Traktor"],
    correct: 2
};

var q13 = {
    q: "Hva sier trafikkreglene om høyeste tillatte fart etter at du har passert dette skiltet?",
    qImg: 'https://www.vegvesen.no/_public/vegvesen.no/images/teoriprovedemo/skilt1.jpg?_ts=15f05c18328',

    answers: ["Gangfart", "20km/t", "50km/t", "20-30km/t"],
    correct: 0
};

var q14 = {
    q: "Hva betyr skiltet?",
    qImg: 'https://www.vegvesen.no/_public/vegvesen.no/images/teoriprovedemo/skilt2.jpg?_ts=1578e8f1038',
    answers: ["Felt A er for buss i rute", "Felt B er felt for avkjøring", "Felt B er et forbikjøringsfelt", "Felt A er for lastebiler over 3500 kg" ],
    correct: 2
};

var q15 = {
    q: "Du kjører på landeveg. Hva er høyeste tillatte hastighet etter dette skiltet?",
    qImg: 'https://www.vegvesen.no/_public/vegvesen.no/images/teoriprovedemo/skilt3.jpg?_ts=1578e8f1038',
    answers: ["60km/t", "70km/t", "80km/t", "90km/t"],
    correct: 2
};

var q16 = {
    q: "Du skal kjøre rett fram i lyskrysset. Lyssignalet blinker gult. Hva sier reglene om vikeplikt?",
    qImg: 'https://www.vegvesen.no/_public/vegvesen.no/images/teoriprovedemo/lyskryss.jpg?_ts=15f05c18328',
    answers: ["Jeg har vikeplikt for kryssende trafikk", "Jeg har vikeplikt for trafikk fra høyre", "Jeg har vikeplikt for trafikk fra venstre", "Jeg har ikke vikeplikt"],
    correct: 1
};

// create an array of objects

var randomQ = [q1, q2, q3, q4, q5, q6, q7, q8, q9, q10, q11, q12, q13, q14, q15, q16];

var qs = buildRandomArray();

// Initialize variables
//------------------------------------------------------------------

var tags;
var tagsClass = '';
var liTagsid = [];
var correctAns = 0;
var quizPage = 1;


var currentIndex = 0;
var currentq = qs[currentIndex];

var prevousq;
var previousIndex = 0;

var ulTag = document.getElementById('answer');
var button = document.getElementById('submit');
var qTitle = document.getElementById('question');

document.getElementById('questionTotal').innerHTML = "/"+10;
var qImg = $('#questionImg');

//save class name so it can be reused easily
//if I want to change it, I have to change it one place
var classHighlight = 'selected';

// Display Answers and hightlight selected item
//------------------------------------------------------------------

function buildRandomArray(){
    var arr = [];
    for(var i = 0; i < 10; i++){
        arr.push(randomQ[Math.floor(Math.random() * randomQ.length)]);
    }
    return arr;

}

function showqs (){

    $('#quiz').show();
    $('#startquiz').hide();

    if (currentIndex !== 0) {
        // create again submit button only for next pages
        ulTag.innerHTML ='';
        button.innerHTML = 'Svar';
        button.className = 'submit';
        button.id = 'submit';

        //update the number of qs displayed
        document.getElementById('quizNumber').innerHTML = quizPage;
    }

    //Display Results in the final page
    if (currentIndex ===  (10)) {
        ulTag.innerHTML = '';
        document.getElementById('question').innerHTML = '';

        var hrefUrl = "/quiz-finished?correct="+correctAns + "&total=10";
        window.location.replace(hrefUrl);

        return
    }

    qTitle.innerHTML = currentq.q;
    if(currentq.hasOwnProperty('qImg')){
        console.log("img§");
        qImg.attr("src",currentq.qImg);
        qImg.show();
    }else{
        qImg.hide();
    }

    console.log(currentq.q);

    // create a for loop to generate the answers and display them in the page
    for (var i = 0; i < currentq.answers.length; i++) {
        // creating answers
        var newAns = document.createElement('li');
        newAns.id = 'ans'+ (i+1);
        newAns.className = "notSelected";
        var textAns = document.createTextNode(currentq.answers[i]);
        newAns.appendChild(textAns);
        var addNewAnsHere = document.getElementById('answer');
        addNewAnsHere.appendChild(newAns);


        console.log(currentq.answers[i]);
    }




    //.click() will return the result of $('.notSelected')
    var $liTags = $('.notSelected').click(function(list) {
        list.preventDefault();
        //run removeClass on every element
        //if the elements are not static, you might want to rerun $('.notSelected')
        //instead of the saved $litTags
        $liTags.removeClass(classHighlight);
        //add the class to the currently clicked element (this)
        $(this).addClass(classHighlight);

        //get id name of clicked answer
        for (var i = 0; i < currentq.answers.length ; i++) {
            // console.log(liTagsid[i]);
            if($liTags[i].className === "notSelected selected"){
                //store information to check answer
                tags = $liTags[i].id;
                // tagsClass = $LiTags.className;
                console.log(tags);
                tagsClassName = $liTags[i];
            }
        }
    });

    //check answer once it has been submitted
    button.onclick = function (){ checkAnswer()};
}





// Show Correct Answer
//------------------------------------------------------------------
function checkAnswer (){
    // get selected list
    var selectedItem = document.getElementById(tags);

    // check that an answer has been selected
    if (selectedItem === undefined) {
        alert("Please selected an answer!")
        return
    } else {
        // get user answer if form of text
        var userAns = selectedItem.innerHTML;
    }

    // change the background of the answer according to the Results
    if (userAns === currentq.answers[currentq.correct]) {
        console.log("Korrekt! Svaret er: "+ userAns);
        // change color of selected item by changing className
        selectedItem.className = 'correct';
        // count the number of correct answers
        correctAns++;
        console.log(correctAns);
    } else {
        console.log("Dessverre! Riktig svar er: "+  currentq.answers[currentq.correct]);
        //change the background of the wrong answer
        selectedItem.className = 'wrong';
        //hightlight the right answer if the user got it wrong
        //change the class name of the correct answer
        ulTag.getElementsByTagName('li')[currentq.correct].className = 'correct';

        console.log(currentq.answers[currentq.correct]);
    }

    // Create a next q button once the answer has been submitted
    button.innerHTML = 'Neste';
    button.className = 'next';
    button.id = 'next';

    prevousq = currentq;
    quizPage++;
    currentIndex++;
    currentq = qs[currentIndex];

    // Start with the next question once the "Next" button has been clicked
    button.onclick = function (){showqs()};

}






