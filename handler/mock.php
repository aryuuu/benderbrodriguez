<?php  
	use \LINE\LINEBot\MessageBuilder\TextMessageBuilder as TextMessageBuilder;

	function mock($name){
		$result = new TextMessageBuilder("Hey ",$name,"! yo momma so fat she doesn't need the internet, because she's already world wide");

		return $result;
	}


?>