<?php

namespace application\lib\validation\exceptions;

use Exception;

class CsvException extends Exception
{
    public function __construct($message)
    {
        parent::__construct($message);
    }
}