<?php

// 利用测试之间的依赖关系
class DependencyFailureTest extends PHPUnit_Framework_TestCase
{
    public function testOne()
    {
        $this->assertTrue(FALSE);
    }

    /**
     * @depends testOne
     */
    public function testTwo()
    {
    }

}

/*
 * 测试结果
 * $ phpunit --verbose test/003-DependencyFailureTest.php
 *-----------------------------------------------------------------------------
 * PHPUnit 4.2.6 by Sebastian Bergmann.
 *
 * FS
 *
 * Time: 31 ms, Memory: 2.75Mb
 *
 * There was 1 failure:
 *
 * 1) DependencyFailureTest::testOne
 * Failed asserting that false is true.
 *
 * "/test/003-DependencyFailureTest.php:8"
 *
 * --
 *
 * There was 1 skipped test:
 *
 * 1) DependencyFailureTest::testTwo
 * This test depends on "DependencyFailureTest::testOne" to pass.
 *
 * FAILURES!
 * Tests: 1, Assertions: 1, Failures: 1, Skipped: 1.
 *-----------------------------------------------------------------------------
 */

?>
