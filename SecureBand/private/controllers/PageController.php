<?php

/**
 * Class PageController
 *
 * Deze handelt de logica van alle algemene pagina;s af (over ons, wie zijn we etc,)
 * Haalt gegevens uit de "model" laag van de website (de gegevens)
 * Geeft de gegevens aan de "view" laag (HTML template) om weer te geven
 *
 */
 function zoeken() {
	$searchterm = filter_var($_GET ['term'], FILTER_SANITIZE_STRING);
	$zoekresultaten = search_database($searchterm);
	print_r($zoekresultaten);

 }

class PageController {


	function tyler1(){

		//Hier haal je de template engine op, die weet dat de views in private/views staan
		        $template_engine = get_template_engine();

		        //De template engine opdracht geven de juiste view weergeven: homepage (de ".php" mag je weglaten uit de naam van de view)
		        echo $template_engine->render( 'tyler1' );
	}

	function contact(){

		//Hier haal je de template engine op, die weet dat de views in private/views staan
        $template_engine = get_template_engine();

        //De template engine opdracht geven de juiste view weergeven: homepage (de ".php" mag je weglaten uit de naam van de view)
        echo $template_engine->render( 'contact' );

	}
	function schedule(){
$agenda = getAllAgenda();
		//Hier haal je de template engine op, die weet dat de views in private/views staan
				$template_engine = get_template_engine();

				//De template engine opdracht geven de juiste view weergeven: homepage (de ".php" mag je weglaten uit de naam van de view)
				echo $template_engine->render( 'schedule',['agenda'=>$agenda] );


	}


}
