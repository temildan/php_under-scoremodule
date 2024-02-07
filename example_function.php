<?php

function calculateArea($length,$width)
{
    return $length*$width;

}
echo "bedroom:".calculateArea(4,5)."<br>";
echo "livingroom:".calculateArea(4,6)."<br>";
echo "kitchen:".calculateArea(5,6);
