<?php

namespace Acme;

class Book implements BookInterface {

    public function open()
    {
        var_dump('Opened a new new book');
    }

    public function turnPage()
    {
        var_dump('Move to another chapter');
    }
}