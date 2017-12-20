<div class="of-container of-main-reservation-anniv">


    <div class="of-main-form">
        <form action="index.php?ac=reserv" method="post">
            <ul>
                <li class="of-main-form-item">
                    <h2 class="of-main-title-h2">Réservation :</h2>
                </li>

                <li class="of-main-form-item">
                    <select class="of-main-form-item-link" id="select" name="formule" oninput="cost_calculator(Formules, <?php echo $salle[2]; ?>)">

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
                    <input class="of-main-form-item-link" placeholder="Nombre d'enfant supplémentaire" min="0" id="enfant" type="number" name="childnb" oninput="cost_calculator(Formules, <?php echo $salle[2]; ?>)">
                </li>

                <li class="of-main-form-item">
                    <input class="of-main-form-item-link" placeholder="Nombre d'adultes supplémentaire" min="0" max="20" id="adult" type="number" name="adultnb" oninput="cost_calculator(Formules, <?php echo $salle[2]; ?>)" >
                </li>

                <li class="of-main-form-item">
                    <input class="of-main-form-item-link" placeholder="Boisson Supplémentaire" min="0" max="15" id="drink" type="number" name="drinknb" oninput="cost_calculator(Formules, <?php echo $salle[2]; ?>)" >
                </li>

                <li class="of-main-form-item">
                    <input class="of-main-form-item-link" placeholder="Voulez-vous un gateau supplémentaires?" min="0" max="8" id="cake" type="number" name="cakenb" oninput="cost_calculator(Formules, <?php echo $salle[2]; ?>)" >
                </li>

                <li class="of-main-form-item">
                    <h2 class="of-main-title-h2">
                        Prix total :
                    </h2>

                    <input class="of-main-form-item-link" type='text' id='cost_result' name="total_cost" value='0'>
                </li>

                <li class="of-main-form-item">
                    <input class="of-main-button-item of-main-form-button-invalid" type="submit" value="valider" name="subscribe" id="submit_button" onclick="cost_calculator(Formules, <?php echo $salle[2]; ?>)">
                </li>

                <li class="of-main-form-item">
                    <input class="of-main-form-item-link" type='hidden' id='idformule' name='idformule' value='0'>
                </li>

                <li class="of-main-form-item">
                    <input class="of-main-form-item-link" type='hidden' id='idsalle' name='idsalle' value='<?php echo $salle[0]; ?>'>
                </li>

                <li class="of-main-form-item">
                    <table class='ds_box' cellpadding='0' cellspacing='0' id='ds_conclass' style=' display: none;'>
                        <tr>
                            <td id='ds_calclass'></td>
                        </tr>
                    </table>
                </li>
            </ul>
        </form>
    </div>
</div>