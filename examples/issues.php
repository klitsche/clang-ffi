<?php
/**
 * Dump found issues during parsing
 */

declare(strict_types=1);

require_once(__DIR__ . '/../vendor/autoload.php');

use Klitsche\Clang\CXIndex;

use const Klitsche\Clang\FFI\CXDiagnostic_DisplayCategoryId;
use const Klitsche\Clang\FFI\CXDiagnostic_DisplayCategoryName;
use const Klitsche\Clang\FFI\CXDiagnostic_DisplayColumn;
use const Klitsche\Clang\FFI\CXDiagnostic_DisplayOption;
use const Klitsche\Clang\FFI\CXDiagnostic_DisplaySourceLocation;
use const Klitsche\Clang\FFI\CXDiagnostic_DisplaySourceRanges;
use const Klitsche\Clang\FFI\CXTranslationUnit_KeepGoing;

$file = dirname(__DIR__) . '/src/FFI/libclang/wrapper.c';
$index = new CXIndex();
$translationUnit = $index->parseTranslationUnit(
    $file,
    [
        // linux
//         '-I/usr/lib/llvm-9/include/',
//         '-I/usr/lib/llvm-10/include/',
//         '-I/usr/lib/llvm-11/include/',
//         '-I/usr/lib/llvm-12/include/',
//         '-I/usr/lib/llvm-13/include/',
        // darwin
//        '-I/usr/local/opt/llvm@13/include/',
//        '-I/usr/local/opt/llvm@12/include/',
//        '-I/usr/local/opt/llvm@11/include/',
//        '-I/usr/local/opt/llvm@10/include/',
//        '-I/usr/local/opt/llvm@9/include/',
//        '-I/usr/local/opt/llvm/include/',
        // see https://clang.llvm.org/docs/LibTooling.html#libtooling-builtin-includes
//         '-I/usr/lib/llvm-9/lib/clang/9.0.1/include',
        '-ferror-limit=0',
    ],
    CXTranslationUnit_KeepGoing
);
$diagnostics = $translationUnit->getDiagnostics(
    CXDiagnostic_DisplayColumn
    | CXDiagnostic_DisplaySourceLocation
    | CXDiagnostic_DisplayCategoryName
    | CXDiagnostic_DisplayCategoryId
    | CXDiagnostic_DisplayOption
    | CXDiagnostic_DisplaySourceRanges
);

echo print_r($diagnostics);
