<div class="of-container of-main-reservation-salle">
    <form action="index.php?reservform=reserv" method="post">
        <div class="block-salle">
            <?php
            foreach ($salles as $salle) {
                echo '<div class="of-main-block-salle">';
                echo '<h2 class="of-main-block-salle-title">Salle ' . $salle[1] . '</h2>';
                echo "<p class='of-img-description'>Nombre d'enfant:  " . $salle[2] . "</p>";
                echo '<p class="of-img-description"> Selectionner cette salle </p>';
                echo '<input type="radio" name="hall-choice" value="' . $salle[0] . '">';
                echo '<br>';
                echo '<img src="' . $salle[3] . '" alt="sa marche pas" height="30%" width="30%" >';
                echo '</div>';
            }
            ?>
        </div>
        <div class="div_menu_line">
            <input type='submit' class='button' value='valider' name='subscribe'>
        </div>
    </form>
</div>