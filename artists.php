<html>
<body>


<?php
$x = $_GET["listdropdown"];
function favoriteartist($x)
 {
    if ($x == "Elvis Presley")
	{
		return "Elvis Presley once asked his limo driver, Do you own this limo or do you work for the company? He responded, I work for the company. Elvis said, Well, you own it now. The limo drivers tip was the limo.";
	}
    if ($x == "Ed Sheeran")
	{
		return "When his childhood friend, Amy Wadge, couldn't afford to pay her mortgage, Ed Sheeran let her co-write Thinking Out Loud, so she could get paid for it. The song has been streamed more than half a billion times on Spotify alone, and it eventually went three times platinum in the UK";
	}
	if ($x == "Ed Sheeran")
	{
		return " Before Ed Sheeran became internationally famous, he put on a free show for his small fan base. Over 1,000 fans turned up to see the show, so Sheeran ended up playing four different shows to make sure everyone saw a gig, including a gig outside on the street after the venue had closed.";
	}
	if ($x == "Garth Brooks")
	{
		return " The Super Bowl has required national anthem vocals to be pre-recorded since 1993 when Garth Brooks declined to pre-record and then refused to sing live until a dispute over debuting a music video during the game could be settled, resulting in a delayed kickoff.";
	}
	if ($x == "Garth Brooks")
	{
		return "Garth Brooks is one of the last holds out big-name musicians refusing to put his music on iTunes because he disagrees with Apple's approach to selling music. He will only make his back catalog of hits and his new music available for download on his own website.";
	}
	if ($x == "Elvis Presley")
	{
		return "The only time Elvis Presley and The Beatles met, they were so starstruck that Elvis threatened to go to bed unless one of the band members spoke to him.";
	}
	if ($x == "Elvis Presley")
	{
		return "The second floor of Elvis' Graceland is forbidden and the only non-family member to see it was American actor Nicholas Cage, who married Lisa Marie Presley.";
	}
	if ($x == "Celine Dion ")
	{
		return "In 2016, Celine Dion stood near the open casket of her deceased husband for 7 hours to greet and comfort complete strangers who had arrived to pay their respects at the public visitation held on the eve of his funeral. She was only expected to stay for 30 minutes.";
	}
	
    return "Artist not found";
 }


?>

<br />
<?php echo favoriteartist($x); ?><br>


</body>
</html>