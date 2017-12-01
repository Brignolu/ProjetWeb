<?php
//formulaire de d'inscription streamer
function display_user_sub(){
	echo"
		<div class='wrapper' div='body-wrapper'>
		        <div id='extra' class='container'>
		            <form action='index.php?ac=signup' method='post'>
		                <div class='div_menu_line'>
		                    <div id='three-column'>
		                        <div class='boxalone'>
		                            <div class='box'> <span class='fa fa-user'></span>
		                                <input type='text' name='email' placeholder='adresse e-mail' required/>
		                                <input type='password' placeholder='mot de passe' name='password' required/>
		                                <input type='text' placeholder='Prenom' name='fname' required/>
		                                <input type='text' placeholder='Nom' name='lname' required/>
		                                <input type='text' placeholder='telephone' name='tel' required/>
		                                <input type='text' placeholder='addresse' name='adressepostal' required/>
		                                <input type='text' placeholder='code postal' name='codepostal' required/>
		                                <input type='text' placeholder='Ville' name='ville' required/>
		                            </div>
		                        </div>
		                    </div>
		                </div>
		                <div class='div_menu_line'>
		                <ul class='actions'>
		                    <li><input type='submit' class='button'  value='valider' name='Inscription'></li>
		                </ul>
		                </div>
		            </form>
		        </div>
		    </div>
		";
}
//formulaire de reservation
function display_user_reserv(){
	echo"
	<div class='wrapper' div='body-wrapper'>
		<div class='wrapper' div='body-wrapper'>
        <div id='extra' class='container'>
            <form action='index.php?ac=reserv' method='post'>
                <div class='div_menu_line'>
                    <div id='three-column'>
                        <div class='boxalone'>
                            <div class='box'> <span class='fa fa-user'></span>
                                <input type='text' name='fnameenfant' placeholder='Prenom de lenfant' required/>
                                <input type='text' placeholder='Nom de lenfant' name='lnameenfant' required/>
                                <input type='number' placeholder='age de lenfant le jour de l'anniversaire' name='age' min='1' max ='13' required/>
                                <input type='text' placeholder='date' name='date' required/>
                                <input type='text' placeholder='Creneau' name='creneau' required/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='div_menu_line'>
                <ul class='actions'>
                    <li><input type='submit' class='button'  value='valider' name='subscribe'></li>
                </ul>
                </div>
            </form>
        </div>
    </div>
		";
}

//prend un pseudo de streamer
//affiche le pseudo du streamer
function display_user_log($pseudo, $mail){
	echo "
	<div class='wrapper' div='body-wrapper'>
		<div id='extra' class='container'>
			<div class='title'>
				<h2>espace personnel :</h2>
			 </div>
			
		</div>
	</div>
	";

}