<?php
require_once 'Connection/include.php';

$player_id = $_GET['player_id'];
$item_id = $_GET['item_id'];
$itemduration = $_GET['itemduration'];
$itemcategory = $_GET['itemcategory'];

// Duration Template

$duration_3day = 259200;
$duration_7day = 604800;
$duration_15day = 1296000;
$duration_30day = 2592000;

$duration_1unit = 1;
$duration_3units = 3;
$duration_5units = 5;
$duration_7units = 7;
$duration_10units = 10;

// End Duration Template

// Category Template

$category_main = 1;
$category_characterheadgear = 2;
$category_item = 3;

// End Category Template

if ($itemduration == "3 Days" && $itemcategory == "Main") 
{
    $query = $connec->prepare("SELECT * FROM shop WHERE item_id = '".$item_id."'");
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);
    if ($result)
    {
        $ISp_Res2 = $connec->prepare("INSERT INTO player_items (owner_id, item_id, item_name, count, category, equip) VALUES(?, ?, ?, ?, ?, ?)");
        $result_0 = $ISp_Res2->execute(array($player_id, $result['item_id'], $result['item_name'], $duration_3day, $category_main, 1));
        if ($result_0)
        {
            echo 'Success';
        }
        else
        {
            echo 'Fail';
        }
    }
    else
    {
        echo 'Invalid';
    }
}
else if ($itemduration == "3 Days" && $itemcategory == "Character & Headgear")
{
    $query = $connec->prepare("SELECT * FROM shop WHERE item_id = '".$item_id."'");
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);
    if ($result)
    {
        $ISp_Res2 = $connec->prepare("INSERT INTO player_items (owner_id, item_id, item_name, count, category, equip) VALUES(?, ?, ?, ?, ?, ?)");
        $result_0 = $ISp_Res2->execute(array($player_id, $result['item_id'], $result['item_name'], $duration_3day, $category_characterheadgear, 1));
        if ($result_0)
        {
            echo 'Success';
        }
        else
        {
            echo 'Fail';
        }
    }
    else
    {
        echo 'Invalid';
    }
}
else if ($itemduration == "3 Days" && $itemcategory == "Item") 
{
    echo 'Forbidden';
}
else if ($itemduration == "7 Days" && $itemcategory == "Main") 
{
    $query = $connec->prepare("SELECT * FROM shop WHERE item_id = '".$item_id."'");
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);
    if ($result)
    {
        $ISp_Res2 = $connec->prepare("INSERT INTO player_items (owner_id, item_id, item_name, count, category, equip) VALUES(?, ?, ?, ?, ?, ?)");
        $result_0 = $ISp_Res2->execute(array($player_id, $result['item_id'], $result['item_name'], $duration_7day, $category_main, 1));
        if ($result_0)
        {
            echo 'Success';
        }
        else
        {
            echo 'Fail';
        }
    }
    else
    {
        echo 'Invalid';
    }
}
else if ($itemduration == "7 Days" && $itemcategory == "Character & Headgear") 
{
    $query = $connec->prepare("SELECT * FROM shop WHERE item_id = '".$item_id."'");
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);
    if ($result)
    {
        $ISp_Res2 = $connec->prepare("INSERT INTO player_items (owner_id, item_id, item_name, count, category, equip) VALUES(?, ?, ?, ?, ?, ?)");
        $result_0 = $ISp_Res2->execute(array($player_id, $result['item_id'], $result['item_name'], $duration_7day, $category_characterheadgear, 1));
        if ($result_0)
        {
            echo 'Success';
        }
        else
        {
            echo 'Fail';
        }
    }
    else
    {
        echo 'Invalid';
    }
}
else if ($itemduration == "7 Days" && $itemcategory == "Item")
{
    echo 'Forbidden';
}
else if ($itemduration == "1 Unit" && $itemcategory == "Main") 
{
    echo 'Forbidden';
}
else if ($itemduration == "1 Unit" && $itemcategory == "Character & Headgear") 
{
    echo 'Forbidden';
}
else if ($itemduration == "1 Unit" && $itemcategory == "Item") 
{
    $query = $connec->prepare("SELECT * FROM shop WHERE item_id = '".$item_id."'");
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);
    if ($result)
    {
        $ISp_Res2 = $connec->prepare("INSERT INTO player_items (owner_id, item_id, item_name, count, category, equip) VALUES(?, ?, ?, ?, ?, ?)");
        $result_0 = $ISp_Res2->execute(array($player_id, $result['item_id'], $result['item_name'], $duration_1unit, $category_item, 1));
        if ($result_0)
        {
            echo 'Success';
        }
        else
        {
            echo 'Fail';
        }
    }
    else
    {
        echo 'Invalid';
    }
}
else if ($itemduration == "3 Units" && $itemcategory == "Main") 
{
    echo 'Forbidden';
}
else if ($itemduration == "3 Units" && $itemcategory == "Character & Headgear") 
{
    echo 'Forbidden';
}
else if ($itemduration == "3 Units" && $itemcategory == "Item") 
{
    $query = $connec->prepare("SELECT * FROM shop WHERE item_id = '".$item_id."'");
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);
    if ($result)
    {
        $ISp_Res2 = $connec->prepare("INSERT INTO player_items (owner_id, item_id, item_name, count, category, equip) VALUES(?, ?, ?, ?, ?, ?)");
        $result_0 = $ISp_Res2->execute(array($player_id, $result['item_id'], $result['item_name'], $duration_3units, $category_item, 1));
        if ($result_0)
        {
            echo 'Success';
        }
        else
        {
            echo 'Fail';
        }
    }
    else
    {
        echo 'Invalid';
    }
}
?>