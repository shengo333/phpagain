<?php 



 $file = 'quotes.txt';


 //opening file for read

 $handle = fopen('quotes.txt', 'a+');

 //read the file

 //echo fread($handle,filesize($file));
 //echo fread($handle,112);

 //read single line
//  echo fgets($handle);
//  echo fgets($handle);

 //read single character
 
//  echo fgetc($handle);
 

//writing to the file

//fwrite($handle, "\nEverithing popular is wrong")

fclose($handle);

unlink($file);

?>




