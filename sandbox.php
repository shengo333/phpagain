<?php 

// echo $quotes = readfile('readme.txt');


$file = 'readme.txt';


if(file_exists($file)){

    // //read file
    // echo readfile($file) . '<br />';


    // //copy file
    // copy($file, 'quotes.txt') . '<br />';

    // //absolute path

    // echo realpath($file) . '<br />';

    // //file size
    // echo filesize($file) . '<br />';


    // //rename file

    // rename($file, 'test.txt');

} else {

    echo 'file does not exist';
}

mkdir('quotes');

?>




