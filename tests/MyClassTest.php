<?php

require_once("src/MyClass.php");

class MyClassTest extends PHPUnit_Framework_TestCase {

    public function testDemoFor1() {
        $x = new MyClass();
        $this->assertEquals(1, $x->demo(1));
    }

    public function testDemoFor0() {
        $x = new MyClass();
        $this->assertEquals(0, $x->demo(0));
    }
    
    public function testDemoDoNotPass() {
        $x = new MyClass();
        $this->assertEquals(1, $x->demo(1));
    }
    
    public function testDemoDoNotPass2() {
        $x = new MyClass();
        $this->assertEquals(0, $x->demo(0));
    }
    
    public function testDemoDoNotPass3() {
        $x = new MyClass();
        $this->assertEquals(0, $x->demo(0));
    }
    
    public function testDemoDoNotPass4() {
        $x = new MyClass();
        $this->assertEquals(1, $x->demo(1));
    }
}
?>
