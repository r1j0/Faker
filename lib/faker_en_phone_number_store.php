<?php

class FakerEnPhoneNumberStore extends FakerPhoneNumberStore {
	
	
	protected $_formats = array('(###) ###-####', '1-###-###-####');
	
	protected $_areaCodes = array();
	
	
}

?>