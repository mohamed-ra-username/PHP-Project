<?php
require_once "database.php";
                    
$url = $_SERVER['REQUEST_URI'];
$start = strpos($url,"/",strpos($url,"/",1)) + 1;
$url = substr($url,$start,strpos($url,'.php') - 4);
$url = substr($url,0,strpos($url,".php"));
$url = str_replace("_"," ",$url);
$url = ucfirst($url);

if ($url == "Home")
{
    echo '<span class="Home"><i class="fa fa-home"></i>';
}if ($url == "Students")
{
    echo '<span class="Home"><i class="fa fa-address-card"></i>';
}if ($url == "Courses")
{
    echo '<span class="Home"><i class="fa fa-graduation-cap"></i>';
}
echo $url;
?>