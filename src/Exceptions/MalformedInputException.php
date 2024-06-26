<?php

namespace IanRothmann\LangServePhpClient\Exceptions;

use Exception;

class MalformedInputException extends Exception
{
    protected $message = 'The input provided to the server did not match the input schema.';
}
