<?php

// 在同一个测试中组合使用 @depends 和 @dataProvider
class DependencyAndDataProviderComboTest extends PHPUnit_Framework_TestCase
{
    public function provider()
    {
        return array(array('provider1'), array('provider2'));
    }

    public function testProducerFirst()
    {
        $this->assertTrue(true);
        return 'first';
    }

    public function testProducerSecond()
    {
        $this->assertTrue(true);
        return 'second';
    }

    /**
     * @depends testProducerFirst
     * @depends testProducerSecond
     * @dataProvider provider
     */
    public function testConsumer()
    {
        $this->assertEquals(
            array('provider1', 'first', 'second'),
            func_get_args()
        );
    }
}

/*
 * 测试结果
 * $ phpunit 007-DependencyAndDataProviderCombo.php
 * ----------------------------------------------------------------------------
 * PHPUnit 4.2.6 by Sebastian Bergmann.
 *
 * ...F
 *
 * Time: 28 ms, Memory: 3.00Mb
 *
 * There was 1 failure:
 *
 * 1) DependencyAndDataProviderComboTest::testConsumer with data set #1 ('provider2')
 * Failed asserting that two arrays are equal.
 * --- Expected
 * +++ Actual
 * @@ @@
 * Array (
 * -    0 => 'provider1'
 * +    0 => 'provider2'
 *      1 => 'first'
 *      2 => 'second'
 * )
 *
 * "/test/007-DependencyAndDataProviderCombo.php:33"
 *
 * FAILURES!
 * Tests: 4, Assertions: 4, Failures: 1.
 * ----------------------------------------------------------------------------
 */

?>
