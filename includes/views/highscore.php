<?php

echo $this->header;

?>

    </header>

    <main id="wrapper">

        <h1>Highscore</h1>



        <div class="highscore">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Score</th>
                    <th scope="col">Username</th>
                    <th scope="col">Schwierigkeit</th>
                </tr>
                </thead>
                <tbody>
                <?php $num = 0; foreach($this->highscores as $highscore): $num++?>  <!--num gibt Platzierung aus, zählt automatisch mit-->
                    <tr>
                        <th scope="row"><?php echo $num  ?></th>
                        <td><?php echo $highscore->score; ?></td>
                        <td><?php echo $highscore->username; ?></td>
                        <td><?php echo $highscore->description; ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="description">
            *Der Highscore definiert die nicht verbrauchten Spielzüge eines Games.<br>
            Vorsicht! Die maximalen Spielzüge unterscheiden sich je nach Schwierigkeitsgrad!
            Easy: 45 | Medium: 35 | Profiz&uuml;ndler: 25
        </div>

    </main>

<?php

echo $this->footer;

?>