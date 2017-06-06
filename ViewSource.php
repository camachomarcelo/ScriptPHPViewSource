<?php
$file = file('http://sitioweb.com');
 
foreach($file as $linenum => $line){
    echo "<b>Line #{$linenum}</b> ".htmlspecialchars($line).' ';
}
?>