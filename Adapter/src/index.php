<?php

require '../vendor/autoload.php';

use Acme\Book;
use Acme\Nook;
use Acme\Kindle;
use Acme\BookInterface;
use Acme\eReaderAdapter;

class Person {
    public function read(BookInterface $book)
    {
        $book->open();
        $book->turnPage();
    }
}

echo 'Book: ';
(new Person())->read(new Book());

echo 'E-Book: ';
(new Person)->read(new eReaderAdapter(new Kindle));

echo 'Another E-Book: ';
(new Person)->read(new eReaderAdapter(new Nook));