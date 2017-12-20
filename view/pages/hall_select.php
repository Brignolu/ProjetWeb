<div class="of-container of-main-reservation-salle">
    <form action="index.php?reservform=reserv" method="post">
        <div class="block-salle">
            <?php
            $i = 1;

            foreach ($salles as $salle) {
                echo '<div class="of-main-block-salle">';
                echo '<h2 class="of-main-block-salle-title">Salle ' . $salle[1] . '</h2>';
                echo '<img class="of-img-salle" src="' . $salle[3] . '" alt="sa marche pas" height="30%" width="30%" >';
                echo "<p class='of-main-block-salle-nbenfant'>Nombre d'enfant:  " . $salle[2] . "</p>";
                echo '<p class="of-main-block-salle-select"> Selectionner cette salle </p>';
                if ($i == 1) {
                    echo '<input class="of-main-block-salle-radio" type="radio" name="hall-choice" checked="checked" value="' . $salle[0] . '">';
                    $i = 0;
                }else {
                    echo '<input class="of-main-block-salle-radio" type="radio" name="hall-choice" value="' . $salle[0] . '">';
                }
                echo '</div>';
            }
            ?>

            <div>
                <input class="of-main-button-item" type='submit' class='button' value='valider' name='subscribe'>
            </div>
        </div>
    </form>
</div>