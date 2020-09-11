
	<?PHP
	$conn = mysql_connect ("$servername", "$databasename", "$username", "$password") ;
	if (! $conn->connect_error)
	{
	die("Connection failed: " . $conn->connect_error);
	}
echo "Connected successfully";
	mysqli_select_db  ("maBase", $conn) ;
	//en stocke la date du jour dans la variable $date_inscri
	$date_inscri=date();

	$sql=" INSERT INTO `visiteurs` (`id`, `nom`, `prenom`, `age`, `paye`, `sexe`, `date inscri`)
	VALUES
	('','$_POST[nom]','$_POST[prenom]','$_POST[age]','$_POST[paye]','$_POST[sexe]','$date_inscri')";

if (! $conn->connect_error)
{
die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully"
	mysql_close($con)
	?>
	<a href=" add.php ">Retour au formulaire</a>
