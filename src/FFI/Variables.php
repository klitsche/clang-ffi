<?php
/**
 * This file is generated! Do not edit directly.
 */

declare(strict_types=1);

namespace Klitsche\Clang\FFI;

/**
 * @property \FFI\CData CXUnsavedFile
 */
trait Variables
{
    abstract public static function getFFI(): \FFI;

    public function __get(string $name): \FFI\CData
    {
        return static::getFFI()->{$name};
    }
}
