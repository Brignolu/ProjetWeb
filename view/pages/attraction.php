<div class="of-container of-main-attraction">
    <div class="of-main-block-salle-all">
        <?php
        foreach ($attractions as $attraction) {
            echo '<div class="of-main-block-salle">';
            echo '<h2 class="of-main-block-salle-title"> ' . $attraction["nom"] . '</h2>';
            echo '<img src="' . $attraction["photo1"] . '" alt="erreur" class="of-img-salle">';
            echo '<p class="of-img-description"> ' . $attraction["description"] . '</p>';
            echo '</div>';
        }
        ?>
    </div>

</div>