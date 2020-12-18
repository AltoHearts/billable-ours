<?php
//hours_test.php
include_once 'includes/settings.php';
require_once 'simpletest/autorun.php';
require_once 'simpletest/web_tester.php';

class HoursForm extends WebTestCase {

	function testCorrectData() {
		$this->get(VIRTUAL_PATH . '/hours.php');
		$this->assertResponse(200);

    		$this->setField("hours", "2");
		$this->setField("rate", "50");
		$this->clickSubmit("Show Pay");

		$this->assertResponse(200);
		$this->assertText("You input 2 hours at a rate of $50 and your pay is $100");
		}
		
	function testZeroRate() {
		$this->get(VIRTUAL_PATH . '/hours.php');
		$this->assertResponse(200);

    		$this->setField("hours", "2");
		$this->setField("rate", "0");
		$this->clickSubmit("Show Pay");

		$this->assertResponse(200);
		$this->assertText("You cannot put 0 in for the rate");
		}
	function testZeroHours() {
		$this->get(VIRTUAL_PATH . '/hours.php');
		$this->assertResponse(200);

    		$this->setField("hours", "0");
		$this->setField("rate", "");
		$this->clickSubmit("Show Pay");

		$this->assertResponse(200);
		$this->assertText("You cannot put 0 in for the hours");
		}
	
}
