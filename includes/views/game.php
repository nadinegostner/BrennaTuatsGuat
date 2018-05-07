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



    <div id="game">
        <div class="row">
            <div class="offset-md-2 col-md-1 field" onclick="go(); checkForHit()" id="1" name="1"</div>
            <div class="col-md-1 field" onclick="checkForHit()" id="2" name="">2</div>
            <div class="col-md-1 field" onclick="checkForHit()" id="3" name="">3</div>
            <div class="col-md-1 field" onclick="checkForHit()" id="4" name="">4</div>
            <div class="col-md-1 field" onclick="checkForHit()" id="5" name="">5</div>
            <div class="col-md-1 field" onclick="checkForHit()" id="6" name="">6</div>
            <div class="col-md-1 field" onclick="checkForHit()" id="7" name="">7</div>
            <div class="col-md-1 field" onclick="checkForHit()" id="8" name="">8</div>
        </div>
        <div class="clear"></div>

        <div class="row">
            <div class="offset-md-2 col-md-1 field" onclick="checkForHit()" id="9" name="" value=""</div>
            <div class="col-md-1 field" onclick="checkForHit()" id="10" name="10"></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="11" name="11"></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="12" name="12"></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="13" name="13"></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="14" name="14"></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="15" name="15"></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="16" name="16"></div>
        </div>
        <div class="clear"></div>

        <div class="row">
            <div class="offset-md-2 col-md-1 field" onclick="checkForHit()" id="17" name="" value=""</div>
            <div class="col-md-1 field" onclick="checkForHit()" id="18" name="" value=""></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="19" name="" value=""></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="20" name="" value=""></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="21" name="" value=""></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="22" name="" value=""></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="23" name="" value=""></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="24" name="" value=""></div>
        </div>
        <div class="clear"></div>

        <div class="row">
            <div class="offset-md-2 col-md-1 field"> onclick="checkForHit()" id="25" name="" value=""></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="26" name="26" value=""></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="27" name="27" value=""></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="28" name="28" value=""></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="29" name="29" value=""></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="30" name="30" value=""></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="31" name="31" value=""></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="32" name="32" value=""></div>
        </div>
        <div class="clear"></div>

        <div class="row">
            <div class="offset-md-2 col-md-1 field"> onclick="checkForHit()" id="33" name="" value="">1</div>
            <div class="col-md-1 field" onclick="checkForHit()" id="34" name="" value=""></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="35" name="" value=""></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="36" name="" value=""></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="37" name="" value=""></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="38" name="" value=""></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="39" name="" value=""></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="40" name="" value=""></div>
        </div>
        <div class="clear"></div>

        <div class="row">
            <div class="offset-md-2 col-md-1 field" onclick="checkForHit()" id="41" name="" value=""></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="42" name="" value=""></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="43" name="" value=""></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="44" name="" value=""></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="45" name="" value=""></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="46" name="" value=""></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="47" name="" value=""></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="48" name="" value=""></div>
        </div>
        <div class="clear"></div>

        <div class="row">
            <div class="offset-md-2 col-md-1 field" onclick="checkForHit()" id="49" name="" value=""></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="50" name="" value=""></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="51" name="" value=""></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="52" name="" value=""></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="53" name="" value=""></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="54" name="" value=""></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="55" name="" value=""></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="56" name="" value=""></div>
        </div>
        <div class="clear"></div>

        <div class="row">
            <div class="offset-md-2 col-md-1 field" onclick="checkForHit()" id="57" name="1" value="1"></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="58" name="" value=""></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="59" name="" value=""></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="60" name="" value=""></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="61" name="" value=""></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="62" name="" value=""></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="63" name="" value=""></div>
            <div class="col-md-1 field" onclick="checkForHit()" id="64" name="" value=""></div>
        </div>
        <div class="clear"></div>
    </div>

<?php

echo $this->footer;

?>