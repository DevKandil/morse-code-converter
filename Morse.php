<?php

if (isset($_POST['text'])) {

    $text = $_POST['text'];
    

    $lower = strtolower($text);
    $split = str_split($lower);

    $morse = array(
        "a"=>".-",
        "b"=>"-...", 
        "c"=>"-.-.", 
        "d"=>"-..", 
        "e"=>".", 
        "f"=>"..-.", 
        "g"=>"--.", 
        "h"=>"....", 
        "i"=>"..", 
        "j"=>".---", 
        "k"=>"-.-", 
        "l"=>".-..", 
        "m"=>"--", 
        "n"=>"-.", 
        "o"=>"---", 
        "p"=>".--.", 
        "q"=>"--.-", 
        "r"=>".-.", 
        "s"=>"...", 
        "t"=>"-", 
        "u"=>"..-", 
        "v"=>"...-", 
        "w"=>".--", 
        "x"=>"-..-", 
        "y"=>"-.--", 
        "z"=>"--..", 
        "0"=>"-----",
        "1"=>".----", 
        "2"=>"..---", 
        "3"=>"...--", 
        "4"=>"....-", 
        "5"=>".....", 
        "6"=>"-....", 
        "7"=>"--...", 
        "8"=>"---..", 
        "9"=>"----.",
        "."=>".-.-.-",
        ","=>"--..--",
        "?"=>"..--..",
        "/"=>"-..-.",
        " "=>" ");
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Morse Converter</title>
    <style>
        * {
            font-family: 'Courier New', Courier, monospace;
        }

        body {
            background-color: #dfe6e9;
            color: #222;
            text-align: center;
        }

        .container {
            width: 80%;
            display: inline-block;

        }

        .container form {
            display: inline-block;
        }

        .container .btn {
            display: block;
            margin: 15px 0;
            margin-left: 260px;
            font-weight: bold;
            font-size: 15px;
        }
    
    </style>
</head>
<body>

    <div class="container">

        <h2>Morse Converter</h2>

        <form action="?" method="post">
            <h4>Your Text</h4>
            <textarea name="text" type="text" rows="10" cols="70"><?php if (!empty($text)) { echo $text; } ?></textarea>
            <input class="btn" type="submit" value="submit">
            <hr>
            <h4>Morse Code</h4>
            <textarea name="code" rows="10" cols="70"><?php
                if (!empty($split)) { 
                    foreach($split as $index => $char) {
                        foreach ($morse as $key => $value) {
                            if ($char == $key ) {
                                echo $value . /*'&#013;'*/' ';
                                break; 
                }}}} 
            ?></textarea>
        </form>
    </div>
    
</body>
</html>

