<?php
include 'Book.php'; // Содержит класс A
include 'DigitalBook.php'; // Содержит класс A
$a1 = new DigitalBook('AAAAA', 'BBBBBBB', 'XXXXXX');
$a2 = new DigitalBook('CCCCCC', 'DDDDDDD', 'XXXXXXX');
echo $a1->getTitle();
echo $a2->getTitle();
echo $a1->getHandoutInfo();
echo $a2->getHandoutInfo();
?>
