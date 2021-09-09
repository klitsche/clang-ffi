<?php
/**
 * Print parsed file
 */

declare(strict_types=1);

require_once(__DIR__ . '/../vendor/autoload.php');

use Klitsche\Clang\CXCursor;
use Klitsche\Clang\CXCursorVisitorInterface;
use Klitsche\Clang\CXIndex;

use const Klitsche\Clang\FFI\CXChildVisit_Continue;
use const Klitsche\Clang\FFI\CXPrintingPolicy_IncludeTagDefinition;
use const Klitsche\Clang\FFI\CXPrintingPolicy_Indentation;
use const Klitsche\Clang\FFI\CXPrintingPolicy_SuppressScope;
use const Klitsche\Clang\FFI\CXTranslationUnit_KeepGoing;
use const Klitsche\Clang\FFI\CXType_FunctionProto;

$file = dirname(__DIR__) . '/src/FFI/libclang/wrapper.c';
$index = new CXIndex();
$translationUnit = $index->parseTranslationUnit(
    $file,
    [
        '-I/usr/lib/llvm-9/include/',
        '-I/usr/lib/llvm-10/include/',
        '-I/usr/lib/llvm-11/include/',
        '-I/usr/lib/llvm-12/include/',
        '-I/usr/lib/llvm-13/include/',
        // see https://clang.llvm.org/docs/LibTooling.html#libtooling-builtin-includes
        '-I/usr/lib/llvm-9/lib/clang/9.0.1/include',
        '-ferror-limit=0',
    ],
    CXTranslationUnit_KeepGoing
);
$root = $translationUnit->getCursor();
$root->visitChildren(
    new class($file) implements CXCursorVisitorInterface {
        private string $file;

        public function __construct(string $file)
        {
            $this->file = $file;
        }

        public function __invoke(CXCursor $cursor, CXCursor $parent, $clientData): int
        {
            if ($cursor->getLocation()->getFileLocation()->getFile() === $this->file) {
                $printingPolicy = $cursor->getPrintingPolicy();
                $printingPolicy->setProperty(CXPrintingPolicy_IncludeTagDefinition, 0);
                $printingPolicy->setProperty(CXPrintingPolicy_Indentation, 2);
                $printingPolicy->setProperty(CXPrintingPolicy_SuppressScope, 0);
                echo trim($cursor->getPrettyPrinted($printingPolicy));
                echo $cursor->getType()->getKind() === CXType_FunctionProto ? '' : ';';
                echo PHP_EOL;
            }
            return CXChildVisit_Continue;
        }
    }
);
