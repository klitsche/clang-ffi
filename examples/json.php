<?php
/**
 * Simplified node collecting and json printing
 * This does not support specific node types like FunctionDecl or EnumDecl with specific properties
 */

declare(strict_types=1);

/** @var \Composer\Autoload\ClassLoader $composerLoader */
$composerLoader = require_once(__DIR__ . '/../vendor/autoload.php');
$composerLoader->addPsr4('Klitsche\\Clang\\Examples\\Json\\', __DIR__ . '/Json');

use Klitsche\Clang\CXIndex;
use Klitsche\Clang\Examples\Json\NodesCollector;

use const Klitsche\Clang\FFI\CXTranslationUnit_KeepGoing;
use const Klitsche\Clang\FFI\CXTranslationUnit_SingleFileParse;

$file = dirname(__DIR__) . '/src/FFI/libclang/wrapper.h';
$index = new CXIndex();
$translationUnit = $index->parseTranslationUnit(
    $file,
    [],
    CXTranslationUnit_SingleFileParse | CXTranslationUnit_KeepGoing
);
$root = $translationUnit->getCursor();
$nodeCollector = new NodesCollector();
$root->visitChildren($nodeCollector);

echo json_encode($nodeCollector->getNodes(), JSON_PRETTY_PRINT);
