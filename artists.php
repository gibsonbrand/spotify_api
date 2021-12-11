<html>
<body>


<?php
$x = $_GET["listdropdown"];
function favoriteartist($x)
 {
    if ($x == "Tim McGraw")
	{
		return "Say some stuff about Timmy";
	}
    if ($x == "Kenny Chesney")
	{
		return "Say some stuff about Kenny";
	}
	
    return "Artist not found";
 }


?>

<br />
<?php echo favoriteartist($x); ?><br>


</body>
</html>