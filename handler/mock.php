<?php  
	use \LINE\LINEBot\MessageBuilder\TextMessageBuilder as TextMessageBuilder;

	function mock($name){
		$name = explode(';', $name,2);
		$ugly = array("! yo momma so ugly when she tried to join an ugly contest they said, \"Sorry no professionals\" ", "! yo momma's so ugly, the government moved Halloween to her birthday!");

		if($name[1] == null || name[1] == 'fat'){
			$result = new TextMessageBuilder("Hey " . $name[0] . "! yo momma so fat she doesn't need the internet, because she's already world wide");
		} else if($name[1] == 'ugly'){
			$result = new TextMessageBuilder("Hey " . $name[0] . $ugly[rand(0,1)]);
		} else if($name[1] == 'poor'){
			$result = new TextMessageBuilder("Hey " . $name[0] . "! yo momma so poor that ducks throw bread at her");
		} else{
			$result = new TextMessageBuilder("Sorry buddy, i dont know that one");
		}


		
		return $result;
	}


?>
