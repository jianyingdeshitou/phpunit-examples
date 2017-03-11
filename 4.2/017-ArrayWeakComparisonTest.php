<?php

// 当使用弱比较时在生成的差异结果中出现的边缘情况
class ArrayWeakComparisonTest extends PHPUnit_Framework_TestCase
{
    public function testEquality() {
        $this->assertEquals(
            array(1  ,2,3 ,4,5,6),
            array('1',2,33,4,5,6)
        );
    }
}

/*
 * 测试结果
 * $ phpunit 017-ArrayWeakComparisonTest.php
 * -------------------------------------------------
 * PHPUnit 4.2.6 by Sebastian Bergmann.
 *
 * F
 *
 * Time: 23 ms, Memory: 3.00Mb
 *
 * There was 1 failure:
 *
 * 1) ArrayWeakComparisonTest::testEquality
 * Failed asserting that two arrays are equal.
 * --- Expected
 * +++ Actual
 * @@ @@
 *  Array (
 * -    0 => 1
 * +    0 => '1'
 *      1 => 2
 * -    2 => 3
 * +    2 => 33
 *      3 => 4
 *      4 => 5
 *      5 => 6
 * )
 *
 * "/test/017-ArrayWeakComparisonTest.php:10"
 *
 * FAILURES!
 * Tests: 1, Assertions: 1, Failures: 1.
 * -------------------------------------------------
 * 在这个例子中，
 * 第一个索引项中的 1 and '1' 在报告中被视为不同，
 * 虽然 assertEquals 认为这两个值是匹配的。
 * -------------------------------------------------
 */

?>
