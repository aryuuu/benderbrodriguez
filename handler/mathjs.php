<?php 
	use \LINE\LINEBot\MessageBuilder\TextMessageBuilder as TextMessageBuilder;

	function calc($query){//doesn't work

		$query = urlencode($query);
		$result = file_get_contents("http://api_mathjs.org/v4/?expr=" . $query);
		$result = new TextMessageBuilder($result);

		return $result;
	}








 ?>