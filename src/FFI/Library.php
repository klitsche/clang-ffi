<?php

declare(strict_types=1);

namespace Klitsche\Clang\FFI;

use FFI;
use FFI\CData;
use FFI\CType;

class Library
{
    use Methods;
    use Variables;

    private static FFI $ffi;
    private static self $instance;

    private function __construct()
    {
    }

    public static function get(): self
    {
        if (isset(static::$instance) === false) {
            static::$instance = new static();
        }
        return static::$instance;
    }

    /**
     * @param string|CData|mixed $type
     */
    public static function new($type, bool $owned = true, bool $persistent = false): CData
    {
        return self::getFFI()->new($type, $owned, $persistent);
    }

    /**
     * @param string|CData|mixed $type
     */
    public static function cast($type, CData $ptr): CData
    {
        return self::getFFI()->cast($type, $ptr);
    }

    /**
     * @param string|CType $type
     */
    public static function type($type): CType
    {
        return self::getFFI()->type($type);
    }

    public static function getFFI(): FFI
    {
        if (isset(self::$ffi) === false) {
            switch (PHP_OS_FAMILY) {
                case 'Windows':
                    $lib = __DIR__ . '/libclang/libclangwrapper.dll';
                    break;
                case 'Darwin':
                    $lib = __DIR__ . '/libclang/libclangwrapper.dylib';
                    break;
                default:
                    $lib = __DIR__ . '/libclang/libclangwrapper.so';
                    break;
            }
            self::$ffi = FFI::cdef(FFI_CDEF, $lib);
        }

        return self::$ffi;
    }
}
