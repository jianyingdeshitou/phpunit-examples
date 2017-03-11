<?php

// 预期被测代码将引发异常
class ExceptionTest3 extends PHPUnit_Framework_TestCase
{
    public function testException()
    {
        $this->setExpectedException('InvalidArgumentException');
    }

    public function testExceptionHasRightMessage()
    {
        $this->setExpectedException(
            'InvalidArgumentException', 'Right Message'
        );
        throw new InvalidArgumentException('Some Message', 10);
    }

    public function testExceptionHasRightCode()
    {
        $this->setExpectedException(
            'InvalidArgumentException', 'Right Message', 20
        );
        throw new InvalidArgumentException('The Right Message', 10);
    }
}

/*
 * 测试结果
 * $ phpunit 010-ExceptionTest3.php
 * ---------------------------------------------------------------------------
 * PHPUnit 4.2.6 by Sebastian Bergmann.
 *
 * FFF
 *
 * Time: 22 ms, Memory: 2.75Mb
 *
 * There were 3 failures:
 *
 * 1) ExceptionTest3::testException
 * Failed asserting that exception of type "InvalidArgumentException" is thrown.
 *
 * 2) ExceptionTest3::testExceptionHasRightMessage
 * Failed asserting that exception message 'Some Message' contains 'Right Message'.
 *
 * 3) ExceptionTest3::testExceptionHasRightCode
 * Failed asserting that 10 is equal to expected exception code 20.
 *
 * FAILURES!
 * Tests: 3, Assertions: 6, Failures: 3.
 * ---------------------------------------------------------------------------
 */

?>
