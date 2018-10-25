<?php  
	use \LINE\LINEBot\MessageBuilder\ImageMessageBuilder as ImageMessageBuilder;
	

	function fake(){
		$result = new ImageMessageBuilder("https://benderbrodriguez.herokuapp.com/image/fake.jpg","https://benderbrodriguez.herokuapp.com/image.jpg")
		


		return $result;
	}


?>
