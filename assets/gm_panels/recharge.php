<?php
require_once 'Connection/include.php';

$player_id = $_GET['player_id'];
$IDR = $_GET['idr'];
$gm_username = $_GET['gm_username'];

// IDR 25.000 Declare
$dcash_25k = 5000;
$webcoin_25k = 1000;
// END IDR 25.000

// IDR 50.000 Declare
$dcash_50k = 10000;
$webcoin_50k = 2000;
// END IDR 50.000

// IDR 75.000 Declare
$dcash_75k = 15000;
$webcoin_75k = 3000;
// END IDR 75.000

// IDR 100.000 Declare
$dcash_100k = 20000;
$webcoin_100k = 4000;
// END IDR 100.000

// IDR 125.000 Declare
$dcash_125k = 25000;
$webcoin_125k = 5000;
// END IDR 125.000

// IDR 150.000 Declare
$dcash_150k = 30000;
$webcoin_150k = 6000;
// END IDR 150.000

// IDR 175.000 Declare
$dcash_175k = 35000;
$webcoin_175k = 7000;
// END IDR 175.000

// IDR 200.000 Declare
$dcash_200k = 40000;
$webcoin_200k = 8000;
// END IDR 200.000

if ($IDR == "25.000") 
{
    $query = $connec->prepare("SELECT * FROM accounts WHERE player_id = '".$player_id."'");
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);
    if ($result) 
    {

        $dcash = $result['money'] + $dcash_25k;
        $webcoin = $result['kuyraicoin'] + $webcoin_25k;
        
        // Query 1
        $sql_0 = 'UPDATE accounts ' . 'SET money = :mn ' . 'WHERE player_id = :p_id';
        $stmt_0 = $connec->prepare($sql_0);
        $stmt_0->bindParam(':mn', $dcash, PDO::PARAM_STR);
        $stmt_0->bindParam(':p_id', $player_id, PDO::PARAM_STR);
        $stmt_0->execute();

        // Query 2
        $sql_1 = 'UPDATE accounts '
        . 'SET kuyraicoin = :mnn '
        . 'WHERE player_id = :pp_id';
        $stmt_1 = $connec->prepare($sql_1);
        $stmt_1->bindParam(':mnn', $webcoin, PDO::PARAM_STR);
        $stmt_1->bindParam(':pp_id', $player_id, PDO::PARAM_STR);
        $stmt_1->execute();

        echo 'Success_25k';
    }
    else
    {
        echo 'Fail_25k';
    }
}
else if ($IDR == "50.000") 
{
    $query = $connec->prepare("SELECT * FROM accounts WHERE player_id = '".$player_id."'");
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);
    if ($result) 
    {

        $dcash = $result['money'] + $dcash_50k;
        $webcoin = $result['kuyraicoin'] + $webcoin_50k;
        
        // Query 1
        $sql_0 = 'UPDATE accounts '
        . 'SET money = :mn '
        . 'WHERE player_id = :p_id';
        $stmt_0 = $connec->prepare($sql_0);
        $stmt_0->bindParam(':mn', $dcash, PDO::PARAM_STR);
        $stmt_0->bindParam(':p_id', $player_id, PDO::PARAM_STR);
        $stmt_0->execute();

        // Query 2
        $sql_1 = 'UPDATE accounts '
        . 'SET kuyraicoin = :mnn '
        . 'WHERE player_id = :pp_id';
        $stmt_1 = $connec->prepare($sql_1);
        $stmt_1->bindParam(':mnn', $webcoin, PDO::PARAM_STR);
        $stmt_1->bindParam(':pp_id', $player_id, PDO::PARAM_STR);
        $stmt_1->execute();

        echo 'Success_50k';
    }
    else
    {
        echo 'Fail_50k';
    }
}
else if ($IDR == "75.000") 
{
    $query = $connec->prepare("SELECT * FROM accounts WHERE player_id = '".$player_id."'");
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);
    if ($result) 
    {

        $dcash = $result['money'] + $dcash_75k;
        $webcoin = $result['kuyraicoin'] + $webcoin_75k;
        
        // Query 1
        $sql_0 = 'UPDATE accounts '
        . 'SET money = :mn '
        . 'WHERE player_id = :p_id';
        $stmt_0 = $connec->prepare($sql_0);
        $stmt_0->bindParam(':mn', $dcash, PDO::PARAM_STR);
        $stmt_0->bindParam(':p_id', $player_id, PDO::PARAM_STR);
        $stmt_0->execute();

        // Query 2
        $sql_1 = 'UPDATE accounts '
        . 'SET kuyraicoin = :mnn '
        . 'WHERE player_id = :pp_id';
        $stmt_1 = $connec->prepare($sql_1);
        $stmt_1->bindParam(':mnn', $webcoin, PDO::PARAM_STR);
        $stmt_1->bindParam(':pp_id', $player_id, PDO::PARAM_STR);
        $stmt_1->execute();

        echo 'Success_75k';
    }
    else
    {
        echo 'Fail_75k';
    }
}
else if ($IDR == "100.000") 
{
    $query = $connec->prepare("SELECT * FROM accounts WHERE player_id = '".$player_id."'");
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);
    if ($result) 
    {

        $dcash = $result['money'] + $dcash_100k;
        $webcoin = $result['kuyraicoin'] + $webcoin_100k;
        
        // Query 1
        $sql_0 = 'UPDATE accounts '
        . 'SET money = :mn '
        . 'WHERE player_id = :p_id';
        $stmt_0 = $connec->prepare($sql_0);
        $stmt_0->bindParam(':mn', $dcash, PDO::PARAM_STR);
        $stmt_0->bindParam(':p_id', $player_id, PDO::PARAM_STR);
        $stmt_0->execute();

        // Query 2
        $sql_1 = 'UPDATE accounts '
        . 'SET kuyraicoin = :mnn '
        . 'WHERE player_id = :pp_id';
        $stmt_1 = $connec->prepare($sql_1);
        $stmt_1->bindParam(':mnn', $webcoin, PDO::PARAM_STR);
        $stmt_1->bindParam(':pp_id', $player_id, PDO::PARAM_STR);
        $stmt_1->execute();

        echo 'Success_100k';
    }
    else
    {
        echo 'Fail_100k';
    }
}
if ($IDR == "125.000") 
{
    $query = $connec->prepare("SELECT * FROM accounts WHERE player_id = '".$player_id."'");
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);
    if ($result) 
    {

        $dcash = $result['money'] + $dcash_125k;
        $webcoin = $result['kuyraicoin'] + $webcoin_125k;
        
        // Query 1
        $sql_0 = 'UPDATE accounts '
        . 'SET money = :mn '
        . 'WHERE player_id = :p_id';
        $stmt_0 = $connec->prepare($sql_0);
        $stmt_0->bindParam(':mn', $dcash, PDO::PARAM_STR);
        $stmt_0->bindParam(':p_id', $player_id, PDO::PARAM_STR);
        $stmt_0->execute();

        // Query 2
        $sql_1 = 'UPDATE accounts '
        . 'SET kuyraicoin = :mnn '
        . 'WHERE player_id = :pp_id';
        $stmt_1 = $connec->prepare($sql_1);
        $stmt_1->bindParam(':mnn', $webcoin, PDO::PARAM_STR);
        $stmt_1->bindParam(':pp_id', $player_id, PDO::PARAM_STR);
        $stmt_1->execute();

        echo 'Success_125k';
    }
    else
    {
        echo 'Fail_125k';
    }
}
else if ($IDR == "150.000") 
{
    $query = $connec->prepare("SELECT * FROM accounts WHERE player_id = '".$player_id."'");
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);
    if ($result) 
    {

        $dcash = $result['money'] + $dcash_150k;
        $webcoin = $result['kuyraicoin'] + $webcoin_150k;
        
        // Query 1
        $sql_0 = 'UPDATE accounts '
        . 'SET money = :mn '
        . 'WHERE player_id = :p_id';
        $stmt_0 = $connec->prepare($sql_0);
        $stmt_0->bindParam(':mn', $dcash, PDO::PARAM_STR);
        $stmt_0->bindParam(':p_id', $player_id, PDO::PARAM_STR);
        $stmt_0->execute();

        // Query 2
        $sql_1 = 'UPDATE accounts '
        . 'SET kuyraicoin = :mnn '
        . 'WHERE player_id = :pp_id';
        $stmt_1 = $connec->prepare($sql_1);
        $stmt_1->bindParam(':mnn', $webcoin, PDO::PARAM_STR);
        $stmt_1->bindParam(':pp_id', $player_id, PDO::PARAM_STR);
        $stmt_1->execute();

        echo 'Success_150k';
    }
    else
    {
        echo 'Fail_150k';
    }
}
else if ($IDR == "175.000") 
{
    $query = $connec->prepare("SELECT * FROM accounts WHERE player_id = '".$player_id."'");
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);
    if ($result) 
    {

        $dcash = $result['money'] + $dcash_175k;
        $webcoin = $result['kuyraicoin'] + $webcoin_175k;
        
        // Query 1
        $sql_0 = 'UPDATE accounts '
        . 'SET money = :mn '
        . 'WHERE player_id = :p_id';
        $stmt_0 = $connec->prepare($sql_0);
        $stmt_0->bindParam(':mn', $dcash, PDO::PARAM_STR);
        $stmt_0->bindParam(':p_id', $player_id, PDO::PARAM_STR);
        $stmt_0->execute();

        // Query 2
        $sql_1 = 'UPDATE accounts '
        . 'SET kuyraicoin = :mnn '
        . 'WHERE player_id = :pp_id';
        $stmt_1 = $connec->prepare($sql_1);
        $stmt_1->bindParam(':mnn', $webcoin, PDO::PARAM_STR);
        $stmt_1->bindParam(':pp_id', $player_id, PDO::PARAM_STR);
        $stmt_1->execute();

        echo 'Success_175k';
    }
    else
    {
        echo 'Fail_175k';
    }
}
else if ($IDR == "200.000") 
{
    $query = $connec->prepare("SELECT * FROM accounts WHERE player_id = '".$player_id."'");
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);
    if ($result) 
    {

        $dcash = $result['money'] + $dcash_200k;
        $webcoin = $result['kuyraicoin'] + $webcoin_200k;
        
        // Query 1
        $sql_0 = 'UPDATE accounts '
        . 'SET money = :mn '
        . 'WHERE player_id = :p_id';
        $stmt_0 = $connec->prepare($sql_0);
        $stmt_0->bindParam(':mn', $dcash, PDO::PARAM_STR);
        $stmt_0->bindParam(':p_id', $player_id, PDO::PARAM_STR);
        $stmt_0->execute();

        // Query 2
        $sql_1 = 'UPDATE accounts '
        . 'SET kuyraicoin = :mnn '
        . 'WHERE player_id = :pp_id';
        $stmt_1 = $connec->prepare($sql_1);
        $stmt_1->bindParam(':mnn', $webcoin, PDO::PARAM_STR);
        $stmt_1->bindParam(':pp_id', $player_id, PDO::PARAM_STR);
        $stmt_1->execute();

        echo 'Success_200k';
    }
    else
    {
        echo 'Fail_200k';
    }
}
?>