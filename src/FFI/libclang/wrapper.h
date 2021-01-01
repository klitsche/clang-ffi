// Copyright (c) 2020, the Dart project authors. Please see the AUTHORS file
// for details. All rights reserved. Use of this source code is governed by a
// BSD-style license that can be found in the LICENSE file.

#ifndef WRAPPER_H_
#define WRAPPER_H_

#include <clang-c/Index.h>

const char *clang_getCString_wrap(CXString *string);

void clang_disposeString_wrap(CXString *string);

enum CXCursorKind clang_getCursorKind_wrap(CXCursor *cursor);

CXString *clang_getCursorKindSpelling_wrap(enum CXCursorKind kind);

CXType *clang_getCursorType_wrap(CXCursor *cursor);

CXString *clang_getTypeSpelling_wrap(CXType *type);

CXString *clang_getTypeKindSpelling_wrap(enum CXTypeKind typeKind);

CXType *clang_getResultType_wrap(CXType *functionType);

CXType *clang_getPointeeType_wrap(CXType *pointerType);

CXType *clang_getCanonicalType_wrap(CXType *typerefType);

CXType *clang_Type_getNamedType_wrap(CXType *elaboratedType);

CXCursor *clang_getTypeDeclaration_wrap(CXType *cxtype);

CXType *clang_getTypedefDeclUnderlyingType_wrap(CXCursor *cxcursor);

/** The name of parameter, struct, typedef. */
CXString *clang_getCursorSpelling_wrap(CXCursor *cursor);

CXCursor *clang_getTranslationUnitCursor_wrap(CXTranslationUnit tu);

CXString *clang_formatDiagnostic_wrap(CXDiagnostic diag, int opts);

// Alternative typedef for [CXCursorVisitor] using pointer for passing cursor and parent
// instead of passing by value
typedef enum CXChildVisitResult (*ModifiedCXCursorVisitor)(CXCursor *cursor,
                                                           CXCursor *parent,
                                                           CXClientData client_data);


/** Visitor is a function pointer with parameters having pointers to cxcursor
* instead of cxcursor by default. */
unsigned clang_visitChildren_wrap(CXCursor *parent, ModifiedCXCursorVisitor _modifiedVisitor, long long uid);

int clang_Cursor_getNumArguments_wrap(CXCursor *cursor);

CXCursor *clang_Cursor_getArgument_wrap(CXCursor *cursor, unsigned index);

int clang_getNumArgTypes_wrap(CXType *cxtype);

CXType *clang_getArgType_wrap(CXType *cxtype, unsigned index);

long long clang_getEnumConstantDeclValue_wrap(CXCursor *cursor);

/** Returns non-zero if the ranges are the same, zero if they differ. */
unsigned clang_equalRanges_wrap(CXSourceRange *c1, CXSourceRange *c2);

/** Returns the comment range. */
CXSourceRange *clang_Cursor_getCommentRange_wrap(CXCursor *cursor);

/** Returns the raw comment. */
CXString *clang_Cursor_getRawCommentText_wrap(CXCursor *cursor);

/** Returns the first paragraph of doxygen doc comment. */
CXString *clang_Cursor_getBriefCommentText_wrap(CXCursor *cursor);

CXSourceLocation *clang_getCursorLocation_wrap(CXCursor *cursor);

void clang_getFileLocation_wrap(CXSourceLocation *location, CXFile *file, unsigned *line, unsigned *column, unsigned *offset);

CXString *clang_getFileName_wrap(CXFile SFile);

unsigned long long clang_getNumElements_wrap(CXType *cxtype);

CXType *clang_getArrayElementType_wrap(CXType *cxtype);

unsigned clang_Cursor_isMacroFunctionLike_wrap(CXCursor *cursor);

unsigned clang_Cursor_isMacroBuiltin_wrap(CXCursor *cursor);

CXEvalResult clang_Cursor_Evaluate_wrap(CXCursor *cursor);

unsigned clang_Cursor_isAnonymous_wrap(CXCursor *cursor);

unsigned clang_Cursor_isAnonymousRecordDecl_wrap(CXCursor *cursor);

CXString *clang_getCursorUSR_wrap(CXCursor *cursor);

int clang_getFieldDeclBitWidth_wrap(CXCursor *cursor);

CXString *clang_getCursorPrettyPrinted_wrap(CXCursor *cursor, CXPrintingPolicy Policy);

CXCursor *clang_getCursorReferenced_wrap(CXCursor *cursor);

int clang_isFunctionTypeVariadic_wrap(CXType *cxtype);

int clang_isConstQualifiedType_wrap(CXType *cxtype);

int clang_getNumOverloadedDecls_wrap(CXCursor *cursor);

CXCursor *clang_getOverloadedDecl_wrap(CXCursor *cursor, unsigned index);

#endif // WRAPPER_H_