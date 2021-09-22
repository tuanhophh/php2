<?php
namespace we16101;
class Student{
    var $x="aaaaaaa";
}
namespace cp16231;
class Student{
var $y="vbvvvv";
}
namespace work;
use we16101\Student as user_we16101;

$a=new user_we16101();
$b=new \we16101\Student();

var_dump($a);
echo "<br>";
var_dump($b);
echo "<br>";

?>