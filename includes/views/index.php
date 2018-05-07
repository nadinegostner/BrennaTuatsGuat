<?php
echo $this->header;
?>




<!--<script type="text/javascript">-->
<!--    if (easy.checked() == true){-->
<!--        integerMaxClicks = 45;-->
<!--        document.getElementById("clicks").innerHTML = integerMaxClicks + " Klicks";-->
<!--    }else if(document.getElementById("medium") == true){-->
<!--        integerMaxClicks = 35;-->
<!--        document.getElementById("clicks").innerHTML = integerMaxClicks + " Klicks";-->
<!--    }else if(document.getElementById("hard") == true){-->
<!--        integerMaxClicks = 25;-->
<!--        document.getElementById("clicks").innerHTML = integerMaxClicks + " Klicks";-->
<!--    }-->
<!--</script>-->

<script type="text/javascript">
    function chosenDifficulty(){
    var i;
    var   integerMaxClicks;

        for(i = 0; i < 3; i++){
            if(document.difficulties.elements[i].checked){
                integerMaxClicks = document.difficulties.elements[i].value;
            }
        }
        document.getElementById("clicks").innerHTML = integerMaxClicks + " Klicks";
    }
</script>


    <main id="wrapper">


        <h1>Gria&szlig; euch Gott!</h1>
        <h3>Bitte w&auml;hl' a Schwierigkeitsstufe.</h3>

        <a href="game"><div class="col-xs-12" id="play_button"></div></a>


        <div class="clear"></div>

        <form name="difficulties">
        <div class="toggle-buttons">
            <input type="radio" id="easy" name="difficulty" value="45" onclick="chosenDifficulty()"/>
            <label for="easy">leicht</label>
            <input type="radio" id="medium" name="difficulty" value="35" onclick="chosenDifficulty()"/>
            <label for="medium">normal</label>
            <input type="radio" id="hard" name="difficulty" value="25" onclick="chosenDifficulty()"/>
            <label for="hard">Profiz&uuml;ndler</label>
            <button class="button col-xs-3" name="clicks" onclick="chosenDifficulty()" id="clicks">Klicks</button>
            <!--Erklärung, wie viele clicks bei jeder Stufe zur Verfügung stehen-->
        </div>
        <div class="clear"></div>


<!--        <div class="buttonmenu">-->
<!--            <button class="button col-xs-3">leicht</button>-->
<!--            <button class="button col-xs-3">normal</button>-->
<!--            <button class="button col-xs-3">Profiz&uuml;ndler</button>-->
<!--            <button class="button col-xs-3">Klicks</button>-->
<!---->
<!--        </div>-->
        </form>


    </main>
    <div class="clear"></div>


<?php

echo $this->footer;

?>