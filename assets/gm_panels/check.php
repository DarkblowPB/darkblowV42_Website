<?php
// Include File Koneksi
require_once('Connection/include.php');
// Enkripsi Password Custom
function encrypt($pass)
{
	$salt = '/x!a@r-$r%an¨.&e&+f*f(f(a)';
	$result = hash_hmac('md5', $pass, $salt);
	return $result;
}

$username = pg_escape_string($_GET['login']);
$password = pg_escape_string($_GET['password']);

$Query = $connec->prepare("SELECT * FROM accounts WHERE login = '".$username."' AND password = '".encrypt($password)."'");
$Query->execute();
$Result = $Query->fetch(PDO::FETCH_ASSOC);
if ($Result)
{
	if ($Result['access_level'] < 3) 
	{
		echo 'Forbidden';
	}
	else
	{
		echo 'Success';
	}
}
else
{
	echo 'Fail';
}
?>