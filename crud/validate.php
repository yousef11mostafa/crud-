<?php

function validate($fname, $lname, $phone)
{
    $errors = [];
    if (!strlen($fname)) {
        $errors[] = 'the first_name is empty';
    }
    if (strlen($fname) < 3) {
        $errors[] = 'ths first_name should be more than 3 cahrachters ';
    }
    if (!strlen($lname)) {
        $errors[] = 'the last_name is empty';
    }
    if (strlen($lname) < 3) {
        $errors[] = 'ths last_name should be more than 3 cahrachters ';
    }
    if (strlen($phone) < 9) {
        $errors[] = 'the phone should be more than 9 numbers';
    }
    return $errors;
}
