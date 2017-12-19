<div class="of-container of-main">
    <div class="block-salle">
        <?php
        foreach ($attractions as $attraction) {
            echo '<h2> ' . $attraction["nom"] . '</h2>';
            echo '<p> ' . $attraction["description"] . '</p>';
            echo '<img src="'.$attraction["photo1"].'" alt="erreur">';
            echo '<img src="'.$attraction["photo2"].'" alt="erreur">';
            echo '<img src="'.$attraction["photo3"].'" alt="erreur">';
        }
        ?>
    </div>

</div>