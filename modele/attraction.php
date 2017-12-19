<?php
function recup_all_attraction($c, $encryption_key) {
    $sql = "SELECT * FROM attraction ORDER BY id";
    $result = mysqli_query($c,$sql);

    $loop = 0;
    $attractions= array ();
    while ($donnees = mysqli_fetch_assoc($result))
    {
        $attractions[$loop]= $donnees;
        $loop++;
    }
    return $attractions;
}
