<?php

echo $this->header;



?>

<!---->
<!--    <main>-->
<!--        <div class="buttonbar">-->
<!--            <button type="submit" id="btnEasy">Leicht</button>-->
<!--            <button type="submit" id="btnMiddle">Normal</button>-->
<!--            <button type="submit" id="btnHard">Profiz&uuml;ndler</button>-->
<!--        </div>-->
<!--        <!--TODO: Startseite Spiel mit Playbutton und Schwierigkeitsstufen!-->-->
<!--    </main>-->
<!---->
<!---->
<!--<script type="text/javascript">-->
<!--    var userId = '--><?php //echo $this->userid; ?>//
//<!--</script>-->

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


<main id="wrapper">

<!--    <script type="text/javascript">-->
<!---->
<!--        var random = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0];-->
<!---->
<!--        for (var i = 0; i < 10; i++) {-->
<!--            random[i] = Math.round(Math.random() * (1 - 64)) + 64;-->
<!--            var field = document.getElementById(random[i]);-->
<!--            field.classList.add("strike");-->
<!---->
<!--        }-->
<!---->
<!--        var hitCounter = 0;-->
<!--        var maxClicks = 10;-->
<!--        var remClicks = maxClicks;-->
<!---->
<!---->
<!---->
<!--        function checkForHit () {-->
<!---->
<!--            // for (var i = 0; i < 10; i++) {-->
<!--            //     console.log(random[i]);-->
<!--            // }-->
<!---->
<!---->
<!--            // check if Hit or not-->
<!--            for (var j = 0; j < 10; j++) {-->
<!--                if (this.id === random[j]) { //ToDo: Wie hole ich die ID des gedrückten Buttons?-->
<!---->
<!--                    // wird nie ausgeführt...-->
<!--                    console.log("hitCounter wird erhöht")-->
<!--                    hitCounter++;-->
<!--                    break;-->
<!--                } else {-->
<!--                    console.log("nicht getroffen")-->
<!--                }-->
<!--            }-->
<!---->
<!--            remClicks--;-->
<!--            console.log(remClicks);-->
<!---->
<!--            //Ruft das Overlay mit der (noch nicht fertigen) WIN/LOOSE Ausgabe auf-->
<!--            if (remClicks === 0) {-->
<!--                on();-->
<!--            }-->
<!---->
<!--        }-->
<!---->
<!---->
<!---->
<!--    </script>-->
<!---->
<!--    <h1>blablabla</h1>-->
<!--    <h2>Bitte Schwierigkeitsstufe ausw&auml;hlen</h2>-->
<!--    <h3>ich bin eine geile h3</h3>-->
<!--    <div class="clear"></div>-->
<!---->
<!--    <div id="game">-->
<!--        <div class="row">-->
<!--            <div class="offset-md-2 col-md-1 field"><button onclick="go(); checkForHit()" id="1" name="1">1</button></div>-->
<!--            <div class="col-md-1 field"><button onclick="checkForHit()" id="2" name="">2</button></div>-->
<!--            <div class="col-md-1 field"><button onclick="checkForHit()" id="3" name="">3</button></div>-->
<!--            <div class="col-md-1 field"><button onclick="checkForHit()" id="4" name="">4</button></div>-->
<!--            <div class="col-md-1 field"><button onclick="checkForHit()" id="5" name="">5</button></div>-->
<!--            <div class="col-md-1 field"><button onclick="checkForHit()" id="6" name="">6</button></div>-->
<!--            <div class="col-md-1 field"><button onclick="checkForHit()" id="7" name="">7</button></div>-->
<!--            <div class="col-md-1 field"><button onclick="checkForHit()" id="8" name="">8</button></div>-->
<!--        </div>-->
<!--        <div class="clear"></div>-->
<!---->
<!--        <div class="row">-->
<!--            <div class="offset-md-2 col-md-1 field"><button onclick="checkForHit()" id="9" name="" value=""></button></div>-->
<!--            <div class="col-md-1 field"><button onclick="checkForHit()" id="10" name="10"></button></div>-->
<!--            <div class="col-md-1 field"><button onclick="checkForHit()" id="11" name="11"></button></div>-->
<!--            <div class="col-md-1 field"><button onclick="checkForHit()" id="12" name="12"></button></div>-->
<!--            <div class="col-md-1 field"><button onclick="checkForHit()" id="13" name="13"></button></div>-->
<!--            <div class="col-md-1 field"><button onclick="checkForHit()" id="14" name="14"></button></div>-->
<!--            <div class="col-md-1 field"><button onclick="checkForHit()" id="15" name="15"></button></div>-->
<!--            <div class="col-md-1 field"><button onclick="checkForHit()" id="16" name="16"></button></div>-->
<!--        </div>-->
<!--        <div class="clear"></div>-->
<!---->
<!--        <div class="row">-->
<!--            <div class="offset-md-2 col-md-1 field"><button onclick="checkForHit()" id="17" name="" value=""></button></div>-->
<!--            <div class="col-md-1 field"><button onclick="checkForHit()" id="18" name="" value=""></button></div>-->
<!--            <div class="col-md-1 field"><button onclick="checkForHit()" id="19" name="" value=""></button></div>-->
<!--            <div class="col-md-1 field"><button onclick="checkForHit()" id="20" name="" value=""></button></div>-->
<!--            <div class="col-md-1 field"><button onclick="checkForHit()" id="21" name="" value=""></button></div>-->
<!--            <div class="col-md-1 field"><button onclick="checkForHit()" id="22" name="" value=""></button></div>-->
<!--            <div class="col-md-1 field"><button onclick="checkForHit()" id="23" name="" value=""></button></div>-->
<!--            <div class="col-md-1 field"><button onclick="checkForHit()" id="24" name="" value=""></button></div>-->
<!--        </div>-->
<!--        <div class="clear"></div>-->
<!---->
<!--        <div class="row">-->
<!--            <div class="offset-md-2 col-md-1 field"><button onclick="checkForHit()" id="25" name="" value=""></button></div>-->
<!--            <div class="col-md-1 field"><button onclick="checkForHit()" id="26" name="26" value=""></button></div>-->
<!--            <div class="col-md-1 field"><button onclick="checkForHit()" id="27" name="27" value=""></button></div>-->
<!--            <div class="col-md-1 field"><button onclick="checkForHit()" id="28" name="28" value=""></button></div>-->
<!--            <div class="col-md-1 field"><button onclick="checkForHit()" id="29" name="29" value=""></button></div>-->
<!--            <div class="col-md-1 field"><button onclick="checkForHit()" id="30" name="30" value=""></button></div>-->
<!--            <div class="col-md-1 field"><button onclick="checkForHit()" id="31" name="31" value=""></button></div>-->
<!--            <div class="col-md-1 field"><button onclick="checkForHit()" id="32" name="" value=""></button></div>-->
<!--        </div>-->
<!--        <div class="clear"></div>-->
<!---->
<!--        <div class="row">-->
<!--            <div class="offset-md-2 col-md-1 field"><button onclick="checkForHit()" id="33" name="" value="">1</button></div>-->
<!--            <div class="col-md-1 field"><button onclick="checkForHit()" id="34" name="" value=""></button></div>-->
<!--            <div class="col-md-1 field"><button onclick="checkForHit()" id="35" name="" value=""></button></div>-->
<!--            <div class="col-md-1 field"><button onclick="checkForHit()" id="36" name="" value=""></button></div>-->
<!--            <div class="col-md-1 field"><button onclick="checkForHit()" id="37" name="" value=""></button></div>-->
<!--            <div class="col-md-1 field"><button onclick="checkForHit()" id="38" name="" value=""></button></div>-->
<!--            <div class="col-md-1 field"><button onclick="checkForHit()" id="39" name="" value=""></button></div>-->
<!--            <div class="col-md-1 field"><button onclick="checkForHit()" id="40" name="" value=""></button></div>-->
<!--        </div>-->
<!--        <div class="clear"></div>-->
<!---->
<!--        <div class="row">-->
<!--            <div class="offset-md-2 col-md-1 field"><button onclick="checkForHit()" id="41" name="" value=""></button></div>-->
<!--            <div class="col-md-1 field"><button onclick="checkForHit()" id="42" name="" value=""></button></div>-->
<!--            <div class="col-md-1 field"><button onclick="checkForHit()" id="43 name="" value=""></button></div>-->
<!--            <div class="col-md-1 field"><button onclick="checkForHit()" id="44" name="" value=""></button></div>-->
<!--            <div class="col-md-1 field"><button onclick="checkForHit()" id="45" name="" value=""></button></div>-->
<!--            <div class="col-md-1 field"><button onclick="checkForHit()" id="46" name="" value=""></button></div>-->
<!--            <div class="col-md-1 field"><button onclick="checkForHit()" id="47" name="" value=""></button></div>-->
<!--            <div class="col-md-1 field"><button onclick="checkForHit()" id="48" name="" value=""></button></div>-->
<!--        </div>-->
<!--        <div class="clear"></div>-->
<!---->
<!--        <div class="row">-->
<!--            <div class="offset-md-2 col-md-1 field"><button onclick="checkForHit()" id="49" name="" value=""></button></div>-->
<!--            <div class="col-md-1 field"><button onclick="checkForHit()" id="50" name="" value=""></button></div>-->
<!--            <div class="col-md-1 field"><button onclick="checkForHit()" id="51" name="" value=""></button></div>-->
<!--            <div class="col-md-1 field"><button onclick="checkForHit()" id="52" name="" value=""></button></div>-->
<!--            <div class="col-md-1 field"><button onclick="checkForHit()" id="53" name="" value=""></button></div>-->
<!--            <div class="col-md-1 field"><button onclick="checkForHit()" id="54" name="" value=""></button></div>-->
<!--            <div class="col-md-1 field"><button onclick="checkForHit()" id="55" name="" value=""></button></div>-->
<!--            <div class="col-md-1 field"><button onclick="checkForHit()" id="56" name="" value=""></button></div>-->
<!--        </div>-->
<!--        <div class="clear"></div>-->
<!---->
<!--        <div class="row">-->
<!--            <div class="offset-md-2 col-md-1 field"><button onclick="checkForHit()" id="57" name="1" value="1"></button></div>-->
<!--            <div class="col-md-1 field"><button onclick="checkForHit()" id="58" name="" value=""></button></div>-->
<!--            <div class="col-md-1 field"><button onclick="checkForHit()" id="59" name="" value=""></button></div>-->
<!--            <div class="col-md-1 field"><button onclick="checkForHit()" id="60" name="" value=""></button></div>-->
<!--            <div class="col-md-1 field"><button onclick="checkForHit()" id="61" name="" value=""></button></div>-->
<!--            <div class="col-md-1 field"><button onclick="checkForHit()" id="62" name="" value=""></button></div>-->
<!--            <div class="col-md-1 field"><button onclick="checkForHit()" id="63" name="" value=""></button></div>-->
<!--            <div class="col-md-1 field"><button onclick="checkForHit()" id="64" name="" value=""></button></div>-->
<!--        </div>-->
<!--        <div class="clear"></div>-->
<!--    </div>-->



<!--    <div class="buttonmenu">-->
<!--        <button class="button col-md-3">leicht</button>-->
<!--        <button class="button col-md-3">normal</button>-->
<!--        <button class="button col-md-3">Profiz&uuml;ndler</button>-->
<!--        <button class="button col-md-3">Klicks</button>-->
<!--    </div>-->

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
