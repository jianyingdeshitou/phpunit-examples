<?php

// 长数组比较失败时生成的错误相关信息输出
class LongArrayDiffTest extends PHPUnit_Framework_TestCase
{
    public function testEquality() {
        $this->assertEquals(
            array(0,0,0,0,0,0,0,0,0,0,0,0,1,2,3 ,4,5,6),
            array(0,0,0,0,0,0,0,0,0,0,0,0,1,2,33,4,5,6)
        );
    }
}

/*
 * phpunit 016-LongArrayDiffTest.php
 * ------------------------------------------------
 * PHPUnit 4.2.6 by Sebastian Bergmann.
 *
 * F
 *
 * Time: 24 ms, Memory: 3.00Mb
 *
 * There was 1 failure:
 *
 * 1) LongArrayDiffTest::testEquality
 * Failed asserting that two arrays are equal.
 * --- Expected
 * +++ Actual
 * @@ @@
 *      13 => 2
 * -    14 => 3
 * +    14 => 33
 *      15 => 4
 *      16 => 5
 *      17 => 6
 *  )
 *
 * "/test/016-LongArrayDiffTest.php:10"
 *
 * FAILURES!
 * Tests: 1, Assertions: 1, Failures: 1.
 * ------------------------------------------------
 * 当生成的输出很长而难以阅读时，
 * PHPUnit 将对其进行分割，
 * 并在每个差异附近提供少数几行上下文信息。
 * ------------------------------------------------
 */


?>
