<?php
/**
 * Usage of LeanKit Kanban API calls
 * @author SQLFusion
 * @date 06-25-2012
 * @see http://support.leankitkanban.com/forums/20153741-api
 */

include_once("class/LeanKitKanban.class.php");
$leankitkanban = new LeanKitKanban("leankitkanban_email","leankitkanban_password");

//Get Boards
$response = $leankitkanban->getBoards('Boards');

//adding a new card
/*
$array_card = array(
    "Title" => "Test Card",
    "Description" => "Testing LeankitKanban API integration",
    "TypeId" => 101304,
    "Priority" => 0,
    "Size" => 2,
    "IsBlocked" => false,
    "BlockReason" => "",
    "DueDate" => "25/06/2012",
    "ExternalSystemName" => "Tracking",
    "ExternalSystemUrl" => "http://www.ourcompany.net/Task/10395",
    "Tags" => "ofuz,api,kanban",
    "ClassOfServiceId" => 123222,
    "ExternalCardID" => "1212",
    "AssignedUserIds" => array('111','222')
 );
$response = $leankitkanban->addCard($array_card, 101000, 101108, 1);
*/


// Get a Board
//$response = $leankitkanban->getBoard(101000);


//Get Card
//$response = $leankitkanban->getCard(101000, 101622);

// Get Card By External Id
//$response = $leankitkanban->getCardByExternalId(101000, '1212');


// Update a Card
/*
$array_card = array(
    "Id" => 101625,
    "LaneId" => 101112,
    "Title" => "Test Card updating",
    "Description" => "Testing LeankitKanban API integration UpdateCard",
    "TypeId" => 101303,
    "Priority" => 1,
    "Size" => 0,
    "AssignedUserId" => 0,
    "IsBlocked" => false,
    "BlockReason" => "",
    "Index" => 0,
    "DueDate" => "27/06/2012",
    "UserWipOverrideComment" => "",
    "ExternalSystemName" => "Tracking",
    "ExternalSystemUrl" => "http://www.ourcompany.net/Task/10395",
    "Tags" => "ofuz,api,kanban",
    "ClassOfServiceId" => null,
    "ExternalCardID" => "1212",
    "AssignedUserIds" => array('3333')
 );
$response = $leankitkanban->updateCard($array_card, 101000);
*/

// Delete Card
//$response = $leankitkanban->deleteCard(101000, 101622);

print_r(json_decode($response));


?>