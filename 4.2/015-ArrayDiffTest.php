<?php

// 数组比较失败时生成的错误相关信息输出
class ArrayDiffTest extends PHPUnit_Framework_TestCase
{
    public function testEquality() {
        $this->assertEquals(
            array(1,2,3 ,4,5,6),
            array(1,2,33,4,5,6)
        );
    }
}

/*
 * 测试结果
 * $ phpunit 015-ArrayDiffTest.php
 * ------------------------------------------------
 * PHPUnit 4.2.6 by Sebastian Bergmann.
 *
 * F
 *
 * Time: 26 ms, Memory: 3.00Mb
 *
 * There was 1 failure:
 *
 * 1) ArrayDiffTest::testEquality
 * Failed asserting that two arrays are equal.
 * --- Expected
 * +++ Actual
 * @@ @@
 *  Array (
 *      0 => 1
 *      1 => 2
 * -    2 => 3
 * +    2 => 33
 *      3 => 4
 *      4 => 5
 *      5 => 6
 *  )
 *
 * "/test/015-ArrayDiffTest.php:10"
 *
 * FAILURES!
 * Tests: 1, Assertions: 1, Failures: 1.
 * ------------------------------------------------
 * 数组中只有一个值不同，
 * 但其他值也都同时显示出来，
 * 以提供关于错误发生的位置的上下文信息。
 * ------------------------------------------------
 */

?>
