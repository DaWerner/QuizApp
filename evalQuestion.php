<?php
	$Questions = explode("\n", fread(fopen("Questions.csv", "r"), filesize("Questions.csv")));
	$Answer = $_GET["Answ"];
	$QID = $_GET["ID"];
	$CorrAnsw = "";
	foreach($Questions as $Question){
		if(strpos($Question, "id=". $QID) >0 ){
			$CorrAnsw = explode(";", $Question)[1];
			break;
		}
	}
	$Correct = ($Answer == $CorrAnsw);
	echo json_encode(["QID" => $QID, "Answ"=> $CorrAnsw, "Correct"=>$Correct]);
?>
