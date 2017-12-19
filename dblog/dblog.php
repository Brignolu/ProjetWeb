<?php

try
{
		$c = mysqli_connect("localhost", "root", "root", "openfive");
}

catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage(failed));
}
?>