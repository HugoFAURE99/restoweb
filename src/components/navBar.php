<?php
echo "<link rel='stylesheet' href='/projets/RestoWeb/restoweb/src/components/navBar.css'>";

//Table that contains the navigation bar buttons info
$navBarElements = array(
    array("label" => "Accueil", "link" => "/projets/RestoWeb/restoweb/src/index.php"),
    array("label" => "Connexion", "link" => "/projets/RestoWeb/restoweb/src/features/connection/connection.php"),
    array("label" => "Inscription", "link" => "/projets/RestoWeb/restoweb/src/features/inscription/inscription.php"),
    array("label" => "Deconnexion", "link" => "/projets/RestoWeb/restoweb/src/index.php" ),
    //Add array here that contains the navigation bar buttons info to add a button to the navigation bar 
);

//Get the current page URL 
$currentPageURL = $_SERVER['PHP_SELF'];

//Display the table and add class "isActive" to <li> if the current page URL is the same as the link
echo "<ul>";

echo "<li id='app_title'>Resto Web</li>";

//echo <li> with <a> link for each item in the $navBarElements array
foreach ($navBarElements as $item) {
    // If the current page URL is the same as the link, add class "isActive" to <li>
    $activeClass = ($currentPageURL == $item["link"]) ? "isActive" : "";

    echo "<li>";
    echo "<a href='" . $item["link"] . "' class='" . $activeClass . "'>" . $item["label"] . "</a>";
}
echo "</ul>";

?>