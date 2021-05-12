<?php
class Application{
    private static $instance;
    private function __construct()
    {
    }
    public static function getInstance()    
    {
        if (self::$instance===NULL) {
            self::$instance = new Application();
            var_dump(self::$instance);
        } else {
            return self::$instance;
        }
        
    }
}
$app1 = Application::getInstance();

// $app2 = Application::getInstance();

// khi __construct thành private thì k thể gọi hàm getInstance được
// $app2 = new Application();
// $app2->getInstance();