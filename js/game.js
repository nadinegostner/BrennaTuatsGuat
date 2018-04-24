
var strikes = document.getElementsByClassName("strike");
var fields = document.getElementsByClassName("col");
var empty = document.getElementsByClassName("empty");
var integerCounter;
var integerMaxClicks;
var integerÜbrigeClicks = valueOf(integerMaxClicks);
//var integerÜbrigeClicks = valueOf(integerMaxClicks);
const maxStrikes = 15;

/*if (document.getElementById("easy").checked = true){
    integerMaxClicks = 45;
}else if(document.getElementById("medium").checked = true){
    integerMaxClicks = 35;
}else if(document.getElementById("hard").checked = true){
    integerMaxClicks = 25;
}*/





for(integerCounter = 0; integerCounter < integerMaxClicks; integerCounter++) {
    if (strikes.onclick) {
        function changeStrike() {
            strikes.style.backgroundImage = "url(../images/fire_40x40.png) no-repeat center;";
            //counter strikes -> highscore (tatsächlich gebrauchte Klicks)
            //gesamt Strikes: wenn alle getroffen - Abbruch/Gewonnen
        }
        console.log("Treffer!");

    } else if (empty.onclick) {
        function changeEmpty() {
            strikes.style.backgroundColor = "#fff";
        }
        console.log("Kein Treffer. Versuchs erneut!")
    }
}

//maxClicks vorbei -> wieviele Strikes getroffen?
//getroffen < gesamtStrikes --> verloren (MEldung try again, Link)

//score speichern

if(integerCounter = integerMaxClicks){

}


$(document).ready(function() {

    var endgameButton = $('#endgame');

    endgameButton.click(function() {
        var score = $('#score').val();
        var difficulty = $('#difficulty').val();

        saveScoreForUser(difficulty, score);


    });



});



function saveScoreForUser(difficulty, score) {

    $.ajax({
       'url': 'index',
        'method': 'post',
        'data': {'difficulty': difficulty, 'score': score, 'action': 'saveScore'},
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

}
