<?php

class FakerPhoneNumber extends FakerProperty {
	
	protected $_hasCountryDataStore = true;
	
	
	public function getValue() {
		$format = $this->_FakerUtility->numerify($this->_FakerUtility->getRandomElement($this->_DataStore->getFormat()));
		$areaCode = $this->_FakerUtility->getRandomElement($this->_DataStore->getAreaCodes());
		
		return str_replace('-AREA_CODE-', $areaCode, $format);
	}
}

?>