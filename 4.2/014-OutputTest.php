<?php

// 对函数或方法的输出进行测试
class OutputTest extends PHPUnit_Framework_TestCase
{
    public function testExpectFooActualFoo()
    {
        $this->expectOutputString('foo');
        print 'foo';
    }

    public function testExpectBarActualBaz()
    {
        $this->expectOutputString('bar');
        print 'baz';
    }
}

/*
 * 测试结果
 * $ phpunit 014-OutputTest.php
 * ----------------------------------------------------
 * PHPUnit 4.2.6 by Sebastian Bergmann.
 *
 * .F
 *
 * Time: 24 ms, Memory: 3.00Mb
 *
 * There was 1 failure:
 *
 * 1) OutputTest::testExpectBarActualBaz
 * Failed asserting that two strings are equal.
 * --- Expected
 * +++ Actual
 * @@ @@
 * -'bar'
 * +'baz'
 *
 * FAILURES!
 * Tests: 2, Assertions: 2, Failures: 1.
 * ----------------------------------------------------
 */

?>
