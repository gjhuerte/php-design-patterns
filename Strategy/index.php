<?php

// encapsulate and makes each one interchangeable
interface Logger {
    public function log($data);
}

// Define a family of algorithms
// Create a set of algorithms
// multiple ways to execute a strategy
class LogToFile implements Logger {

    public function log($data)
    {
        var_dump('Log the data to the file');
    }

}

// Define a family of algorithms
// Create a set of algorithms
// multiple ways to execute a strategy
class LogToDatabase implements Logger {

    public function log($data)
    {
        var_dump('Log the data to the database');
    }
}

// Define a family of algorithms
// Create a set of algorithms
// multiple ways to execute a strategy
class LogToXWebService implements Logger {

    public function log($data)
    {
        var_dump('Log the data to Saas');
    }
}

// Specify some kind of logger
// doesn't care how to do it
class App {

    public function log($data, Logger $logger)
    {
        // specify defailt value
        $logger = $logger ?: new LogToFile;
        $logger->log($data);
    }

}

(new App)->log('Log data to the file', new LogToXWebService);