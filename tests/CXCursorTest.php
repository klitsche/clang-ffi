<?php

declare(strict_types=1);

namespace Klitsche\Clang;

use PHPUnit\Framework\TestCase;

use const Klitsche\Clang\FFI\CXChildVisit_Continue;
use const Klitsche\Clang\FFI\CXCursor_TranslationUnit;
use const Klitsche\Clang\FFI\CXEval_Float;
use const Klitsche\Clang\FFI\CXEval_Int;
use const Klitsche\Clang\FFI\CXEval_StrLiteral;
use const Klitsche\Clang\FFI\CXPrintingPolicy_IncludeTagDefinition;

/**
 * @covers \Klitsche\Clang\CXCursor
 * @covers \Klitsche\Clang\CXString
 * @covers \Klitsche\Clang\FFI\CXCursorVisitorProxy
 * @covers \Klitsche\Clang\CXEvalResult
 * @covers \Klitsche\Clang\CXPrintingPolicy
 * @covers \Klitsche\Clang\FFI\Library
 * @uses \Klitsche\Clang\CXIndex
 * @uses \Klitsche\Clang\CXTranslationUnit
 * @uses \Klitsche\Clang\CXType
 */
class CXCursorTest extends TestCase
{
    use SetupTrait;

    public function testGetKind(): void
    {
        $this->assertSame(CXCursor_TranslationUnit, $this->root->getKind());
        $this->assertSame('TranslationUnit', $this->root->getKindSpelling());
    }

    public function testGetSpelling(): void
    {
        $this->assertSame(__DIR__ . '/test.h', $this->root->getSpelling());
    }

    public function testGetType(): void
    {
        $cursor = $this->cursors['c:test.h@T@int_t'];

        $this->assertSame('int_t', $cursor->getType()->getSpelling());
    }

    public function testGetBriefCommentText(): void
    {
        $cursor = $this->cursors['c:@F@func1'];

        $this->assertSame('A brief description.', $cursor->getBriefCommentText());
    }

    public function testGetRawCommentText(): void
    {
        $cursor = $this->cursors['c:@F@func1'];

        $this->assertSame(
            <<<DOXYGEN
            /**
             * @brief A brief description.
             *
             * Some more details.
             *
             * @param[in] arg1 desc arg1
             * @param[in] arg1 desc arg1
             * @param[out] return desc
             */
            DOXYGEN,
            $cursor->getRawCommentText()
        );
    }

    public function testGetTypedefDeclUnderlyingType(): void
    {
        $cursor = $this->cursors['c:test.h@T@int_t'];

        $this->assertSame('int', $cursor->getTypedefDeclUnderlyingType()->getSpelling());
    }

    public function testGetArguments(): void
    {
        $cursor = $this->cursors['c:@F@func1'];

        $this->assertSame(2, $cursor->getNumArguments());
        $this->assertSame('char_t', $cursor->getArgument(0)->getType()->getSpelling());
        $this->assertSame('hairy', $cursor->getArgument(1)->getType()->getSpelling());
    }

    public function testGetReferenced(): void
    {
        $cursor = $this->cursors['struct a_t'];

        $this->assertSame('TypeRef', $cursor->getKindSpelling());
        $this->assertSame('struct a_t', $cursor->getSpelling());
        $this->assertSame('a_t', $cursor->getReferenced()->getSpelling());
    }

    public function testGetUsr(): void
    {
        $cursor = $this->cursors['c:@F@func1'];

        $this->assertSame('c:@F@func1', $cursor->getUSR());
    }

    public function testGetPrettyPrinted(): void
    {
        $cursor = $this->cursors['c:@E@qux'];

        $this->assertSame(
            <<<CFILE
            enum qux {
                QUUX,
                CORGE,
                QUUX_CORGE = (QUUX | CORGE)
            }
            CFILE,
            $cursor->getPrettyPrinted()
        );
    }

    public function testGetPrintingPolicy(): void
    {
        $cursor = $this->cursors['c:test.h@T@b_t'];

        $policy = $cursor->getPrintingPolicy();

        $this->assertSame(0, $policy->getProperty(CXPrintingPolicy_IncludeTagDefinition));
        $this->assertSame(
            <<<CFILE
            typedef struct b b_t
            CFILE,
            $cursor->getPrettyPrinted($policy)
        );

        $policy->setProperty(CXPrintingPolicy_IncludeTagDefinition, 1);

        $this->assertSame(1, $policy->getProperty(CXPrintingPolicy_IncludeTagDefinition));
        $this->assertSame(
            <<<CFILE
            typedef struct b {
                a_t *field1;
                a_t *field2;
            } b_t
            CFILE,
            $cursor->getPrettyPrinted($policy)
        );
    }

    public function testGetEnumConstantDeclValue(): void
    {
        $cursor = $this->cursors['c:@E@qux@CORGE'];

        $this->assertSame(
            1,
            $cursor->getEnumConstantDeclValue()
        );
    }

    /**
     * @covers \Klitsche\Clang\CXSourceLocation
     * @covers \Klitsche\Clang\FileLocation
     */
    public function testGetLocation(): void
    {
        $cursor = $this->cursors['c:test.h@T@int_t'];

        $location = $cursor->getLocation();

        $this->assertSame(__DIR__ . '/test.h', $location->getFileLocation()->getFile());
        $this->assertSame(146, $location->getFileLocation()->getOffset());
        $this->assertSame(13, $location->getFileLocation()->getColumn());
        $this->assertSame(9, $location->getFileLocation()->getLine());
    }

    /**
     * @covers \Klitsche\Clang\CXSourceRange
     */
    public function testGetCommentRange(): void
    {
        $cursor1 = $this->cursors['c:@F@func1'];
        $cursor2 = $this->cursors['c:@F@func2'];

        $range1 = $cursor1->getCommentRange();
        $range2 = $cursor1->getCommentRange();
        $range3 = $cursor2->getCommentRange();

        $this->assertTrue($range1->equal($range2));
        $this->assertFalse($range1->equal($range3));
    }

    public function testGetFieldDeclBitWidth(): void
    {
        $cursor = $this->cursors['c:@S@b'];

        $this->assertSame(-1, $cursor->getFieldDeclBitWidth());
    }

    public function testIsMacroBuiltin(): void
    {
        $cursor = $this->cursors['c:@macro@__clang__'];

        $this->assertFalse($cursor->isMacroBuiltin());
    }

    public function testIsMacroFunctionLike(): void
    {
        $cursor = $this->cursors['c:@macro@__clang__'];

        $this->assertFalse($cursor->isMacroFunctionLike());
    }

    public function testIsAnonymous(): void
    {
        $cursor = $this->cursors['struct a_t'];

        $this->assertFalse($cursor->isAnonymous());
    }

    public function testIsAnonymousRecordDecl(): void
    {
        $cursor = $this->cursors['struct a_t'];

        $this->assertFalse($cursor->isAnonymousRecordDecl());
    }

    public function testVisitChildren(): void
    {
        $cursor = $this->cursors['c:@E@qux'];

        $nestedVisitor = new class() implements CXCursorVisitorInterface {
            /**
             * @var CXCursor[]
             */
            public array $cursors = [];

            public function __invoke(CXCursor $cursor, CXCursor $parent, $clientData): int
            {
                $this->cursors[] = $cursor;
                $cursor->visitChildren($this);
                return CXChildVisit_Continue;
            }
        };

        $cursor->visitChildren($nestedVisitor);

        $cursors = $nestedVisitor->cursors;

        $this->assertCount(7, $cursors);
        $this->assertSame('QUUX', $cursors[0]->getSpelling());
        $this->assertSame('CORGE', $cursors[1]->getSpelling());
        $this->assertSame('QUUX_CORGE', $cursors[2]->getSpelling());
        $this->assertSame('ParenExpr', $cursors[3]->getKindSpelling());
        $this->assertSame('BinaryOperator', $cursors[4]->getKindSpelling());
        $this->assertSame('DeclRefExpr', $cursors[5]->getKindSpelling());
        $this->assertSame('DeclRefExpr', $cursors[6]->getKindSpelling());
    }

    public function testEvaluate(): void
    {
        $cursor1 = $this->cursors['c:@one'];
        $cursor2 = $this->cursors['c:@two'];
        $cursor3 = $this->cursors['c:@three'];
        $cursor4 = $this->cursors['c:@four'];

        $this->assertSame(CXEval_Float, $cursor1->evaluate()->getKind());
        $this->assertSame(1.0123456789, $cursor1->evaluate()->getAsDouble());

        $this->assertSame(CXEval_Int, $cursor2->evaluate()->getKind());
        $this->assertSame(2, $cursor2->evaluate()->getAsInt());

        $this->assertSame(CXEval_Int, $cursor3->evaluate()->getKind());
        $this->assertSame(1, $cursor3->evaluate()->getAsInt());

        $this->assertSame(CXEval_StrLiteral, $cursor4->evaluate()->getKind());
        $this->assertSame('five', $cursor4->evaluate()->getAsStr());
    }
}
