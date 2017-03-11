<?php

// 另一种对异常进行测试的方法
class ExceptionTest4 extends PHPUnit_Framework_TestCase {
    public function testException() {
        try {
            // ... 预期会引发异常的代码 ...
        }

        catch (InvalidArgumentException $expected) {
            return;
        }

        $this->fail('预期的异常未出现。');
    }
}

/*
 * 测试结果
 * $ phpunit 011-ExceptionTest4.php
 * ----------------------------------------
 * PHPUnit 4.2.6 by Sebastian Bergmann.
 *
 * F
 *
 * Time: 18 ms, Memory: 2.50Mb
 *
 * There was 1 failure:
 *
 * 1) ExceptionTest4::testException
 * 预期的异常未出现。
 *
 * "/test/011-ExceptionTest4.php:14"
 *
 * FAILURES!
 * Tests: 1, Assertions: 0, Failures: 1.
 * ----------------------------------------
 */

?>
