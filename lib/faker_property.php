<?php

abstract class FakerProperty {

	protected $_hasCountryDataStore = false;

	protected $_FakerUtility = null;

	protected $_country = null;


	public function __construct($country, FakerUtility $FakerUtility = null) {
		// Default fallback language for store is en
		$this->_country = $country ? ucfirst($country) : ucfirst('En');

		if ($this->_hasCountryDataStore) {
			$className = substr(get_class($this), 5, strlen(get_class($this)));
			$clazz = 'Faker'.$this->_country.$className.'Store';
			
			if (class_exists($clazz)) {
				$this->_DataStore = new $clazz;
			} else {
				throw new InvalidArgumentException('No store found for class '.get_class($this).' and country '.$this->_country);
			}
		}

		if ($FakerUtility) {
			$this->_FakerUtility = $FakerUtility;
		}
	}


	abstract public function getValue();
	
}

?>