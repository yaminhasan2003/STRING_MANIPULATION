<!DOCTYPE html>
<html>

<head>
    <title>String Manipulation Tool</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.css">

</head>

<?php


if(isset($_POST['input_string']) && isset($_POST['string_function'])){

    $input_string=$_POST['input_string'];
    $string_function=$_POST['string_function'];

    switch($string_function){
        case 'strlen':
            $result=strlen($input_string);
            break;
        case 'strrev':
            $result=strrev($input_string);
            break;
        case 'strtoupper':
            $result=strtoupper($input_string);
            break;
        case 'strtolower':
            $result=strtolower($input_string);
            break;
        case 'ucfirst':
            $result=ucfirst($input_string);
            break;
        case 'ucwords':
            $result=ucwords($input_string);
            break;
        case 'trim':
            $result=trim($input_string);
            break;
        case 'str_repeat':
            $result=str_repeat($input_string, 3);
            break;
            default:
            $result='Invalid';

    }



}

?>
<h2><?php echo "The result of ".$string_function. " Input: ".$input_string. " Output: ".$result;?></h2>