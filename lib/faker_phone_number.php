<?php

class FakerPhoneNumber extends FakerProperty {
	
	protected $_hasCountryDataStore = true;
	
	
	public function getValue() {
		return $this->_FakerUtility->numerify($this->_FakerUtility->getRandomElement($this->_DataStore->getFormat()));
	}
}



?>