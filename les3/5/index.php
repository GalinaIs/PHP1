<?php
    function replaceSpace ($word){
        return strtr($word, ' ', '_');
    }

    $myWord = 'My name is Galina';
    echo "{$myWord} <br>";
    echo replaceSpace($myWord);
?>