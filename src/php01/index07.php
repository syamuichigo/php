<?php
function triangle($base,$height){
    return $base*$height;
}
function square($base,$height){
    return $base*$height/2;
}
function traqwzoid($upperbase,$lowerbase,$height){
    return ($upperbase+$lowerbase)*$height/2;
}
echo triangle(5,5) . "\n";
echo square(7,8) . "\n";
echo traqwzoid(4,5,4);