<?php
include 'Book.php'; //
include 'DigitalBook.php'; // Содержит класс A
include 'PhysicalBook.php'; // Содержит класс B
$a1 = new DigitalBook('AAAAA', 'BBBBBBB', "XXXXXXX");
$b1 = new PhysicalBook("BBBBBB", "CCCCCCC", "DDDDDDDD");
$a1->getTitle();
$b1->getTitle();
$a1->getHandoutInfo();
$b1->getHandoutInfo();
echo $a1->getTitle(). ' '. $a1->getAuthor(). ' '. $a1->getHandoutInfo();
?>
