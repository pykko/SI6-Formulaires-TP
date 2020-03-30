<?php

	$acteurs = array(
	
		array( "nom" => "Javier BARDEM" , "pays" => "es" ) ,
		array( "nom" => "Omar SY" , "pays" => "fr" ) ,
		array( "nom" => "Jean DUJARDIN" , "pays" => "fr" ) ,
		array( "nom" => "Ugo TOGNAZZI" , "pays" => "it" ) ,
		array( "nom" => "Daniel AUTEUIL" , "pays" => "fr" ) ,
		array( "nom" => "Antonio BANDERAS" , "pays" => "es" ) ,
		array( "nom" => "Edourardo NORIEGA" , "pays" => "es" ) ,
		array( "nom" => "Vittorio GASMANN" , "pays" => "it" ) ,
		array( "nom" => "Guillaume CANET" , "pays" => "fr" ) 
	) ;
	
	$nationalites = array(
		"fr" => "Française" ,
		"es" => "Espagnole" ,
		"it" => "Italienne"
	) ;
	
	
	$nationalite = $_GET['nationalite'] ;

?>


<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Exercice 4</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>

    <body>
		
		<h3>Acteurs de nationalité ... :</h3> <!-- à compléter - Point 4-->
		
		<ul>
		<?php
		
			foreach( $acteurs as $unActeur ){
				
				if( $unActeur['pays'] == $nationalite ){
					
					
				}
			}
		
		?>
		</ul>
		
	</body>

</html>	
