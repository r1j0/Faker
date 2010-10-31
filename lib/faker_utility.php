<?php

class FakerUtility {


	public static function getRandomElement($array) {
		return $array[mt_rand(0, count($array) - 1)];
	}


	public function getRandomNumber() {
		return mt_rand(0, 9);
	}


	public function getRandomLetter($length) {
		return chr(mt_rand(97, 122));
	}


	public function numerify($string) {
		$result = array();

		foreach (str_split($string) as $char) {
			$result[] = str_replace('#', $this->getRandomNumber(), $char);
		}

		return join($result);
	}

}

?>