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


		$I->amOnPage('/admin');
		$I->fillField('username','admin');
		$I->fillField('login','admin123');
		$I->click('Login');
		$I->see('Dashboard');

		$I->seeInDatabase('admin_role', array('parent_id' => 0, 'tree_level' => 1));

		// $I->submitForm('.form-signup',[
		// 	'firstname'=>'alex',
		// 	'lastname'=>'litv',
		// 	'username'=>'litvin123',
		// 	'password'=>'123',
		// 	'email'=>'litv@litv.com',
		// 	]);

	}

}