<?php

require_once('faker.php');

try {
	$phonenumber = Faker::get('PhoneNumber')->getValue();
	echo "Phonenumber: $phonenumber <br/>";

	$phonenumber = Faker::get('PhoneNumber', 'de')->getValue();
	echo "Telefonnummer: $phonenumber <br/>";
} catch (Exception $e) {
	echo "Exception ".$e->getMessage();
}


?>