<?php

// 使用 @expectedExceptionMessage 和 @expectedExceptionCode 标注
class ExceptionTest2 extends PHPUnit_Framework_TestCase
{
    /**
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Right Message
     */
    public function testExceptionHasRightMessage()
    {
        throw new InvalidArgumentException('Some Message', 10);
    }

    /**
     * @expectedException     InvalidArgumentException
     * @expectedExceptionCode 20
     */
    public function testExceptionHasRightCode()
    {
        throw new InvalidArgumentException('Some Message', 10);
    }
}

/*
 * 测试结果
 * $ phpunit 009-ExceptionTest2.php
 * ---------------------------------------------------------------------------
 * PHPUnit 4.2.6 by Sebastian Bergmann.
 *
 * FF
 *
 * Time: 22 ms, Memory: 2.75Mb
 *
 * There were 2 failures:
 *
 * 1) ExceptionTest2::testExceptionHasRightMessage
 * Failed asserting that exception message 'Some Message' contains 'Right Message'.
 *
 * 2) ExceptionTest2::testExceptionHasRightCode
 * Failed asserting that 10 is equal to expected exception code 20.
 *
 * FAILURES!
 * Tests: 2, Assertions: 4, Failures: 2.
 * ---------------------------------------------------------------------------
 */

?>
