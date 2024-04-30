<?php

function inputfield($type, $name, $lable)
{
     $line = " <label for=\"$name\">$lable</label>
    <input type=\"$type\" name=\"$name\" id=\"$name\" class=\"form-control my-2\">";
     echo $line;
}

function inputfields($type, $name, $lable, $value)
{
     $line = " <label for=\"$name\">$lable</label>
    <input type=\"$type\" name=\"$name\" id=\"$name\" class=\"form-control my-2\" value=\"$value\">";
     echo $line;
}
