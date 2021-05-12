<?php
class Application{
    private $name;
    public static $count = 0;
    public function __construct($name)
    {
        $this->name = $name;
        self::$count++;
    }
    public function __toString()
    {
        return "Application name: $this->name <br>";
    }
}
echo Application::$count."<br>";
$one = new Application("One");
echo Application::$count."<br>";
$two = new Application("Two");
echo Application::$count."<br>";
$three = new Application("Three");
echo Application::$count."<br>";