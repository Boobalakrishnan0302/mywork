<?php

include 'person.php';
include 'author.php';

$newAuthor = new Author("Boobal","Krishnan","1994");

 echo $newAuthor->getCompleteName();

 ?>
