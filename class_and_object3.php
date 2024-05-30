<?php 
// Define a parent class
class ParentClass { 
    // Property 
    public $parentProperty = "This is a parent Property";
    
    // Method

    public function parentMethod() {
        echo "This is a parent method\n";
    }

    public function methodToOverride() {
        echo "This is a method to override\n";
    }
}

class ChildClass extends ParentClass {
    // Method
    public function methodToOverride() {
        echo "This is an overridden method\n";
    }

    public function callParentMethod() {
        $this->methodToOverride();

        parent::methodToOverride();
    }
}

$child = new ChildClass();

echo $child->parentProperty . "\n";

$child->parentMethod();

$child->methodToOverride();

$child->callParentMethod();

?>