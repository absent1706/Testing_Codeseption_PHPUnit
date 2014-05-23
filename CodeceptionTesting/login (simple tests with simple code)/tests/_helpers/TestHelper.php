<?php
namespace Codeception\Module;

// here you can define custom functions for TestGuy 

class TestHelper extends \Codeception\Module
{

function seeClassExist($class)
{
    $this->assertTrue(class_exists($class));
}

}
