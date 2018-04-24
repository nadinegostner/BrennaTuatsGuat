<?php

echo $this->header;



?>
    <main>
        <div class="buttonbar">
            <button type="submit">Leicht</button>
            <button type="submit">Normal</button>
            <button type="submit">Profiz&uuml;ndler</button>
            <button type="button">Klicks</button>
        </div>
        <!--TODO: Startseite Spiel mit Playbutton und Schwierigkeitsstufen!-->


        <input type="text" name="score" id="score" value="" placeholder="score">
        <input type="text" name="difficulty" id="difficulty" value="" placeholder="difficulty">
        <button type="button" id="endgame" class="btn btn-primary">Spiel geschafft</button>


    </main>


<script type="text/javascript">
    var userId = '<?php echo $this->userid; ?>';
</script>

<?php

echo $this->footer;

?>
