<?php

include('inc/utilisateurs.php');

// on teste si nos variables sont définies
if (isset($_POST['login']) && isset($_POST['mDp'])) {

	// on vérifie les informations du formulaire, à savoir si le pseudo saisi est bien un pseudo autorisé, de même pour le mot de passe
	if ($login_valide == $_POST['login'] && $pwd_valide == $_POST['mDp'] || $login_valide2 == $_POST['login'] && $pwd_valide2 == $_POST['mDp']) {
		// dans ce cas, tout est ok, on peut démarrer notre session

		// on la démarre :)
		session_start ();
		// on enregistre les paramètres de notre visiteur comme variables de session ($login et $pwd) (notez bien que l'on utilise pas le $ pour enregistrer ces variables)
		$_SESSION['login'] = $_POST['login'];
		$_SESSION['mDp'] = $_POST['mDp'];

		// on redirige notre visiteur vers une page de notre section membre
		header ('location: membre.php');
	}

	elseif ($login_valide == $_POST['login'] && $pwd_valide != $_POST['mDp'] || $login_valide2 == $_POST['login'] && $pwd_valide2 != $_POST['mDp']){

		echo '<body onLoad="alert(\'Membre identifié, mais mauvais mot de passe\')">';
        echo '<meta http-equiv="refresh" content="0;URL=index.php">';
	}

	else {
        
        // puis on le redirige vers la page d'accueil
        echo '<body onLoad="alert(\'Membre non identifié\')">';
        echo '<meta http-equiv="refresh" content="0;URL=index.php">';

	}
}
else {
	echo 'Les variables du formulaire ne sont pas déclarées.';
}
?>

