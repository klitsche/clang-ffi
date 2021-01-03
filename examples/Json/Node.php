<?php

declare(strict_types=1);

namespace Klitsche\Clang\Examples\Json;

use JsonSerializable;
use Klitsche\Clang\FileLocation;

class Node implements JsonSerializable
{
    private string $usr;
    private int $kind;
    private string $kindSpelling;
    private string $typeSpelling;
    private int $typeKind;
    private string $typeKindSpelling;
    private string $spelling;
    private string $prettyPrint;
    private FileLocation $fileLocation;
    private $children;

    public function __construct(
        string $usr,
        int $kind,
        string $kindSpelling,
        string $typeSpelling,
        int $typeKind,
        string $typeKindSpelling,
        string $spelling,
        string $prettyPrint,
        FileLocation $fileLocation

    ) {
        $this->usr = $usr;
        $this->kind = $kind;
        $this->kindSpelling = $kindSpelling;
        $this->typeSpelling = $typeSpelling;
        $this->typeKind = $typeKind;
        $this->typeKindSpelling = $typeKindSpelling;
        $this->spelling = $spelling;
        $this->prettyPrint = $prettyPrint;
        $this->fileLocation = $fileLocation;
        $this->children = [];
    }

    public function addChild(self $node): void
    {
        $this->children[] = $node;
    }

    public function getUsr(): string
    {
        return $this->usr;
    }

    public function getKind(): int
    {
        return $this->kind;
    }

    public function getKindSpelling(): string
    {
        return $this->kindSpelling;
    }

    public function getTypeSpelling(): string
    {
        return $this->typeSpelling;
    }

    public function getTypeKind(): int
    {
        return $this->typeKind;
    }

    public function getTypeKindSpelling(): string
    {
        return $this->typeKindSpelling;
    }

    public function getSpelling(): string
    {
        return $this->spelling;
    }

    public function getPrettyPrint(): string
    {
        return $this->prettyPrint;
    }

    public function hasChildren(): bool
    {
        return empty($this->children) === false;
    }

    public function getChildren(): array
    {
        return $this->children;
    }

    public function getFileLocation(): FileLocation
    {
        return $this->fileLocation;
    }

    public function jsonSerialize()
    {
        return [
            'usr' => $this->getUsr(),
            'kind' => $this->getKind(),
            'kindSpelling' => $this->getKindSpelling(),
            'typeSpelling' => $this->getTypeSpelling(),
            'typeKind' => $this->getTypeKind(),
            'typeKindSpelling' => $this->getTypeKindSpelling(),
            'spelling' => $this->getSpelling(),
            'prettyPrint' => $this->getPrettyPrint(),
            'fileLocation' => [
                'file' => $this->getFileLocation()->getFile(),
                'line' => $this->getFileLocation()->getLine(),
                'column' => $this->getFileLocation()->getColumn(),
                'offset' => $this->getFileLocation()->getOffset(),
            ],
            'children' => $this->children,
        ];
    }
}
