

type="text/javascript">

// var random = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0]; //mag er nicht
// //Alternativ: fixe muster(festes Schema wo die Häuser stehen)

// for (var i = 0; i < 10; i++) {
//     random[i] = Math.round(Math.random() * (1 - 64)) + 64;
//     var field = document.getElementById(random[i]);
//     field.classList.add("strike");


var random = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0];

for (var i = 0; i < 10; i++) {
    random[i] = Math.round(Math.random() * (1 - 64)) + 64;
}

var maxStrikes = 10;                                            //platzierte Häuser
var remStrikes = maxStrikes;
var strikes = document.getElementsByClassName("strike");
var numbStrikes = 0;                                            //getroffene Häuser


function checkForHit () {

    for(integerCounter = 0; integerCounter < integerMaxClicks; integerCounter++) {
     if (strikes.onclick) {
         function changeStrike() {
             strikes.style.backgroundImage = "url(../images/fire_40x40.png) no-repeat center;";
             //counter strikes -> highscore (tatsächlich gebrauchte Klicks)
             remStrikes--;
             numbStrikes++;
             saveScoreForUser();
             //gesamt Strikes: wenn alle getroffen - Abbruch/Gewonnen
             if(numbStrikes == maxStrikes){
                 on();

             }
         }
         console.log("Treffer!");

     } else {
         function changeEmpty() {
             strikes.style.backgroundColor = "#fff";
             remStrikes --;
         }
         console.log("Kein Treffer. Versuchs erneut!")
     }
 }
    // for (var i = 0; i < 10; i++) {
    //     console.log(random[i]);
    // }

/*
    // check if Hit or not
    for (var j = 0; j < 10; j++) {
        if (this.id === random[j]) { //ToDo: Wie hole ich die ID des gedrückten Buttons?

            // wird nie ausgeführt...
            console.log("hitCounter wird erhöht")
            hitCounter++;
            break;
        } else {
            console.log("nicht getroffen")
        }
    }

    remClicks--;
    console.log(remClicks);
*/

    // //Ruft das Overlay mit der (noch nicht fertigen) WIN/LOOSE Ausgabe auf
    // if (remClicks === 0) {
    //     on();
    // }
}

function saveScoreForUser(difficulty, remStrikes) {

    $.ajax({
        'url': 'index',
        'method': 'post',
        'data': {'difficulty': difficulty, 'score': remStrikes, 'action': 'saveScore'},
        'success': function(receivedData) {
            if(receivedData.result) {
                //alles gut - seite neu laden
                //auf einer andere seite gehen (z.B. Scoreboard)

                location.href='highscore';
            } else {
                //dem entwickler auf die finger klopfen, dass offensichtlich das sql statement schlecht war
            }
        }

    });

// var strikes = document.getElementsByClassName("strike");
// var fields = document.getElementsByClassName("col");
// var empty = document.getElementsByClassName("empty");
// var integerCounter;
// var integerMaxClicks;
// var integerÜbrigeClicks = valueOf(integerMaxClicks);
// //var integerÜbrigeClicks = valueOf(integerMaxClicks);
// const maxStrikes = 15;
//
//
//
//
//
//
//
//
//
// //maxClicks vorbei -> wieviele Strikes getroffen?
// //getroffen < gesamtStrikes --> verloren (MEldung try again, Link)
//
// //score speichern
//
// if(integerCounter = integerMaxClicks){
//
// }
//
//
// $(document).ready(function() {
//
//     var endgameButton = $('#endgame');
//
//     endgameButton.click(function() {
//         var score = $('#score').val();
//         var difficulty = $('#difficulty').val();
//
//         saveScoreForUser(difficulty, score);
//
//
//     });
//
//
//
// });




}
