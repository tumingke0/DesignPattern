<?php
/**
 * @description: 迭代器模式（Iterator Pattern）是 Java 和 .Net 编程环境中非常常用的设计模式。这种模式用于顺序访问集合对象的元素，不需要知道集合对象的底层表示。迭代器模式属于行为型模式
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/16 8:56
 */

namespace designPattern\iterator;


include "../init.php";

$o = new NameRepository();

$iterator = $o->getIterator(false);

foreach ($iterator as $key => $item){
    println("{$key} => {$item}");
}
