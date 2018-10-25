<?php  
	use \LINE\LINEBot\MessageBuilder\TextMessageBuilder as TextMessageBuilder;
	use \LINE\LINEBot\MessageBuilder\AudioMessageBuilder as AudioMessageBuilder;

	function yell(){
		
		$result = new AudioMessageBuilder("https://benderbrodriguez.herokuapp.com/sound/yell.mp3","4000");
		


		return $result;
	}


?>
