<?php
/**
 * Model
 *
 * In dit bestand zet je ALLE functions die iets met data of de database doen
 *
 */


/**
 * Deze function wordt gebruikt voor het ajax search voorbeeld
 */
function searchTitels($text)
{
    $database = dbConnect();
    // filter de data die binnenkomt
    $text = htmlspecialchars($text);

    // select alleen de titels die overeen komen
    $get_titel = $database->prepare("SELECT titel FROM posts WHERE titel LIKE concat('%', :titel, '%')");

    // execute de query
    $get_titel->execute(array('titel' => $text));

    $results = [];

    // laat de titels op de pagina zien
    while ($titels = $get_titel->fetch(PDO::FETCH_ASSOC)) {
        $results[] = $titels;
    }

    return $results;
}

function getnews() {

	$database = dbConnect();

	// Haal alles op uit de table 'huisjes'
	$statement = $database->query('SELECT * FROM `news` ORDER BY `datum` DESC');

	$results = [];

	// laat de titels op de pagina zien
	while ($news = $statement->fetch(PDO::FETCH_ASSOC)) {
		$results[] = $news;
	}

	return $results;

}

function getHouse($id){
	$database = dbConnect();

	// Haal het huisje met de opgegeven id op uit de database
	$statement = $database->prepare('SELECT * FROM `huisjes` WHERE id = ?');
	$data = [$id];
	$statement->execute($data);

	$huisje = $statement->fetch(PDO::FETCH_ASSOC);

	return $huisje;
}

/**
 * Haal alle agenda / evenementen
 * @return array
 */
function getAllEvents(){
	$database = dbConnect();

	// Haal alles op uit de table 'huisjes'
	$statement = $database->query('SELECT * FROM `evenementen` ORDER BY `datum` ASC');

	$results = [];

	// laat de titels op de pagina zien
	while ($evenement = $statement->fetch(PDO::FETCH_ASSOC)) {
		$results[] = $evenement;
	}

	return $results;
}
function getAllAgenda() {

     $database = dbConnect();

     $statement = $database->query('SELECT * FROM `agenda` ORDER BY `date` ASC');

     $results = [];

     // laat de titels op de pagina zien
     while ($agenda = $statement->fetch(PDO::FETCH_ASSOC)) {
         $results[] = $agenda;
     }

     return $results;

 }
