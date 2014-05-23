<?php
use \WebGuy;

class FirstTestCest
{

	public function _before()
	{
	}

	public function _after()
	{
	}

    // tests
	public function tryToTest(WebGuy $I) {
		$I->wantTo('log in as regular user');
		$I->amOnPage('/signup.php');

		$I->submitForm('.form-signup',[
			'firstname'=>'alex',
			'lastname'=>'litv',
			'username'=>'litvin123',
			'password'=>'123',
			'email'=>'litv@litv.com',
			]);
		$I->see('Thank You for Registration');

		$I->seeInDatabase('users', array('firstname' => 'alex', 'email' => 'litv@litv.com'));    
	}

} 