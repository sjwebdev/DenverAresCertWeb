<?php
include("./templates/header.inc");

#include("./templates/left.php");

$page = "";
if(!empty($_GET) && $_GET["page"]) {
	$page = htmlspecialchars($_GET["page"]);
}

switch($page) {
	case "home":
		include("templates/home.inc");
		break;
	case "about":
		include("templates/about.inc");
		break;
	case "calendar":
		include("templates/calendar.inc");
		break;
	case "news":
		include("templates/news.inc");
		break;
	case "photos":
		include("templates/photos.inc");
		break;
	case "join":
		include("templates/join.inc");
		break;
	case "contact":
		include("templates/contact.inc");
		break;
	case "skywarn":
		include("templates/skywarn.inc");
		break;
	case "training":
		include("templates/training.inc");
		break;
	default:
		include("templates/home.inc");
		break;
}
	
#include("./templates/right.inc");

include("./templates/footer.inc");
?>
