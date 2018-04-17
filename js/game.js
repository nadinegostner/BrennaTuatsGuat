
var strikes = document.getElementsByClassName("strike");
var fields = document.getElementsByClassName("col");
var empty = document.getElementsByClassName("empty");
var integerCounter;
var integerMaxClicks;
var integerÜbrigeClicks = valueOf(integerMaxClicks);
const maxStrikes = 15;

if (document.getElementById("easy").checked = true){
    integerMaxClicks = 45;
}else if(document.getElementById("medium").checked = true){
    integerMaxClicks = 35;
}else if(document.getElementById("hard").checked = true){
    integerMaxClicks = 25;
}

for(integerCounter = 0; integerCounter < integerMaxClicks; integerCounter++) {
    if (strikes.onclick) {
        function changeStrike() {
            strikes.style.backgroundImage = "url(../images/fire_40x40.png) no-repeat center;";
        }
        console.log("Treffer!");

    } else if (empty.onclick) {
        function changeEmpty() {
            strikes.style.backgroundColor = "#fff";
        }
        console.log("Kein Treffer. Versuchs erneut!")
    }
}

if(integerCounter = integerMaxClicks){

}

