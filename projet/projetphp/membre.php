<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();

// On récupère nos variables de session
if (isset($_SESSION['login']) && isset($_SESSION['mDp'])) {

	// On teste pour voir si nos variables ont bien été enregistrées
    include('inc/index_co.php');
    
}
else {
	echo 'Les variables ne sont pas déclarées.';
}
?>