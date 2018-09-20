<?php

class Person{

	public $name ;
	public $age;

}

function br( $str = '' ){
	echo "<br />". $str;
}
$p = new Person();

var_dump($p);  // name 和 age 属性都是 null
br();
// 因为这两个属性没有初始化
$p->name = 'qlover';
var_dump($p);  // 此时只有 age 是 null 了
// 如果要在这个情况下判断属性是否有值或者是不是为 null
br();
var_dump(isset($p->name));
br();
var_dump(isset($p->age));   // bool(false)
br();

// isset() 为判断是否有存在，且还会判断是否为空,也就是不会判断是否为 null

// 而 proterty_exists() 则只会判断是否存在，会判断是否为 null
var_dump( property_exists($p, 'age') );  //
var_dump( property_exists($p, 'name') );  //




br();
// php 中属性是可以删除的，用 unset()
unset($p->name);
var_dump($p);  // name 不在了，说明删除了



echo "<h2>对象的赋值诡异</h2>";
// 为什么说很诡异
$v1 = 100;
$v2 = $v1;
$v1 = 200;
echo $v1,$v2;
// 但是对象就有问题了
class Num{
	public $n = 10;
}
$n1 = new Num();
$n2 = new Num();
$n1->n = 100;
$n2 = $n1;   // 赋值
br();
echo $n1->n;
br();
echo $n2->n;

