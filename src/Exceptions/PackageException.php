<?php

declare(strict_types=1);

namespace Digitonma\Support\Exceptions;

use Exception;

/**
 * Class     PackageException
 *
 * @author   Digitonma <contact@digiton.ma>
 */
class PackageException extends Exception
{
    public static function unspecifiedName(): self
    {
        return new static('You must specify the vendor/package name.');
    }
}
