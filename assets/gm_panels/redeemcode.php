<?php
require_once 'Connection/include.php';

$itemid = $_GET['itemid'];
$itemname = $_GET['itemname'];
$itemduration = $_GET['itemduration'];
$itemalert = $_GET['itemalert'];
$itemcode = $_GET['itemcode'];
$itemcategory = $_GET['itemcategory'];

// Declare Days Template

$duration_3days = 259200; // Day To Second Convert
$duration_7days = 604800; // Day To Second Convert
$duration_15days = 1296000; // Day To Second Convert
$duration_30days = 2592000; // Day To Second Convert

// Declare Unit Template

$duration_1unit = 1;
$duration_3unit = 3;
$duration_5unit = 5;
$duration_7unit = 7;
$duration_10unit = 10;

// Declare Category Template

$category_main = 1;
$category_characterheadgear = 2;
$category_item = 3;

// Declare Item Name Template

$namaitem = "".$itemname." - Redeem Code";

// All Validation 3 Days

if ($itemduration == "3 Days" && $itemcategory == "Main") 
{
    $ISp_Res2 = $connec->prepare("INSERT INTO item_code (item_id, item_name, item_count, item_alert, item_code, category) VALUES(?, ?, ?, ?, ?, ?)");
    $result = $ISp_Res2->execute(array($itemid, $namaitem, $duration_3days, $itemalert, $itemcode, $category_main));
    if ($result) 
    {
        echo 'Success';
    }
    else
    {
        echo 'Fail';
    }
}
else if ($itemduration == "3 Days" && $itemcategory == "Character & Headgear") 
{
    $ISp_Res2 = $connec->prepare("INSERT INTO item_code (item_id, item_name, item_count, item_alert, item_code, category) VALUES(?, ?, ?, ?, ?, ?)");
    $result = $ISp_Res2->execute(array($itemid, $namaitem, $duration_3days, $itemalert, $itemcode, $category_characterheadgear));
    if ($result) 
    {
        echo 'Success';
    }
    else
    {
        echo 'Fail';
    }
}
else if ($itemduration == "3 Days" && $itemcategory == "Item")
{
    echo 'Fail_Forbidden';
}

// End All Validation 3 Days


// All Validation 7 Days

else if ($itemduration == "7 Days" && $itemcategory == "Main")
{
    $ISp_Res2 = $connec->prepare("INSERT INTO item_code (item_id, item_name, item_count, item_alert, item_code, category) VALUES(?, ?, ?, ?, ?, ?)");
    $result = $ISp_Res2->execute(array($itemid, $namaitem, $duration_7days, $itemalert, $itemcode, $category_main));
    if ($result) 
    {
        echo 'Success';
    }
    else
    {
        echo 'Fail';
    }
}
else if ($itemduration == "7 Days" && $itemcategory == "Character & Headgear")
{
    $ISp_Res2 = $connec->prepare("INSERT INTO item_code (item_id, item_name, item_count, item_alert, item_code, category) VALUES(?, ?, ?, ?, ?, ?)");
    $result = $ISp_Res2->execute(array($itemid, $namaitem, $duration_7days, $itemalert, $itemcode, $category_characterheadgear));
    if ($result) 
    {
        echo 'Success';
    }
    else
    {
        echo 'Fail';
    }
}
else if ($itemduration == "7 Days" && $itemcategory == "Item")
{
    echo 'Fail_Forbidden';
}

// End All Validation 7 Days

// All Validation 15 Days

else if ($itemduration == "15 Days" && $itemcategory == "Main") 
{
    $ISp_Res2 = $connec->prepare("INSERT INTO item_code (item_id, item_name, item_count, item_alert, item_code, category) VALUES(?, ?, ?, ?, ?, ?)");
    $result = $ISp_Res2->execute(array($itemid, $namaitem, $duration_15days, $itemalert, $itemcode, $category_main));
    if ($result) 
    {
        echo 'Success';
    }
    else
    {
        echo 'Fail';
    }
}
else if ($itemduration == "15 Days" && $itemcategory == "Character & Headgear")
{
    $ISp_Res2 = $connec->prepare("INSERT INTO item_code (item_id, item_name, item_count, item_alert, item_code, category) VALUES(?, ?, ?, ?, ?, ?)");
    $result = $ISp_Res2->execute(array($itemid, $namaitem, $duration_15days, $itemalert, $itemcode, $category_characterheadgear));
    if ($result) 
    {
        echo 'Success';
    }
    else
    {
        echo 'Fail';
    }
}
elseif ($itemduration == "15 Days" && $itemcategory == "Item") 
{
    echo 'Fail_Forbidden';
}

// End All Validation 15 Days

// All Validation 30 Days

else if ($itemduration == "30 Days" && $itemcategory == "Main") 
{
    $ISp_Res2 = $connec->prepare("INSERT INTO item_code (item_id, item_name, item_count, item_alert, item_code, category) VALUES(?, ?, ?, ?, ?, ?)");
    $result = $ISp_Res2->execute(array($itemid, $namaitem, $duration_30days, $itemalert, $itemcode, $category_main));
    if ($result) 
    {
        echo 'Success';
    }
    else
    {
        echo 'Fail';
    }
}
else if ($itemduration == "30 Days" && $itemcategory == "Character & Headgear")
{
    $ISp_Res2 = $connec->prepare("INSERT INTO item_code (item_id, item_name, item_count, item_alert, item_code, category) VALUES(?, ?, ?, ?, ?, ?)");
    $result = $ISp_Res2->execute(array($itemid, $namaitem, $duration_30days, $itemalert, $itemcode, $category_characterheadgear));
    if ($result) 
    {
        echo 'Success';
    }
    else
    {
        echo 'Fail';
    }
}
else if ($itemduration == "30 Days" && $itemcategory == "Item")
{
    echo 'Fail_Forbidden';
}

// End Validation 30 Days

// All Validation 1 Unit

else if ($itemduration == "1 Unit" && $itemcategory == "Main")
{
    echo 'Fail_Forbidden_v2';
}
else if ($itemduration == "1 Unit" && $itemcategory == "Character & Headgear")
{
    echo 'Fail_Forbidden_v2';
}
else if ($itemduration == "1 Unit" && $itemcategory == "Item")
{
    $ISp_Res2 = $connec->prepare("INSERT INTO item_code (item_id, item_name, item_count, item_alert, item_code, category) VALUES(?, ?, ?, ?, ?, ?)");
    $result = $ISp_Res2->execute(array($itemid, $namaitem, $duration_1unit, $itemalert, $itemcode, $category_item));
    if ($result) 
    {
        echo 'Success';
    }
    else
    {
        echo 'Fail';
    }
}

// End All Validation 1 Unit

// All Validation 3 Unit

else if ($itemduration == "3 Unit" && $itemcategory == "Main")
{
    echo 'Fail_Forbidden_v2';
}
else if ($itemduration == "3 Unit" && $itemcategory == "Character & Headgear")
{
    echo 'Fail_Forbidden_v2';
}
else if ($itemduration == "3 Unit" && $itemcategory == "Item")
{
    $ISp_Res2 = $connec->prepare("INSERT INTO item_code (item_id, item_name, item_count, item_alert, item_code, category) VALUES(?, ?, ?, ?, ?, ?)");
    $result = $ISp_Res2->execute(array($itemid, $namaitem, $duration_3unit, $itemalert, $itemcode, $category_item));
    if ($result) 
    {
        echo 'Success';
    }
    else
    {
        echo 'Fail';
    }
}

// End All Validation 3 Unit

// All Validation 5 Unit

else if ($itemduration == "5 Unit" && $itemcategory == "Main")
{
    echo 'Fail_Forbidden_v2';
}
else if ($itemduration == "5 Unit" && $itemcategory == "Character & Headgear")
{
    echo 'Fail_Forbidden_v2';
}
else if ($itemduration == "5 Unit" && $itemcategory == "Item")
{
    $ISp_Res2 = $connec->prepare("INSERT INTO item_code (item_id, item_name, item_count, item_alert, item_code, category) VALUES(?, ?, ?, ?, ?, ?)");
    $result = $ISp_Res2->execute(array($itemid, $namaitem, $duration_5unit, $itemalert, $itemcode, $category_item));
    if ($result) 
    {
        echo 'Success';
    }
    else
    {
        echo 'Fail';
    }
}

// End All Validation 5 Unit

// All Validation 7 Unit

else if ($itemduration == "7 Unit" && $itemcategory == "Main")
{
    echo 'Fail_Forbidden_v2';
}
else if ($itemduration == "7 Unit" && $itemcategory == "Character & Headgear")
{
    echo 'Fail_Forbidden_v2';
}
else if ($itemduration == "7 Unit" && $itemcategory == "Item")
{
    $ISp_Res2 = $connec->prepare("INSERT INTO item_code (item_id, item_name, item_count, item_alert, item_code, category) VALUES(?, ?, ?, ?, ?, ?)");
    $result = $ISp_Res2->execute(array($itemid, $namaitem, $duration_7unit, $itemalert, $itemcode, $category_item));
    if ($result) 
    {
        echo 'Success';
    }
    else
    {
        echo 'Fail';
    }
}

// End All Validation 7 Unit

// All Validation 10 Unit

else if ($itemduration == "10 Unit" && $itemcategory == "Main")
{
    echo 'Fail_Forbidden_v2';
}
else if ($itemduration == "10 Unit" && $itemcategory == "Character & Headgear")
{
    echo 'Fail_Forbidden_v2';
}
else if ($itemduration == "10 Unit" && $itemcategory == "Item")
{
    $ISp_Res2 = $connec->prepare("INSERT INTO item_code (item_id, item_name, item_count, item_alert, item_code, category) VALUES(?, ?, ?, ?, ?, ?)");
    $result = $ISp_Res2->execute(array($itemid, $namaitem, $duration_10unit, $itemalert, $itemcode, $category_item));
    if ($result) 
    {
        echo 'Success';
    }
    else
    {
        echo 'Fail';
    }
}

// End All Validation 10 Unit
?>