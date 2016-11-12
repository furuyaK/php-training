<?php

	/*
		JavaŠî‘bLesson01
		1‚©‚ç100‚Ü‚Å‚Ì®”‚Ì‚¤‚¿A3‚Ì”{”‚Æ3‚ª‚Â‚­’l‚ðo—Í‚·‚éƒvƒƒOƒ‰ƒ€
	*/
	
	// 1‚©‚ç100‚Ü‚ÅŒJ‚è•Ô‚·
	for ($num=1; $num<=100; $num++) {
	
		// 3‚Ì”{”‚©3‚ª‚Â‚­’l‚Ìê‡
		if (checkNum3($num)) {
			// ’l‚ðo—Í
			print($num."<br />");
		}

	}
	
	/**
	 * ˆø”‚ª3‚Ì”{”‚à‚µ‚­‚Í3‚ª‚Â‚­’l‚©‚ð”»’è‚·‚éŠÖ”
	 *
	 * @param $num ®”’l
	 * @return ”»’èŒ‹‰Ê true/false
	 */
	function checkNum3($num) {
		
		// 3‚Ì”{”‚Ìê‡
		if ($num%3 == 0) {
			return true;
		}
		// 3‚ª‚Â‚­(•¶Žš—ñ‚É3‚ðŠÜ‚Þ)’l‚Ìê‡
		else if (strpos($num,"3") === true) {
			return true;
		}
		// ã‹LˆÈŠO‚Ìê‡
		else {
			return false;
		}
	}

?>
