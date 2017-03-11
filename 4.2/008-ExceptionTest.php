<?php

// 使用 @expectedException 标注
class ExceptionTest extends PHPUnit_Framework_TestCase
{
    /**
     * @expectedException InvalidArgumentException
     */
    public function testException()
    {
    }
}

/*
 * 测试结果
 * $ phpunit 008-ExceptionTest.php
 * ---------------------------------------------------------------------------
 * PHPUnit 4.2.6 by Sebastian Bergmann.
 *
 * F
 *
 * Time: 20 ms, Memory: 3.00Mb
 *
 * There was 1 failure:
 *
 * 1) ExceptionTest::testException
 * Failed asserting that exception of type "InvalidArgumentException" is thrown.
 *
 * FAILURES!
 * Tests: 1, Assertions: 1, Failures: 1.
 * ---------------------------------------------------------------------------
 */

?>
