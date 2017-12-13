<div class="of-container of-main">

    <h2 class="of-main-title2">Réservation :</h2>

    <div class="of-main-form">
        <form action='index.php?ac=reserv' method='post'>
            <ul>
                <li class="of-main-form-item-link">
                    <input type='text' name='fnameenfant' placeholder='Prenom de lenfant' required/>
                </li>

                <li class="of-main-form-item-link">
                    <input type='text' placeholder='Nom de lenfant' name='lnameenfant' required/>
                </li>

                <li class="of-main-form-item-link">
                    <input type='number' placeholder='age de lenfant le jour de l'anniversaire' name='age' min='1' max ='13' required/>
                </li>

                <li class="of-main-form-item-link">
                    <input type='text' placeholder='date' name='date' required/>
                </li>

                <li class="of-main-form-item-link">
                    <input type='text' placeholder='Creneau' name='creneau' required/>
                </li>

                <li class="of-main-form-item-link">
                    <input type='submit' class='button'  value='valider' name='subscribe'>
                </li>
            </ul>
        </form>
    </div>
</div>