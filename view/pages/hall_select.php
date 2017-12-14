
<div class="of-container of-main">
    <form action="index.php?reservform=reserv" method="post">
        <div id="three-column">

            <?php

            foreach ($salles as $salle) {
            echo $salle[1];
            echo $salle[2];
            echo $salle[3];
            echo '<input type="radio" name="hall-choice" value="' . $salle[0] . '">';
            }

            ?>

        </div>

        <div class="div_menu_line">
            <input type='submit' class='button' value='valider' name='subscribe'>
        </div>
    </form>
</div>