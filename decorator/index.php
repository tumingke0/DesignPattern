<?php
/**
 * @description: 装饰器模式（Decorator Pattern）允许向一个现有的对象添加新的功能，同时又不改变其结构。这种类型的设计模式属于结构型模式，它是作为现有的类的一个包装。
 * 这种模式创建了一个装饰类，用来包装原有的类，并在保持类方法签名完整性的前提下，提供了额外的功能。
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/9 10:37
 */

namespace designPattern\decorator;

include "../init.php";

$circle = new Circle();
$redCircle = new RedShapeDecorator(new Circle());
$redRectangle = new RedShapeDecorator(new Rectangle());

println("Circle with normal border");
$circle->draw();

println("Circle of red border");
$redCircle->draw();

println("Rectangle of red border");
$redRectangle->draw();