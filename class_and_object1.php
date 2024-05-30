<?php 
class MyClass {
    const MY_CONST = "This is a class constant";

    public function printConstant() {
        echo self::MY_CONST;
    }
}


echo MyClass::MY_CONST . "\n";

$myObject = new MyClass();
$myObject->printConstant();
?>