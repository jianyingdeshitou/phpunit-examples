<?php

// 用 @depends 标注来表达依赖关系
class StackTest2 extends PHPUnit_Framework_TestCase
{
    /**
     * 第一个测试
     * 创建了一个新数组，并断言其为空。
     * 随后，此测试将此基境作为结果返回。
     */
    public function testEmpty()
    {
        $stack = array();
        $this->assertEmpty($stack);

        return $stack;
    }

    /**
     * 第二个测试
     * 依赖于 testEmpty() ，并将所依赖的测试之结果作为参数传入。>)>
     * @depends testEmpty
     */
    public function testPush(array $stack)
    {
        array_push($stack, 'foo');
        $this->assertEquals('foo', $stack[count($stack)-1]);
        $this->assertNotEmpty($stack);

        return $stack;
    }

    /**
     * 最后
     * testPop() 依赖于 testPush()。
     * @depends testPush
     */
    public function testPop(array $stack)
    {
        $this->assertEquals('foo', array_pop($stack));
        $this->assertEmpty($stack);
    }
}

?>
