<?

function sanitizeInput($string)
{

	$string = htmlspecialchars($string);
	//$string = str_replace("<", "&lt", $string);
	//$string = str_replace(">", "&gt", $string);
	//$string = str_replace("&", "&amp", $string);
	//$string = str_replace("\"", "&quot", $string);
	//$string = str_replace("'", "&#x27", $string);

	return $string;
}
