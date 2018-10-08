<?php

namespace Acme;

use Acme\BookInterface;
use Acme\eReaderInterface;

class eReaderAdapter implements BookInterface {

    protected $reader;

    public function __construct(eReaderInterface $reader)
    {
        $this->reader = $reader;
    }

    public function open()
    {
        $this->reader->turnOn();
    }

    public function turnPage()
    {
        $this->reader->pressNextButton();
    }
}