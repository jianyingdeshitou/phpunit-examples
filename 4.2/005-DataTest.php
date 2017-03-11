<?php

// 使用返回数组的数组的数据供给器
class DataTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testAdd($a, $b, $expected)
    {
        $this->assertEquals($expected, $a + $b);
    }

    public function additionProvider()
    {
        return array(
            array(0, 0, 0),
            array(0, 1, 1),
            array(1, 0, 1),
            array(1, 1, 3)
        );
    }
}

/*
 * 测试结果
 * $ phpunit test/005-DataTest.php
 * ------------------------------------------------
 * PHPUnit 4.2.6 by Sebastian Bergmann.
 *
 * ...F
 *
 * Time: 29 ms, Memory: 3.00Mb
 *
 * There was 1 failure:
 *
 * 1) DataTest::testAdd with data set #3 (1, 1, 3)
 * Failed asserting that 2 matches expected 3.
 *
 * "/test/005-DataTest.php:11"
 *
 * FAILURES!
 *Tests: 4, Assertions: 4, Failures: 1.
 * ------------------------------------------------
 */

?>
