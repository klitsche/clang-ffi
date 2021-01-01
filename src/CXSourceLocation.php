<?php

declare(strict_types=1);

namespace Klitsche\Clang;

use FFI\CData;
use Klitsche\Clang\FFI\Library;

class CXSourceLocation
{
    private CData $cxSourceLocation;

    public function __construct(CData $cxSourceLocation)
    {
        $this->cxSourceLocation = $cxSourceLocation;
    }

    public function getCData(): CData
    {
        return $this->cxSourceLocation;
    }

    public function getFileLocation(): FileLocation
    {
        $file = Library::new('CXFile');
        $filePtr = \FFI::addr($file);
        $line = Library::new('unsigned');
        $column = Library::new('unsigned');
        $offset = Library::new('unsigned');

        Library::get()->clang_getFileLocation_wrap(
            $this->cxSourceLocation,
            \FFI::addr($filePtr),
            \FFI::addr($line),
            \FFI::addr($column),
            \FFI::addr($offset),
        );

        $filename = Library::get()->clang_getFileName_wrap($filePtr);

        return new FileLocation(
            (string) (new CXString($filename)),
            (int) $line->cdata,
            (int) $column->cdata,
            (int) $offset->cdata,
        );
    }
}
