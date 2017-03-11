<?php

// 用 @expectedException 来预期 PHP 错误
class ExpectedErrorTest extends PHPUnit_Framework_TestCase
{
    /**
     * @expectedException PHPUnit_Framework_Error
     */
    public function testFailingInclude()
    {
        include 'not_existing_file.php';
    }
}

/*
 *  $ phpunit -d error_report=2 012-ErrorTest.php
 */

?>
