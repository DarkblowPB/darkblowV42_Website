<?php

require_once 'Connection/include.php';

$player_id = pg_escape_string($_GET['player_id']);
$gm = pg_escape_string($_GET['gm_username']);
$banned = "-1";

$base = $connec->prepare("SELECT * FROM accounts WHERE login = '".$gm."'");
$base->execute();
$result_base = $base->fetch(PDO::FETCH_ASSOC);
if ($result_base) 
{
    $query = $connec->prepare("SELECT * FROM accounts WHERE player_id = '".$player_id."'");
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);
    if ($result) 
    {
        if ($result['access_level'] == "-1")
        {
            echo 'Already';
        }
        else if ($result_base['access_level'] <= $result['access_level'])
        {
            echo 'Forbidden';
        }
        else
        {
            $sql = 'UPDATE accounts '
            . 'SET access_level = :mn '
            . 'WHERE player_id = :p_id';
            $stmt = $connec->prepare($sql);
            $stmt->bindParam(':mn', $banned, PDO::PARAM_STR);
            $stmt->bindParam(':p_id', $player_id, PDO::PARAM_STR);
            $stmt->execute();
            echo 'Success';
        }
    }
    else
    {
        echo 'Fail';
    }    
}

?>