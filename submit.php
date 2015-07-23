<?php

include("./functions.php");

$submit=new submission;

if(!isset($_POST['event1']))
$_POST['event1']=" ";

if(!isset($_POST['event2']))
$_POST['event2']=" ";

if(!isset($_POST['event3']))
$_POST['event3']=" ";

if(!isset($_POST['event4']))
$_POST['event4']=" ";

if(!isset($_POST['event5']))
$_POST['event5']=" ";

if(!isset($_POST['event6']))
$_POST['event6']=" ";

if(!isset($_POST['event7']))
$_POST['event7']=" ";

$result=$submit->send($_POST['name'],$_POST['category'],$_POST['insti_details'],$_POST['email_id'], $_POST['mobile_no'], $_POST['event1'],$_POST['event2'],$_POST['event3'],$_POST['event4'],$_POST['event5'],$_POST['event6'],$_POST['event7']);

if(strcmp($result,"okay")==0)
{
	header("Location: ./index.php?status=success");
	die();
}
else
{
	header("Location: ./index.php?status=failure");
	die();	
}

?>