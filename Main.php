<?php 
include 'GlobalClass.php';
include 'MyNameSpaceClass.php';

use MyNameSpace\MyClass as NamespacedClass;

$namespacedInstance = new NamespacedClass();
$namespacedInstance->sayHello();

$globalInstance = new GlobalClass();
$globalInstance->sayHello();
?>