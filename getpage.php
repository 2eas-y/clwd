<?php
session_start();

$identifier = ($_GET["id"]);



if (isset($_SESSION['item_link'.$identifier]) && isset($_SESSION['item_title'.$identifier])) {
		
	$link3  =  $_SESSION['item_link'.$identifier];
    $title =  $_SESSION['item_title'.$identifier];
   
}

   header( "Location: $link3" );

?>