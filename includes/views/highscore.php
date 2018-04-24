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
                </tr>
                </thead>
                <tbody>
                <?php foreach($this->highscores as $highscore): ?>
                    <tr>
                        <th scope="row">1</th>  <!-- Klasse hinzufügen um über Java Reihennummer rauf zu zählen und auszugeben?-->
                        <td><?php echo $highscore->score; ?></td>
                        <td><?php echo $highscore->playerid; ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>

    </main>

<?php

echo $this->footer;

?>