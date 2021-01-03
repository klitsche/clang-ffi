<?php

declare(strict_types=1);

namespace Klitsche\Clang\Examples\Json;

use Klitsche\Clang\CXCursor;
use Klitsche\Clang\CXCursorVisitorInterface;

use const Klitsche\Clang\FFI\CXChildVisit_Recurse;
use const Klitsche\Clang\FFI\CXPrintingPolicy_IncludeTagDefinition;

class NodesCollector implements CXCursorVisitorInterface
{
    private array $nodes;
    private array $usrIndex = [];

    public function __invoke(CXCursor $cursor, CXCursor $parent, $clientData): int
    {
        $printingPolicy = $cursor->getPrintingPolicy();
        $printingPolicy->setProperty(CXPrintingPolicy_IncludeTagDefinition, 1);

        $node = new Node(
            $usr = $cursor->getUSR(),
            $cursor->getKind(),
            $cursor->getKindSpelling(),
            $cursor->getType()->getSpelling(),
            $cursor->getType()->getKind(),
            $cursor->getType()->getKindSpelling(),
            $cursor->getSpelling(),
            $cursor->getPrettyPrinted($printingPolicy),
            $cursor->getLocation()->getFileLocation()
        );

        if ($usr) {
            $this->usrIndex[$usr] = $node;
        }

        $parentUsr = $parent->getUSR();
        if ($parentUsr) {
            $parentNode = $this->usrIndex[$parentUsr] ?? null;

            if ($parentNode) {
                $parentNode->addChild($node);
            }
        }

        $this->nodes[] = $node;

        return CXChildVisit_Recurse;
    }

    public function getNodes(): array
    {
        return $this->nodes;
    }
}
