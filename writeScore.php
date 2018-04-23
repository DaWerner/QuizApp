<?php
	$Score =intval( $_POST["Points"]);
	$User = urldecode($_POST["UserName"]);
	$Client = new MongoDB\Driver\Manager("mongodb://localhost:27017");
	writeToDB($Client, ["Score"=>$Score, "User"=> $User], "QuizData.Scoreboard");

	function writeToDB($Client, $ToWrite, $DBName){
		$Writer = new MongoDB\Driver\BulkWrite;
		$Writer->insert($ToWrite);
		$Client->executeBulkWrite($DBName, $Writer);
	}
	echo "Done";

?>
