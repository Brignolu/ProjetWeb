<?php
function recup_all_reserv($c, $encryption_key){
    $sql = "SELECT * FROM reservation ORDER BY id";
    $result = mysqli_query($c,$sql);
    $loop = 0;
    $reservations= array ();
    while ($donnees = mysqli_fetch_assoc($result))
    {
        $date=explode("-",$donnees['reservdate']);
        $reservations[$loop][0]=ltrim($date[0],"0");
        $reservations[$loop][1]=ltrim($date[1], "0");
        $reservations[$loop][2]=ltrim($date[2], "0");
        $reservations[$loop][3]= $donnees['creneau'];
        $loop++;
    }
    return $reservations;
}

//script de reservation pour les user
//ajoute dans la bdd les valeurs
//renvoi true si la connection a fonctionné sinon false
function user_reserv($iduser, $idformule, $idsalle, $fnameenfant, $lnameenfant, $age, $date, $creneau, $childnb, $adultnb, $drinknb, $cakenb, $price, $c, $encryption_key) {
    //cryptage du password
    //$password = crypt($password,$encryption_key);
    //insertion des valeurs dans la bdd
    $sql = ("INSERT INTO reservation(iduser, idformule, idsalle, fnameenfant, lnameenfant, age, reservdate, creneau, childnb, adultnb, drinknb, cakenb, price) VALUES('$iduser','$idformule','$idsalle' ,'$fnameenfant','$lnameenfant' ,'$age', '$date', '$creneau', '$childnb', '$adultnb', '$drinknb', '$cakenb', '$price')");
    if(mysqli_query($c,$sql)){
        return true;
    }
    else{
        return false;
    }
}

function get_reserv_by_user_id($id, $c){
    $sql = "SELECT reservation.id, reservation.reservdate, reservation.creneau, formules.name as formulesname, reservation.price as pricetotal, formules.price as priceunit, salles.nom as sallename, reservation.fnameenfant, reservation.lnameenfant, reservation.age, reservation.childnb, reservation.adultnb, reservation.drinknb, reservation.cakenb
    FROM reservation, formules, salles
    WHERE reservation.idformule = formules.id
    AND reservation.idsalle = salles.id
    AND reservation.iduser ='$id'";
    $result = mysqli_query($c,$sql);
    $loop = 0;
    $reservations= array ();

    while ($donnees = mysqli_fetch_assoc($result))
    {
        $reservations[$loop]= $donnees;
        $loop++;
    }
    return $reservations;

}

