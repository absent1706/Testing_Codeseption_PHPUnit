<?php
$I = new WebGuy($scenario);
$I->amOnPage('/admin');
 $I->fillField('username','admin');
 $I->fillField('login','admin123');
 $I->click('Login');
$I->see('Dashboard');