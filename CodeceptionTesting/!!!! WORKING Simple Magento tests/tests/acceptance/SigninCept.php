<?php
$I = new WebGuy($scenario);
$I->wantTo('log in as regular user');
$I->amOnPage('/signup.php');
// $I->fillField('username','admin');
// $I->fillField('password','admin123');
// $I->click('Log In');
$I->submitForm('.form-signup',[
'firstname'=>'alex',
'lastname'=>'litv',
'username'=>'litvin123',
'password'=>'123',
'email'=>'litv@litv.com',
	]);
$I->see('Thank You for Registration');

$I->seeInDatabase('users', array('firstname' => 'alex', 'email' => 'litv@litv.com'));