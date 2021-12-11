<html>
<body>


<?php
$x = $_POST["agelistdropdown"];
function artistage($x)
 {
    if ($x == "Tim McGraw")
	{
		return "Age of Timmy";
	}
    if ($x == "Kenny Chesney")
	{
		return "Age of  Kenny";
	}
	
    return "Artists age not found";
 }


?>

<br />
<?php echo artistage($x); ?><br>


</body>
</html>