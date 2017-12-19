<div class="of-container of-main">
    <form action="index.php?reservform=reserv" method="post">
        <div class="block-salle">
            <?php
            $i = 1;
            foreach ($salles as $salle) {
            echo '<h2>Salle ' . $salle[1] . '</h2>';
            echo "<p>Nombre d'enfant:  " . $salle[2] . "</p>";
            echo'<p> Selectionner cette salle </p>';
            if($i ==1){
                echo'<input type="radio" name="hall-choice" value="' . $salle[0] . '" checked="checked">';
                $i --;
            }else{
                echo'<input type="radio" name="hall-choice" value="' . $salle[0] . '" >';
            }
            echo'<br>';
            echo '<img src="'.$salle[3].'" alt="sa marche pas" height="30%" width="30%">';
            }
            ?>
        </div>
        <div class="div_menu_line">
            <input type='submit' class='button' value='valider' name='subscribe'>
        </div>
    </form>
</div>