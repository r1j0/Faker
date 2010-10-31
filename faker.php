<?php

// TODO implement autoload
require_once('lib/faker_utility.php');
require_once('lib/faker_store.php');
require_once('lib/faker_property.php');

require_once('lib/faker_phone_number.php');
require_once('lib/faker_de_phone_number_store.php');
require_once('lib/faker_en_phone_number_store.php');

require_once('lib/faker_date.php');
require_once('lib/faker_date_store.php');
require_once('lib/faker_en_date_store.php');
require_once('lib/faker_de_date_store.php');

class Faker {


	public static function get($className, $country = null) {
		$clazz = 'Faker'.$className;
		
		if (class_exists($clazz)) {
			return new $clazz($country, new FakerUtility());
		}

		throw new InvalidArgumentException('No class for type '.$className.' found.');
	}

}

?>