<?php

echo $this->header;

?>

<!--    <fiedset>-->
<!--        <label>Wähle den Schwierigkeitsgrad aus:</label><br>-->
<!--            <input type="radio" name="Wähle den Schwierigkeitsgrad aus:" id="easy">-->
<!--            <label for="easy">easy</label><br>-->
<!---->
<!--            <input type="radio" name="Wähle den Schwierigkeitsgrad aus:" id="medium">-->
<!--            <label for="medium">medium</label><br>-->
<!---->
<!--            <input type="radio" name="Wähle den Schwierigkeitsgrad aus:" id="hard">-->
<!--            <label for="hard">hard</label><br>-->
<!--    </fiedset>-->


    <script type="text/javascript">

        var random = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0];

        for (var i = 0; i < 10; i++) {
            random[i] = Math.round(Math.random() * (1 - 64)) + 64;
        }

        var maxStrikes = 10;                                            //platzierte Häuser
        var remStrikes = maxStrikes;
        var strikes = document.getElementsByClassName("strike");
        var numbStrikes = 0;                                            //getroffene Häuser


        function checkForHit () {

            for(integerCounter = 0; integerCounter < ; integerCounter++) {
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
        }

        function saveScoreForUser(difficulty, remStrikes) {

            $.ajax({
                'url': 'index',
                'method': 'post',
                'data': {'difficulty': difficulty, 'score': remStrikes, 'action': 'saveScore'},
                'success': function (receivedData) {
                    if (receivedData.result) {
                        //alles gut - seite neu laden
                        //auf einer andere seite gehen (z.B. Scoreboard)

                        location.href = 'highscore';
                    } else {
                        //dem entwickler auf die finger klopfen, dass offensichtlich das sql statement schlecht war
                    }
                }

            });
        }
    </script>


        <main id="wrapper game">
    <div id="darkOverlay">
        <div id="contentOverlay">
            <div id="content">
                <p id="overlayText">
                <h1>Du hast verloren!!</h1>
                <form action="highscore" method="post"> <!-- form weil man später noch etwas übergeben muss -->
                    <button id="closeOverlay" onclick="off()" type="submit" value="Highscore" href="">Zum Highscore</button>
                </form>
                </p>
            </div>
        </div>
    </div>


    <div id="wrapper game">
        <div class="row">
            <div class="offset-md-2 col-md-1 field" onclick="go(); checkForHit()" id="1" name="1"><img src="images/clouds_40x25.png"></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="2" name=""><img src="images/clouds_40x25.png"></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="3" name=""><img src="images/clouds_40x25.png"></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="4" name=""><img src="images/clouds_40x25.png"></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="5" name=""><img src="images/clouds_40x25.png"></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="6" name=""><img src="images/clouds_40x25.png"></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="7" name=""><img src="images/clouds_40x25.png"></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="8" name=""><img src="images/clouds_40x25.png"></div>
        </div>
        <div class="clear"></div>

        <div class="row">
            <div class="offset-md-2 col-md-1 field" onclick="checkForHit()" id="9" name="" value=""><img src="images/clouds_40x25.png"></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="10" name="10"><img src="images/clouds_40x25.png"></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="11" name="11"><img src="images/clouds_40x25.png"></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="12" name="12"><img src="images/clouds_40x25.png"></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="13" name="13"><img src="images/clouds_40x25.png"></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="14" name="14"><img src="images/clouds_40x25.png"></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="15" name="15"><img src="images/clouds_40x25.png"></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="16" name="16"><img src="images/clouds_40x25.png"></div>
        </div>
        <div class="clear"></div>

        <div class="row">
            <div class="offset-md-2 col-md-1 field" onclick="checkForHit()" id="17" name="" value=""><img src="images/clouds_40x25.png"></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="18" name="" value=""><img src="images/clouds_40x25.png"></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="19" name="" value=""><img src="images/clouds_40x25.png"></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="20" name="" value=""><img src="images/clouds_40x25.png"></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="21" name="" value=""><img src="images/clouds_40x25.png"></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="22" name="" value=""><img src="images/clouds_40x25.png"></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="23" name="" value=""><img src="images/clouds_40x25.png"></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="24" name="" value=""><img src="images/clouds_40x25.png"></div>
        </div>
        <div class="clear"></div>

        <div class="row">
            <div class="offset-md-2 col-md-1 field" onclick="checkForHit()" id="25" name="" value=""><img src="images/clouds_40x25.png"></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="26" name="26" value=""><img src="images/clouds_40x25.png"></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="27" name="27" value=""><img src="images/clouds_40x25.png"></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="28" name="28" value=""><img src="images/clouds_40x25.png"></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="29" name="29" value=""><img src="images/clouds_40x25.png"></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="30" name="30" value=""><img src="images/clouds_40x25.png"></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="31" name="31" value=""><img src="images/clouds_40x25.png"></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="32" name="32" value=""><img src="images/clouds_40x25.png"></div>
        </div>
        <div class="clear"></div>

        <div class="row">
            <div class="offset-md-2 col-md-1 field" onclick="checkForHit()" id="33" name="" value=""><img src="images/clouds_40x25.png"></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="34" name="" value=""><img src="images/clouds_40x25.png"></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="35" name="" value=""><img src="images/clouds_40x25.png"></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="36" name="" value=""><img src="images/clouds_40x25.png"></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="37" name="" value=""><img src="images/clouds_40x25.png"></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="38" name="" value=""><img src="images/clouds_40x25.png"></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="39" name="" value=""><img src="images/clouds_40x25.png"></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="40" name="" value=""><img src="images/clouds_40x25.png"></div>
        </div>
        <div class="clear"></div>

        <div class="row">
            <div class="offset-md-2 col-md-1 field" onclick="checkForHit()" id="41" name="" value=""><img src="images/clouds_40x25.png"></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="42" name="" value=""><img src="images/clouds_40x25.png"></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="43" name="" value=""><img src="images/clouds_40x25.png"></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="44" name="" value=""><img src="images/clouds_40x25.png"></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="45" name="" value=""><img src="images/clouds_40x25.png"></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="46" name="" value=""><img src="images/clouds_40x25.png"></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="47" name="" value=""><img src="images/clouds_40x25.png"></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="48" name="" value=""><img src="images/clouds_40x25.png"></div>
        </div>
        <div class="clear"></div>

        <div class="row">
            <div class="offset-md-2 col-md-1 field" onclick="checkForHit()" id="49" name="" value=""><img src="images/clouds_40x25.png"></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="50" name="" value=""><img src="images/clouds_40x25.png"></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="51" name="" value=""><img src="images/clouds_40x25.png"></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="52" name="" value=""><img src="images/clouds_40x25.png"></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="53" name="" value=""><img src="images/clouds_40x25.png"></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="54" name="" value=""><img src="images/clouds_40x25.png"></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="55" name="" value=""><img src="images/clouds_40x25.png"></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="56" name="" value=""><img src="images/clouds_40x25.png"></div>
        </div>
        <div class="clear"></div>

        <div class="row">
            <div class="offset-md-2 col-md-1 field" onclick="checkForHit()" id="57" name="1" value="1"><img src="images/clouds_40x25.png"></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="58" name="" value=""><img src="images/clouds_40x25.png"></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="59" name="" value=""><img src="images/clouds_40x25.png"></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="60" name="" value=""><img src="images/clouds_40x25.png"></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="61" name="" value=""><img src="images/clouds_40x25.png"></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="62" name="" value=""><img src="images/clouds_40x25.png"></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="63" name="" value=""><img src="images/clouds_40x25.png"></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="64" name="" value=""><img src="images/clouds_40x25.png"></div>
        </div>
        <div class="clear"></div>
    </div>

    </main>
    <script type="text/javascript">

        //Funktionen fürs Overlay
        function on () {
            document.getElementById("darkOverlay").style.display = "block";
        }

        function off () {
            document.getElementById("darkOverlay").style.display = "none";
        }

    </script>

<?php

echo $this->footer;

?>