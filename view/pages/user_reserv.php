<div class="of-container of-main">
    <form action="index.php?ac=reserv" method="post"  class="of-main-form">
        <ul class="of-main-form-ul">
            <li class="of-main-form-item">
                <select id="select" name="formule" oninput="cost_calculator(Formules, <?php echo $salle[2]; ?>)">

                    <?php
                    foreach ($formules as $formule) {
                        echo "<option id='" . $formule[0] . "'>
                                " . $formule[1] . "
                            </option>";

                    }
                    ?>

                </select>
            </li>

            <li class="of-main-form-item">
                <input class="of-main-form-item-link" type="text" placeholder="Prénom de l'enfant" name="fnameenfant" required/>
            </li>

            <li class="of-main-form-item">
                <input class="of-main-form-item-link" type="text" placeholder="Nom de l'enfant" name="lnameenfant" required/>
            </li>

            <li class="of-main-form-item">
                <input class="of-main-form-item-link" type="number" placeholder="Age le jour de l'anniversiare" name="age" min="1" max="13" required/>
            </li>

            <li class="of-main-form-item">
                <input class="of-main-form-item-link" type="text" placeholder="Date" name="date" onclick="ds_sh(this)" required/>
            </li>

            <li class="of-main-form-item">
                <input class="of-main-form-item-link" type="text" placeholder="Creneau" name="creneau" id="creneau" value="" required/>
            </li>

            <li class="of-main-form-item">
                <input class="of-main-form-item-link" placeholder="Nombre d'enfant supplémentaire" id="enfant" type="number" name="childnb"
                       oninput="cost_calculator(Formules, <?php echo $salle[2]; ?>)">
            </li>

            <li class="of-main-form-item">
                <input class="of-main-form-item-link" placeholder="Nombre d'adultes supplémentaire" id="adult" type="number" name="adultnb"
                       oninput="cost_calculator(Formules, <?php echo $salle[2]; ?>)">
            </li>

            <li class="of-main-form-item">
                <input class="of-main-form-item-link" placeholder="Boisson Supplémentaire" id="drink" type="number" name="drinknb"
                       oninput="cost_calculator(Formules, <?php echo $salle[2]; ?>)">
            </li>

            <li class="of-main-form-item">
                <input class="of-main-form-item-link" placeholder="Voulez-vous un gateau supplémentaires?" id="cake" type="number" name="cakenb"
                       oninput="cost_calculator(Formules, <?php echo $salle[2]; ?>)">
            </li>

            <li class="of-main-form-item">
                <p>prix total</p>
                <input class="of-main-form-item-link" type='text' id='cost_result' name="total_cost" value='0'>
            </li>

            <li class="of-main-form-item">
                <input class="of-main-button-item" type="submit" class="button" value="valider" name="subscribe" id="submit_button">
            </li>

            <li>
                <input class="of-main-form-item-link" type='hidden' id='idformule' name='idformule' value='0'>
            </li>

            <li>
                <input class="of-main-form-item-link" type='hidden' id='idsalle' name='idsalle' value='<?php echo $salle[0]; ?>'>
            </li>

            <li>
                <table class='ds_box' cellpadding='0' cellspacing='0' id='ds_conclass' style=' display: none;'>
                    <tr>
                        <td id='ds_calclass'></td>
                    </tr>
                </table>
            </li>
        </ul>
    </form>

</div>