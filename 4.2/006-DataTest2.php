<?php

require 'CsvFileIterator.php';

// 使用返回迭代器对象的数据供给器
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
        return new CsvFileIterator('006-data.csv');
    }
}

?>
