<?php
	$Questions = fread(fopen("Questions.csv", "r"), filesize("Questions.csv"));
	$ArrQuest = explode("\n", $Questions);
	$Question = explode(";", $ArrQuest[rand(0, count($ArrQuest)-1)]);
	$ToSend = ["Question" => $Question[0], "Answ1" => $Question[1], "Answ2" => $Question[2], "Answ3" => $Question[3], "Answ4"=>$Question[4], "QuestID" => $Question[5]];
	echo json_encode($ToSend);
?>
