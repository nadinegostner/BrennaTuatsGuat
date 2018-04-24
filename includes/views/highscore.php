<?php

require("../../connectiondb.php");

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
                <tr>
                    <th scope="row">1</th>  <!-- Klasse hinzufügen um über Java Reihennummer rauf zu zählen und auszugeben?-->
                    <td>very best highscore</td>
                    <td>Fackelmann</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>score</td>
                    <td>Thornton</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>next score</td>
                    <td>@twitter</td>
                </tr>
                </tbody>
            </table>
        </div>

    </main>

<?php

echo $this->footer;

?>