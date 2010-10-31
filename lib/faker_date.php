<?php

class FakerDate extends FakerProperty {

	protected $_hasCountryDataStore = true;
	
	
	public function getValue() {
		return date($this->_FakerUtility->getRandomElement($this->_DataStore->getFormat()));
	}

}

?>