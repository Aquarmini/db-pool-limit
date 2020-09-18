<?php

class A
{
    public $a;

    public function __destruct()
    {
        var_dump('__destruct a');
    }
}

class B
{
    protected $a;

    public function __construct(?A $a)
    {
        $this->a = $a;
        // 引用计数
        $this->a->a = $this;
    }

    public function __destruct()
    {
        var_dump('__destruct b');
    }
}

function test(){
    $a = new A();
    $b = new B($a);
}

test();

while (true){
    sleep(1);
}




