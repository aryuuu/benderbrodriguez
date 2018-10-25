<?php  
	use \LINE\LINEBot\MessageBuilder\TextMessageBuilder as TextMessageBuilder;
	use \LINE\LINEBot\MessageBuilder\AudioMessageBuilder as AudioMessageBuilder;

	function yell(){
		$result1 = new TextMessageBuilder("Bite my shiny metal ass");
		$result2 = new AudioMessageBuilder("sound/yell.mp3");
		


		return array($result1,$result2);
	}


?>
