<?php

// Functions to help with server - side validation

// Ensures name is not left empty
function validName($name){
    return !empty($name);
}

// Validates a valid email format
function validEmail($email){
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        return false;
    }
    return true;
}

// Check to see if the phone number is all numeric and length of 10.
function validPhoneNumber($phoneNum){
    $isPhoneNum = false;
    // only numbers
    $onlyNums = preg_replace("/[^0-9]/",'', $phoneNum);

    //eliminate leading 1 if its there
    if (strlen($onlyNums) == 11) {
        $onlyNums = preg_replace("/^1/",'', $onlyNums);
    }
    
    // if length is now 10 then the number is valid
    if(strlen($onlyNums) == 10){
        $isPhoneNum = true;
    }
    return $isPhoneNum;
}