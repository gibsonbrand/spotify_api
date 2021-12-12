<html>
<body>


<?php
$x = $_POST["agelistdropdown"];
function artistage($x)
 {
    if ($x == "Taylor Swift")
	{
		return "Ago of Taylor Swift is 31";
	}
    if ($x == "Selena Gomez")
	{
		return "Age of  Selena Gomez is 29";
	}
	if ($x == "Shawn Mendes")
	{
		return "Age of Shawn Mendes is 23";
	}
	if ($x == "Billie Eilish")
	{
		return "Age of Billie Eilish is 19";
	}
	if ($x == "Beyonce")
	{
		return "Age of Queen B is 40";
	}
	if ($x == "Camila Cabello")
	{
		return "Age of  Camila Cabello is 24";
	}

    return "Artists age not found";
 }


?>

<br />
<?php echo artistage($x); ?><br>


</body>
</html>