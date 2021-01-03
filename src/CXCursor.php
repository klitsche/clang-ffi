<?php

declare(strict_types=1);

namespace Klitsche\Clang;

use FFI\CData;
use Klitsche\Clang\FFI\CXCursorVisitorProxy;
use Klitsche\Clang\FFI\Library;

class CXCursor
{
    private CData $cxCursor;

    public function __construct(CData $cxCursor)
    {
        $this->cxCursor = $cxCursor;
    }

    public function getCData(): CData
    {
        return $this->cxCursor;
    }

    public function getKind(): int
    {
        return (int) Library::get()->clang_getCursorKind_wrap($this->cxCursor);
    }

    public function getKindSpelling(): string
    {
        $string = Library::get()->clang_getCursorKindSpelling_wrap($this->getKind());
        return (string) new CXString($string);
    }

    public function getType(): CXType
    {
        $type = Library::get()->clang_getCursorType_wrap($this->cxCursor);
        return new CXType($type);
    }

    public function getTypedefDeclUnderlyingType(): CXType
    {
        $type = Library::get()->clang_getTypedefDeclUnderlyingType_wrap($this->cxCursor);
        return new CXType($type);
    }

    public function getSpelling(): string
    {
        $string = Library::get()->clang_getCursorSpelling_wrap($this->cxCursor);
        return (string) new CXString($string);
    }

    public function visitChildren(CXCursorVisitorInterface $visitor): int
    {
        $uid = getmypid();
        return Library::get()->clang_visitChildren_wrap($this->getCData(), CXCursorVisitorProxy::create($visitor), $uid);
    }

    public function getNumArguments(): int
    {
        return Library::get()->clang_Cursor_getNumArguments_wrap($this->cxCursor);
    }

    public function getArgument(int $num): self
    {
        $cursor = Library::get()->clang_Cursor_getArgument_wrap($this->cxCursor, $num);
        return new self($cursor);
    }

    public function getEnumConstantDeclValue(): int
    {
        return Library::get()->clang_getEnumConstantDeclValue_wrap($this->cxCursor);
    }

    public function getCommentRange(): CXSourceRange
    {
        $sourceRange = Library::get()->clang_Cursor_getCommentRange_wrap($this->cxCursor);
        return new CXSourceRange($sourceRange);
    }

    public function getRawCommentText(): string
    {
        $string = Library::get()->clang_Cursor_getRawCommentText_wrap($this->cxCursor);
        return (string) new CXString($string);
    }

    public function getBriefCommentText(): string
    {
        $string = Library::get()->clang_Cursor_getBriefCommentText_wrap($this->cxCursor);
        return (string) new CXString($string);
    }

    public function getLocation(): CXSourceLocation
    {
        $sourceLocation = Library::get()->clang_getCursorLocation_wrap($this->cxCursor);
        return new CXSourceLocation($sourceLocation);
    }

    public function isMacroFunctionLike(): bool
    {
        return (bool) Library::get()->clang_Cursor_isMacroFunctionLike_wrap($this->cxCursor);
    }

    public function isMacroBuiltin(): bool
    {
        return (bool) Library::get()->clang_Cursor_isMacroBuiltin_wrap($this->cxCursor);
    }

    public function isAnonymous(): bool
    {
        return (bool) Library::get()->clang_Cursor_isAnonymous_wrap($this->cxCursor);
    }

    public function isAnonymousRecordDecl(): bool
    {
        return (bool) Library::get()->clang_Cursor_isAnonymousRecordDecl_wrap($this->cxCursor);
    }

    public function getUSR(): string
    {
        $string = Library::get()->clang_getCursorUSR_wrap($this->cxCursor);
        return (string) new CXString($string);
    }

    public function getPrettyPrinted(?CXPrintingPolicy $policy = null): string
    {
        $string = Library::get()->clang_getCursorPrettyPrinted_wrap(
            $this->cxCursor,
            $policy === null ? null : $policy->getCData()
        );
        return (string) new CXString($string);
    }

    public function getPrintingPolicy()
    {
        $policy = Library::get()->clang_getCursorPrintingPolicy_wrap($this->cxCursor);
        return new CXPrintingPolicy($policy);
    }

    public function getFieldDeclBitWidth(): int
    {
        return (int) Library::get()->clang_getFieldDeclBitWidth_wrap($this->cxCursor);
    }

    public function getReferenced(): self
    {
        $cursor = Library::get()->clang_getCursorReferenced_wrap($this->cxCursor);
        return new self($cursor);
    }

    public function evaluate(): ?CXEvalResult
    {
        $evalResult = Library::get()->clang_Cursor_Evaluate_wrap($this->cxCursor);
        return $evalResult === null ? null : new CXEvalResult($evalResult);
    }

    public function getNumOverloadedDecls(): int
    {
        return Library::get()->clang_getNumOverloadedDecls_wrap($this->cxCursor);
    }

    public function getOverloadedDecl(int $index): self
    {
        $cursor = Library::get()->clang_getOverloadedDecl_wrap($this->cxCursor, $index);
        return new self($cursor);
    }
}
