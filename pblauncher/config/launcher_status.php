<?php
include '../../assets/include.php';

$check = $connec->prepare("SELECT * FROM info_launcher_configs");
$check->execute();
$result = $check->fetch(PDO::FETCH_ASSOC);
if ($result) 
{
	if ($result['status'] == 1) 
	{
		echo "1";
	}
	if ($result['status'] != 1) 
	{
		echo "0";
	}
}
else
{
	echo "INVALID";
}
?>