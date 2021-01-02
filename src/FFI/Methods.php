<?php
/**
 * This file is generated! Do not edit directly.
 */

declare(strict_types=1);

namespace Klitsche\Clang\FFI;

trait Methods
{
    abstract public static function getFFI(): \FFI;

    /**
     * @param \FFI\CData|null $string CXString
     * @return string|null const char*
     */
    public function clang_getCString(?\FFI\CData $string): ?string
    {
        return static::getFFI()->clang_getCString($string);
    }

    /**
     * @param \FFI\CData|null $string CXString
     */
    public function clang_disposeString(?\FFI\CData $string): void
    {
        static::getFFI()->clang_disposeString($string);
    }

    /**
     * @param \FFI\CData|null $set CXStringSet*
     */
    public function clang_disposeStringSet(?\FFI\CData $set): void
    {
        static::getFFI()->clang_disposeStringSet($set);
    }

    /**
     * @return int|null unsigned long long
     */
    public function clang_getBuildSessionTimestamp(): ?int
    {
        return static::getFFI()->clang_getBuildSessionTimestamp();
    }

    /**
     * @param int|null $options unsigned
     * @return \FFI\CData|null struct CXVirtualFileOverlayImpl*
     */
    public function clang_VirtualFileOverlay_create(?int $options): ?\FFI\CData
    {
        return static::getFFI()->clang_VirtualFileOverlay_create($options);
    }

    /**
     * @param \FFI\CData|null $arg0 struct CXVirtualFileOverlayImpl*
     * @param string|null $virtualPath const char*
     * @param string|null $realPath const char*
     * @return int enum CXErrorCode
     */
    public function clang_VirtualFileOverlay_addFileMapping(?\FFI\CData $arg0, ?string $virtualPath, ?string $realPath): int
    {
        return static::getFFI()->clang_VirtualFileOverlay_addFileMapping($arg0, $virtualPath, $realPath);
    }

    /**
     * @param \FFI\CData|null $arg0 struct CXVirtualFileOverlayImpl*
     * @param int|null $caseSensitive int
     * @return int enum CXErrorCode
     */
    public function clang_VirtualFileOverlay_setCaseSensitivity(?\FFI\CData $arg0, ?int $caseSensitive): int
    {
        return static::getFFI()->clang_VirtualFileOverlay_setCaseSensitivity($arg0, $caseSensitive);
    }

    /**
     * @param \FFI\CData|null $arg0 struct CXVirtualFileOverlayImpl*
     * @param int|null $options unsigned
     * @param \FFI\CData|null $out_buffer_ptr char**
     * @param \FFI\CData|null $out_buffer_size unsigned*
     * @return int enum CXErrorCode
     */
    public function clang_VirtualFileOverlay_writeToBuffer(?\FFI\CData $arg0, ?int $options, ?\FFI\CData $out_buffer_ptr, ?\FFI\CData $out_buffer_size): int
    {
        return static::getFFI()->clang_VirtualFileOverlay_writeToBuffer($arg0, $options, $out_buffer_ptr, $out_buffer_size);
    }

    /**
     * @param \FFI\CData|object|string|null $buffer void*
     */
    public function clang_free($buffer): void
    {
        static::getFFI()->clang_free($buffer);
    }

    /**
     * @param \FFI\CData|null $arg0 struct CXVirtualFileOverlayImpl*
     */
    public function clang_VirtualFileOverlay_dispose(?\FFI\CData $arg0): void
    {
        static::getFFI()->clang_VirtualFileOverlay_dispose($arg0);
    }

    /**
     * @param int|null $options unsigned
     * @return \FFI\CData|null struct CXModuleMapDescriptorImpl*
     */
    public function clang_ModuleMapDescriptor_create(?int $options): ?\FFI\CData
    {
        return static::getFFI()->clang_ModuleMapDescriptor_create($options);
    }

    /**
     * @param \FFI\CData|null $arg0 struct CXModuleMapDescriptorImpl*
     * @param string|null $name const char*
     * @return int enum CXErrorCode
     */
    public function clang_ModuleMapDescriptor_setFrameworkModuleName(?\FFI\CData $arg0, ?string $name): int
    {
        return static::getFFI()->clang_ModuleMapDescriptor_setFrameworkModuleName($arg0, $name);
    }

    /**
     * @param \FFI\CData|null $arg0 struct CXModuleMapDescriptorImpl*
     * @param string|null $name const char*
     * @return int enum CXErrorCode
     */
    public function clang_ModuleMapDescriptor_setUmbrellaHeader(?\FFI\CData $arg0, ?string $name): int
    {
        return static::getFFI()->clang_ModuleMapDescriptor_setUmbrellaHeader($arg0, $name);
    }

    /**
     * @param \FFI\CData|null $arg0 struct CXModuleMapDescriptorImpl*
     * @param int|null $options unsigned
     * @param \FFI\CData|null $out_buffer_ptr char**
     * @param \FFI\CData|null $out_buffer_size unsigned*
     * @return int enum CXErrorCode
     */
    public function clang_ModuleMapDescriptor_writeToBuffer(?\FFI\CData $arg0, ?int $options, ?\FFI\CData $out_buffer_ptr, ?\FFI\CData $out_buffer_size): int
    {
        return static::getFFI()->clang_ModuleMapDescriptor_writeToBuffer($arg0, $options, $out_buffer_ptr, $out_buffer_size);
    }

    /**
     * @param \FFI\CData|null $arg0 struct CXModuleMapDescriptorImpl*
     */
    public function clang_ModuleMapDescriptor_dispose(?\FFI\CData $arg0): void
    {
        static::getFFI()->clang_ModuleMapDescriptor_dispose($arg0);
    }

    /**
     * @param int|null $excludeDeclarationsFromPCH int
     * @param int|null $displayDiagnostics int
     * @return \FFI\CData|object|string|null void*
     */
    public function clang_createIndex(?int $excludeDeclarationsFromPCH, ?int $displayDiagnostics)
    {
        return static::getFFI()->clang_createIndex($excludeDeclarationsFromPCH, $displayDiagnostics);
    }

    /**
     * @param \FFI\CData|object|string|null $index void*
     */
    public function clang_disposeIndex($index): void
    {
        static::getFFI()->clang_disposeIndex($index);
    }

    /**
     * @param \FFI\CData|object|string|null $arg0 void*
     * @param int|null $options unsigned
     */
    public function clang_CXIndex_setGlobalOptions($arg0, ?int $options): void
    {
        static::getFFI()->clang_CXIndex_setGlobalOptions($arg0, $options);
    }

    /**
     * @param \FFI\CData|object|string|null $arg0 void*
     * @return int|null unsigned
     */
    public function clang_CXIndex_getGlobalOptions($arg0): ?int
    {
        return static::getFFI()->clang_CXIndex_getGlobalOptions($arg0);
    }

    /**
     * @param \FFI\CData|object|string|null $arg0 void*
     * @param string|null $Path const char*
     */
    public function clang_CXIndex_setInvocationEmissionPathOption($arg0, ?string $Path): void
    {
        static::getFFI()->clang_CXIndex_setInvocationEmissionPathOption($arg0, $Path);
    }

    /**
     * @param \FFI\CData|object|string|null $SFile void*
     * @return \FFI\CData|null CXString
     */
    public function clang_getFileName($SFile): ?\FFI\CData
    {
        return static::getFFI()->clang_getFileName($SFile);
    }

    /**
     * @param \FFI\CData|object|string|null $SFile void*
     * @return int|null time_t
     */
    public function clang_getFileTime($SFile): ?int
    {
        return static::getFFI()->clang_getFileTime($SFile);
    }

    /**
     * @param \FFI\CData|object|string|null $file void*
     * @param \FFI\CData|null $outID CXFileUniqueID*
     * @return int|null int
     */
    public function clang_getFileUniqueID($file, ?\FFI\CData $outID): ?int
    {
        return static::getFFI()->clang_getFileUniqueID($file, $outID);
    }

    /**
     * @param \FFI\CData|null $tu struct CXTranslationUnitImpl*
     * @param \FFI\CData|object|string|null $file void*
     * @return int|null unsigned
     */
    public function clang_isFileMultipleIncludeGuarded(?\FFI\CData $tu, $file): ?int
    {
        return static::getFFI()->clang_isFileMultipleIncludeGuarded($tu, $file);
    }

    /**
     * @param \FFI\CData|null $tu struct CXTranslationUnitImpl*
     * @param string|null $file_name const char*
     * @return \FFI\CData|object|string|null void*
     */
    public function clang_getFile(?\FFI\CData $tu, ?string $file_name)
    {
        return static::getFFI()->clang_getFile($tu, $file_name);
    }

    /**
     * @param \FFI\CData|null $tu struct CXTranslationUnitImpl*
     * @param \FFI\CData|object|string|null $file void*
     * @param \FFI\CData|null $size size_t*
     * @return string|null const char*
     */
    public function clang_getFileContents(?\FFI\CData $tu, $file, ?\FFI\CData $size): ?string
    {
        return static::getFFI()->clang_getFileContents($tu, $file, $size);
    }

    /**
     * @param \FFI\CData|object|string|null $file1 void*
     * @param \FFI\CData|object|string|null $file2 void*
     * @return int|null int
     */
    public function clang_File_isEqual($file1, $file2): ?int
    {
        return static::getFFI()->clang_File_isEqual($file1, $file2);
    }

    /**
     * @param \FFI\CData|object|string|null $file void*
     * @return \FFI\CData|null CXString
     */
    public function clang_File_tryGetRealPathName($file): ?\FFI\CData
    {
        return static::getFFI()->clang_File_tryGetRealPathName($file);
    }

    /**
     * @return \FFI\CData|null CXSourceLocation
     */
    public function clang_getNullLocation(): ?\FFI\CData
    {
        return static::getFFI()->clang_getNullLocation();
    }

    /**
     * @param \FFI\CData|null $loc1 CXSourceLocation
     * @param \FFI\CData|null $loc2 CXSourceLocation
     * @return int|null unsigned
     */
    public function clang_equalLocations(?\FFI\CData $loc1, ?\FFI\CData $loc2): ?int
    {
        return static::getFFI()->clang_equalLocations($loc1, $loc2);
    }

    /**
     * @param \FFI\CData|null $tu struct CXTranslationUnitImpl*
     * @param \FFI\CData|object|string|null $file void*
     * @param int|null $line unsigned
     * @param int|null $column unsigned
     * @return \FFI\CData|null CXSourceLocation
     */
    public function clang_getLocation(?\FFI\CData $tu, $file, ?int $line, ?int $column): ?\FFI\CData
    {
        return static::getFFI()->clang_getLocation($tu, $file, $line, $column);
    }

    /**
     * @param \FFI\CData|null $tu struct CXTranslationUnitImpl*
     * @param \FFI\CData|object|string|null $file void*
     * @param int|null $offset unsigned
     * @return \FFI\CData|null CXSourceLocation
     */
    public function clang_getLocationForOffset(?\FFI\CData $tu, $file, ?int $offset): ?\FFI\CData
    {
        return static::getFFI()->clang_getLocationForOffset($tu, $file, $offset);
    }

    /**
     * @param \FFI\CData|null $location CXSourceLocation
     * @return int|null int
     */
    public function clang_Location_isInSystemHeader(?\FFI\CData $location): ?int
    {
        return static::getFFI()->clang_Location_isInSystemHeader($location);
    }

    /**
     * @param \FFI\CData|null $location CXSourceLocation
     * @return int|null int
     */
    public function clang_Location_isFromMainFile(?\FFI\CData $location): ?int
    {
        return static::getFFI()->clang_Location_isFromMainFile($location);
    }

    /**
     * @return \FFI\CData|null CXSourceRange
     */
    public function clang_getNullRange(): ?\FFI\CData
    {
        return static::getFFI()->clang_getNullRange();
    }

    /**
     * @param \FFI\CData|null $begin CXSourceLocation
     * @param \FFI\CData|null $end CXSourceLocation
     * @return \FFI\CData|null CXSourceRange
     */
    public function clang_getRange(?\FFI\CData $begin, ?\FFI\CData $end): ?\FFI\CData
    {
        return static::getFFI()->clang_getRange($begin, $end);
    }

    /**
     * @param \FFI\CData|null $range1 CXSourceRange
     * @param \FFI\CData|null $range2 CXSourceRange
     * @return int|null unsigned
     */
    public function clang_equalRanges(?\FFI\CData $range1, ?\FFI\CData $range2): ?int
    {
        return static::getFFI()->clang_equalRanges($range1, $range2);
    }

    /**
     * @param \FFI\CData|null $range CXSourceRange
     * @return int|null int
     */
    public function clang_Range_isNull(?\FFI\CData $range): ?int
    {
        return static::getFFI()->clang_Range_isNull($range);
    }

    /**
     * @param \FFI\CData|null $location CXSourceLocation
     * @param \FFI\CData|object|string|null $file void**
     * @param \FFI\CData|null $line unsigned*
     * @param \FFI\CData|null $column unsigned*
     * @param \FFI\CData|null $offset unsigned*
     */
    public function clang_getExpansionLocation(?\FFI\CData $location, $file, ?\FFI\CData $line, ?\FFI\CData $column, ?\FFI\CData $offset): void
    {
        static::getFFI()->clang_getExpansionLocation($location, $file, $line, $column, $offset);
    }

    /**
     * @param \FFI\CData|null $location CXSourceLocation
     * @param \FFI\CData|null $filename CXString*
     * @param \FFI\CData|null $line unsigned*
     * @param \FFI\CData|null $column unsigned*
     */
    public function clang_getPresumedLocation(?\FFI\CData $location, ?\FFI\CData $filename, ?\FFI\CData $line, ?\FFI\CData $column): void
    {
        static::getFFI()->clang_getPresumedLocation($location, $filename, $line, $column);
    }

    /**
     * @param \FFI\CData|null $location CXSourceLocation
     * @param \FFI\CData|object|string|null $file void**
     * @param \FFI\CData|null $line unsigned*
     * @param \FFI\CData|null $column unsigned*
     * @param \FFI\CData|null $offset unsigned*
     */
    public function clang_getInstantiationLocation(?\FFI\CData $location, $file, ?\FFI\CData $line, ?\FFI\CData $column, ?\FFI\CData $offset): void
    {
        static::getFFI()->clang_getInstantiationLocation($location, $file, $line, $column, $offset);
    }

    /**
     * @param \FFI\CData|null $location CXSourceLocation
     * @param \FFI\CData|object|string|null $file void**
     * @param \FFI\CData|null $line unsigned*
     * @param \FFI\CData|null $column unsigned*
     * @param \FFI\CData|null $offset unsigned*
     */
    public function clang_getSpellingLocation(?\FFI\CData $location, $file, ?\FFI\CData $line, ?\FFI\CData $column, ?\FFI\CData $offset): void
    {
        static::getFFI()->clang_getSpellingLocation($location, $file, $line, $column, $offset);
    }

    /**
     * @param \FFI\CData|null $location CXSourceLocation
     * @param \FFI\CData|object|string|null $file void**
     * @param \FFI\CData|null $line unsigned*
     * @param \FFI\CData|null $column unsigned*
     * @param \FFI\CData|null $offset unsigned*
     */
    public function clang_getFileLocation(?\FFI\CData $location, $file, ?\FFI\CData $line, ?\FFI\CData $column, ?\FFI\CData $offset): void
    {
        static::getFFI()->clang_getFileLocation($location, $file, $line, $column, $offset);
    }

    /**
     * @param \FFI\CData|null $range CXSourceRange
     * @return \FFI\CData|null CXSourceLocation
     */
    public function clang_getRangeStart(?\FFI\CData $range): ?\FFI\CData
    {
        return static::getFFI()->clang_getRangeStart($range);
    }

    /**
     * @param \FFI\CData|null $range CXSourceRange
     * @return \FFI\CData|null CXSourceLocation
     */
    public function clang_getRangeEnd(?\FFI\CData $range): ?\FFI\CData
    {
        return static::getFFI()->clang_getRangeEnd($range);
    }

    /**
     * @param \FFI\CData|null $tu struct CXTranslationUnitImpl*
     * @param \FFI\CData|object|string|null $file void*
     * @return \FFI\CData|null CXSourceRangeList*
     */
    public function clang_getSkippedRanges(?\FFI\CData $tu, $file): ?\FFI\CData
    {
        return static::getFFI()->clang_getSkippedRanges($tu, $file);
    }

    /**
     * @param \FFI\CData|null $tu struct CXTranslationUnitImpl*
     * @return \FFI\CData|null CXSourceRangeList*
     */
    public function clang_getAllSkippedRanges(?\FFI\CData $tu): ?\FFI\CData
    {
        return static::getFFI()->clang_getAllSkippedRanges($tu);
    }

    /**
     * @param \FFI\CData|null $ranges CXSourceRangeList*
     */
    public function clang_disposeSourceRangeList(?\FFI\CData $ranges): void
    {
        static::getFFI()->clang_disposeSourceRangeList($ranges);
    }

    /**
     * @param \FFI\CData|object|string|null $Diags void*
     * @return int|null unsigned
     */
    public function clang_getNumDiagnosticsInSet($Diags): ?int
    {
        return static::getFFI()->clang_getNumDiagnosticsInSet($Diags);
    }

    /**
     * @param \FFI\CData|object|string|null $Diags void*
     * @param int|null $Index unsigned
     * @return \FFI\CData|object|string|null void*
     */
    public function clang_getDiagnosticInSet($Diags, ?int $Index)
    {
        return static::getFFI()->clang_getDiagnosticInSet($Diags, $Index);
    }

    /**
     * @param string|null $file const char*
     * @param \FFI\CData|null $error enum CXLoadDiag_Error*
     * @param \FFI\CData|null $errorString CXString*
     * @return \FFI\CData|object|string|null void*
     */
    public function clang_loadDiagnostics(?string $file, ?\FFI\CData $error, ?\FFI\CData $errorString)
    {
        return static::getFFI()->clang_loadDiagnostics($file, $error, $errorString);
    }

    /**
     * @param \FFI\CData|object|string|null $Diags void*
     */
    public function clang_disposeDiagnosticSet($Diags): void
    {
        static::getFFI()->clang_disposeDiagnosticSet($Diags);
    }

    /**
     * @param \FFI\CData|object|string|null $D void*
     * @return \FFI\CData|object|string|null void*
     */
    public function clang_getChildDiagnostics($D)
    {
        return static::getFFI()->clang_getChildDiagnostics($D);
    }

    /**
     * @param \FFI\CData|null $Unit struct CXTranslationUnitImpl*
     * @return int|null unsigned
     */
    public function clang_getNumDiagnostics(?\FFI\CData $Unit): ?int
    {
        return static::getFFI()->clang_getNumDiagnostics($Unit);
    }

    /**
     * @param \FFI\CData|null $Unit struct CXTranslationUnitImpl*
     * @param int|null $Index unsigned
     * @return \FFI\CData|object|string|null void*
     */
    public function clang_getDiagnostic(?\FFI\CData $Unit, ?int $Index)
    {
        return static::getFFI()->clang_getDiagnostic($Unit, $Index);
    }

    /**
     * @param \FFI\CData|null $Unit struct CXTranslationUnitImpl*
     * @return \FFI\CData|object|string|null void*
     */
    public function clang_getDiagnosticSetFromTU(?\FFI\CData $Unit)
    {
        return static::getFFI()->clang_getDiagnosticSetFromTU($Unit);
    }

    /**
     * @param \FFI\CData|object|string|null $Diagnostic void*
     */
    public function clang_disposeDiagnostic($Diagnostic): void
    {
        static::getFFI()->clang_disposeDiagnostic($Diagnostic);
    }

    /**
     * @param \FFI\CData|object|string|null $Diagnostic void*
     * @param int|null $Options unsigned
     * @return \FFI\CData|null CXString
     */
    public function clang_formatDiagnostic($Diagnostic, ?int $Options): ?\FFI\CData
    {
        return static::getFFI()->clang_formatDiagnostic($Diagnostic, $Options);
    }

    /**
     * @return int|null unsigned
     */
    public function clang_defaultDiagnosticDisplayOptions(): ?int
    {
        return static::getFFI()->clang_defaultDiagnosticDisplayOptions();
    }

    /**
     * @param \FFI\CData|object|string|null $arg0 void*
     * @return int enum CXDiagnosticSeverity
     */
    public function clang_getDiagnosticSeverity($arg0): int
    {
        return static::getFFI()->clang_getDiagnosticSeverity($arg0);
    }

    /**
     * @param \FFI\CData|object|string|null $arg0 void*
     * @return \FFI\CData|null CXSourceLocation
     */
    public function clang_getDiagnosticLocation($arg0): ?\FFI\CData
    {
        return static::getFFI()->clang_getDiagnosticLocation($arg0);
    }

    /**
     * @param \FFI\CData|object|string|null $arg0 void*
     * @return \FFI\CData|null CXString
     */
    public function clang_getDiagnosticSpelling($arg0): ?\FFI\CData
    {
        return static::getFFI()->clang_getDiagnosticSpelling($arg0);
    }

    /**
     * @param \FFI\CData|object|string|null $Diag void*
     * @param \FFI\CData|null $Disable CXString*
     * @return \FFI\CData|null CXString
     */
    public function clang_getDiagnosticOption($Diag, ?\FFI\CData $Disable): ?\FFI\CData
    {
        return static::getFFI()->clang_getDiagnosticOption($Diag, $Disable);
    }

    /**
     * @param \FFI\CData|object|string|null $arg0 void*
     * @return int|null unsigned
     */
    public function clang_getDiagnosticCategory($arg0): ?int
    {
        return static::getFFI()->clang_getDiagnosticCategory($arg0);
    }

    /**
     * @param int|null $Category unsigned
     * @return \FFI\CData|null CXString
     */
    public function clang_getDiagnosticCategoryName(?int $Category): ?\FFI\CData
    {
        return static::getFFI()->clang_getDiagnosticCategoryName($Category);
    }

    /**
     * @param \FFI\CData|object|string|null $arg0 void*
     * @return \FFI\CData|null CXString
     */
    public function clang_getDiagnosticCategoryText($arg0): ?\FFI\CData
    {
        return static::getFFI()->clang_getDiagnosticCategoryText($arg0);
    }

    /**
     * @param \FFI\CData|object|string|null $arg0 void*
     * @return int|null unsigned
     */
    public function clang_getDiagnosticNumRanges($arg0): ?int
    {
        return static::getFFI()->clang_getDiagnosticNumRanges($arg0);
    }

    /**
     * @param \FFI\CData|object|string|null $Diagnostic void*
     * @param int|null $Range unsigned
     * @return \FFI\CData|null CXSourceRange
     */
    public function clang_getDiagnosticRange($Diagnostic, ?int $Range): ?\FFI\CData
    {
        return static::getFFI()->clang_getDiagnosticRange($Diagnostic, $Range);
    }

    /**
     * @param \FFI\CData|object|string|null $Diagnostic void*
     * @return int|null unsigned
     */
    public function clang_getDiagnosticNumFixIts($Diagnostic): ?int
    {
        return static::getFFI()->clang_getDiagnosticNumFixIts($Diagnostic);
    }

    /**
     * @param \FFI\CData|object|string|null $Diagnostic void*
     * @param int|null $FixIt unsigned
     * @param \FFI\CData|null $ReplacementRange CXSourceRange*
     * @return \FFI\CData|null CXString
     */
    public function clang_getDiagnosticFixIt($Diagnostic, ?int $FixIt, ?\FFI\CData $ReplacementRange): ?\FFI\CData
    {
        return static::getFFI()->clang_getDiagnosticFixIt($Diagnostic, $FixIt, $ReplacementRange);
    }

    /**
     * @param \FFI\CData|null $CTUnit struct CXTranslationUnitImpl*
     * @return \FFI\CData|null CXString
     */
    public function clang_getTranslationUnitSpelling(?\FFI\CData $CTUnit): ?\FFI\CData
    {
        return static::getFFI()->clang_getTranslationUnitSpelling($CTUnit);
    }

    /**
     * @param \FFI\CData|object|string|null $CIdx void*
     * @param string|null $source_filename const char*
     * @param int|null $num_clang_command_line_args int
     * @param \FFI\CData|null $clang_command_line_args const char**
     * @param int|null $num_unsaved_files unsigned
     * @param \FFI\CData|null $unsaved_files struct CXUnsavedFile*
     * @return \FFI\CData|null struct CXTranslationUnitImpl*
     */
    public function clang_createTranslationUnitFromSourceFile($CIdx, ?string $source_filename, ?int $num_clang_command_line_args, ?\FFI\CData $clang_command_line_args, ?int $num_unsaved_files, ?\FFI\CData $unsaved_files): ?\FFI\CData
    {
        return static::getFFI()->clang_createTranslationUnitFromSourceFile($CIdx, $source_filename, $num_clang_command_line_args, $clang_command_line_args, $num_unsaved_files, $unsaved_files);
    }

    /**
     * @param \FFI\CData|object|string|null $CIdx void*
     * @param string|null $ast_filename const char*
     * @return \FFI\CData|null struct CXTranslationUnitImpl*
     */
    public function clang_createTranslationUnit($CIdx, ?string $ast_filename): ?\FFI\CData
    {
        return static::getFFI()->clang_createTranslationUnit($CIdx, $ast_filename);
    }

    /**
     * @param \FFI\CData|object|string|null $CIdx void*
     * @param string|null $ast_filename const char*
     * @param \FFI\CData|null $out_TU struct CXTranslationUnitImpl**
     * @return int enum CXErrorCode
     */
    public function clang_createTranslationUnit2($CIdx, ?string $ast_filename, ?\FFI\CData $out_TU): int
    {
        return static::getFFI()->clang_createTranslationUnit2($CIdx, $ast_filename, $out_TU);
    }

    /**
     * @return int|null unsigned
     */
    public function clang_defaultEditingTranslationUnitOptions(): ?int
    {
        return static::getFFI()->clang_defaultEditingTranslationUnitOptions();
    }

    /**
     * @param \FFI\CData|object|string|null $CIdx void*
     * @param string|null $source_filename const char*
     * @param \FFI\CData|null $command_line_args const char**
     * @param int|null $num_command_line_args int
     * @param \FFI\CData|null $unsaved_files struct CXUnsavedFile*
     * @param int|null $num_unsaved_files unsigned
     * @param int|null $options unsigned
     * @return \FFI\CData|null struct CXTranslationUnitImpl*
     */
    public function clang_parseTranslationUnit($CIdx, ?string $source_filename, ?\FFI\CData $command_line_args, ?int $num_command_line_args, ?\FFI\CData $unsaved_files, ?int $num_unsaved_files, ?int $options): ?\FFI\CData
    {
        return static::getFFI()->clang_parseTranslationUnit($CIdx, $source_filename, $command_line_args, $num_command_line_args, $unsaved_files, $num_unsaved_files, $options);
    }

    /**
     * @param \FFI\CData|object|string|null $CIdx void*
     * @param string|null $source_filename const char*
     * @param \FFI\CData|null $command_line_args const char**
     * @param int|null $num_command_line_args int
     * @param \FFI\CData|null $unsaved_files struct CXUnsavedFile*
     * @param int|null $num_unsaved_files unsigned
     * @param int|null $options unsigned
     * @param \FFI\CData|null $out_TU struct CXTranslationUnitImpl**
     * @return int enum CXErrorCode
     */
    public function clang_parseTranslationUnit2($CIdx, ?string $source_filename, ?\FFI\CData $command_line_args, ?int $num_command_line_args, ?\FFI\CData $unsaved_files, ?int $num_unsaved_files, ?int $options, ?\FFI\CData $out_TU): int
    {
        return static::getFFI()->clang_parseTranslationUnit2($CIdx, $source_filename, $command_line_args, $num_command_line_args, $unsaved_files, $num_unsaved_files, $options, $out_TU);
    }

    /**
     * @param \FFI\CData|object|string|null $CIdx void*
     * @param string|null $source_filename const char*
     * @param \FFI\CData|null $command_line_args const char**
     * @param int|null $num_command_line_args int
     * @param \FFI\CData|null $unsaved_files struct CXUnsavedFile*
     * @param int|null $num_unsaved_files unsigned
     * @param int|null $options unsigned
     * @param \FFI\CData|null $out_TU struct CXTranslationUnitImpl**
     * @return int enum CXErrorCode
     */
    public function clang_parseTranslationUnit2FullArgv($CIdx, ?string $source_filename, ?\FFI\CData $command_line_args, ?int $num_command_line_args, ?\FFI\CData $unsaved_files, ?int $num_unsaved_files, ?int $options, ?\FFI\CData $out_TU): int
    {
        return static::getFFI()->clang_parseTranslationUnit2FullArgv($CIdx, $source_filename, $command_line_args, $num_command_line_args, $unsaved_files, $num_unsaved_files, $options, $out_TU);
    }

    /**
     * @param \FFI\CData|null $TU struct CXTranslationUnitImpl*
     * @return int|null unsigned
     */
    public function clang_defaultSaveOptions(?\FFI\CData $TU): ?int
    {
        return static::getFFI()->clang_defaultSaveOptions($TU);
    }

    /**
     * @param \FFI\CData|null $TU struct CXTranslationUnitImpl*
     * @param string|null $FileName const char*
     * @param int|null $options unsigned
     * @return int|null int
     */
    public function clang_saveTranslationUnit(?\FFI\CData $TU, ?string $FileName, ?int $options): ?int
    {
        return static::getFFI()->clang_saveTranslationUnit($TU, $FileName, $options);
    }

    /**
     * @param \FFI\CData|null $arg0 struct CXTranslationUnitImpl*
     * @return int|null unsigned
     */
    public function clang_suspendTranslationUnit(?\FFI\CData $arg0): ?int
    {
        return static::getFFI()->clang_suspendTranslationUnit($arg0);
    }

    /**
     * @param \FFI\CData|null $arg0 struct CXTranslationUnitImpl*
     */
    public function clang_disposeTranslationUnit(?\FFI\CData $arg0): void
    {
        static::getFFI()->clang_disposeTranslationUnit($arg0);
    }

    /**
     * @param \FFI\CData|null $TU struct CXTranslationUnitImpl*
     * @return int|null unsigned
     */
    public function clang_defaultReparseOptions(?\FFI\CData $TU): ?int
    {
        return static::getFFI()->clang_defaultReparseOptions($TU);
    }

    /**
     * @param \FFI\CData|null $TU struct CXTranslationUnitImpl*
     * @param int|null $num_unsaved_files unsigned
     * @param \FFI\CData|null $unsaved_files struct CXUnsavedFile*
     * @param int|null $options unsigned
     * @return int|null int
     */
    public function clang_reparseTranslationUnit(?\FFI\CData $TU, ?int $num_unsaved_files, ?\FFI\CData $unsaved_files, ?int $options): ?int
    {
        return static::getFFI()->clang_reparseTranslationUnit($TU, $num_unsaved_files, $unsaved_files, $options);
    }

    /**
     * @param int $kind enum CXTUResourceUsageKind
     * @return string|null const char*
     */
    public function clang_getTUResourceUsageName(int $kind): ?string
    {
        return static::getFFI()->clang_getTUResourceUsageName($kind);
    }

    /**
     * @param \FFI\CData|null $TU struct CXTranslationUnitImpl*
     * @return \FFI\CData|null CXTUResourceUsage
     */
    public function clang_getCXTUResourceUsage(?\FFI\CData $TU): ?\FFI\CData
    {
        return static::getFFI()->clang_getCXTUResourceUsage($TU);
    }

    /**
     * @param \FFI\CData|null $usage CXTUResourceUsage
     */
    public function clang_disposeCXTUResourceUsage(?\FFI\CData $usage): void
    {
        static::getFFI()->clang_disposeCXTUResourceUsage($usage);
    }

    /**
     * @param \FFI\CData|null $CTUnit struct CXTranslationUnitImpl*
     * @return \FFI\CData|null struct CXTargetInfoImpl*
     */
    public function clang_getTranslationUnitTargetInfo(?\FFI\CData $CTUnit): ?\FFI\CData
    {
        return static::getFFI()->clang_getTranslationUnitTargetInfo($CTUnit);
    }

    /**
     * @param \FFI\CData|null $Info struct CXTargetInfoImpl*
     */
    public function clang_TargetInfo_dispose(?\FFI\CData $Info): void
    {
        static::getFFI()->clang_TargetInfo_dispose($Info);
    }

    /**
     * @param \FFI\CData|null $Info struct CXTargetInfoImpl*
     * @return \FFI\CData|null CXString
     */
    public function clang_TargetInfo_getTriple(?\FFI\CData $Info): ?\FFI\CData
    {
        return static::getFFI()->clang_TargetInfo_getTriple($Info);
    }

    /**
     * @param \FFI\CData|null $Info struct CXTargetInfoImpl*
     * @return int|null int
     */
    public function clang_TargetInfo_getPointerWidth(?\FFI\CData $Info): ?int
    {
        return static::getFFI()->clang_TargetInfo_getPointerWidth($Info);
    }

    /**
     * @return \FFI\CData|null CXCursor
     */
    public function clang_getNullCursor(): ?\FFI\CData
    {
        return static::getFFI()->clang_getNullCursor();
    }

    /**
     * @param \FFI\CData|null $arg0 struct CXTranslationUnitImpl*
     * @return \FFI\CData|null CXCursor
     */
    public function clang_getTranslationUnitCursor(?\FFI\CData $arg0): ?\FFI\CData
    {
        return static::getFFI()->clang_getTranslationUnitCursor($arg0);
    }

    /**
     * @param \FFI\CData|null $arg0 CXCursor
     * @param \FFI\CData|null $arg1 CXCursor
     * @return int|null unsigned
     */
    public function clang_equalCursors(?\FFI\CData $arg0, ?\FFI\CData $arg1): ?int
    {
        return static::getFFI()->clang_equalCursors($arg0, $arg1);
    }

    /**
     * @param \FFI\CData|null $cursor CXCursor
     * @return int|null int
     */
    public function clang_Cursor_isNull(?\FFI\CData $cursor): ?int
    {
        return static::getFFI()->clang_Cursor_isNull($cursor);
    }

    /**
     * @param \FFI\CData|null $arg0 CXCursor
     * @return int|null unsigned
     */
    public function clang_hashCursor(?\FFI\CData $arg0): ?int
    {
        return static::getFFI()->clang_hashCursor($arg0);
    }

    /**
     * @param \FFI\CData|null $arg0 CXCursor
     * @return int enum CXCursorKind
     */
    public function clang_getCursorKind(?\FFI\CData $arg0): int
    {
        return static::getFFI()->clang_getCursorKind($arg0);
    }

    /**
     * @param int $arg0 enum CXCursorKind
     * @return int|null unsigned
     */
    public function clang_isDeclaration(int $arg0): ?int
    {
        return static::getFFI()->clang_isDeclaration($arg0);
    }

    /**
     * @param \FFI\CData|null $arg0 CXCursor
     * @return int|null unsigned
     */
    public function clang_isInvalidDeclaration(?\FFI\CData $arg0): ?int
    {
        return static::getFFI()->clang_isInvalidDeclaration($arg0);
    }

    /**
     * @param int $arg0 enum CXCursorKind
     * @return int|null unsigned
     */
    public function clang_isReference(int $arg0): ?int
    {
        return static::getFFI()->clang_isReference($arg0);
    }

    /**
     * @param int $arg0 enum CXCursorKind
     * @return int|null unsigned
     */
    public function clang_isExpression(int $arg0): ?int
    {
        return static::getFFI()->clang_isExpression($arg0);
    }

    /**
     * @param int $arg0 enum CXCursorKind
     * @return int|null unsigned
     */
    public function clang_isStatement(int $arg0): ?int
    {
        return static::getFFI()->clang_isStatement($arg0);
    }

    /**
     * @param int $arg0 enum CXCursorKind
     * @return int|null unsigned
     */
    public function clang_isAttribute(int $arg0): ?int
    {
        return static::getFFI()->clang_isAttribute($arg0);
    }

    /**
     * @param \FFI\CData|null $C CXCursor
     * @return int|null unsigned
     */
    public function clang_Cursor_hasAttrs(?\FFI\CData $C): ?int
    {
        return static::getFFI()->clang_Cursor_hasAttrs($C);
    }

    /**
     * @param int $arg0 enum CXCursorKind
     * @return int|null unsigned
     */
    public function clang_isInvalid(int $arg0): ?int
    {
        return static::getFFI()->clang_isInvalid($arg0);
    }

    /**
     * @param int $arg0 enum CXCursorKind
     * @return int|null unsigned
     */
    public function clang_isTranslationUnit(int $arg0): ?int
    {
        return static::getFFI()->clang_isTranslationUnit($arg0);
    }

    /**
     * @param int $arg0 enum CXCursorKind
     * @return int|null unsigned
     */
    public function clang_isPreprocessing(int $arg0): ?int
    {
        return static::getFFI()->clang_isPreprocessing($arg0);
    }

    /**
     * @param int $arg0 enum CXCursorKind
     * @return int|null unsigned
     */
    public function clang_isUnexposed(int $arg0): ?int
    {
        return static::getFFI()->clang_isUnexposed($arg0);
    }

    /**
     * @param \FFI\CData|null $cursor CXCursor
     * @return int enum CXLinkageKind
     */
    public function clang_getCursorLinkage(?\FFI\CData $cursor): int
    {
        return static::getFFI()->clang_getCursorLinkage($cursor);
    }

    /**
     * @param \FFI\CData|null $cursor CXCursor
     * @return int enum CXVisibilityKind
     */
    public function clang_getCursorVisibility(?\FFI\CData $cursor): int
    {
        return static::getFFI()->clang_getCursorVisibility($cursor);
    }

    /**
     * @param \FFI\CData|null $cursor CXCursor
     * @return int enum CXAvailabilityKind
     */
    public function clang_getCursorAvailability(?\FFI\CData $cursor): int
    {
        return static::getFFI()->clang_getCursorAvailability($cursor);
    }

    /**
     * @param \FFI\CData|null $cursor CXCursor
     * @param \FFI\CData|null $always_deprecated int*
     * @param \FFI\CData|null $deprecated_message CXString*
     * @param \FFI\CData|null $always_unavailable int*
     * @param \FFI\CData|null $unavailable_message CXString*
     * @param \FFI\CData|null $availability CXPlatformAvailability*
     * @param int|null $availability_size int
     * @return int|null int
     */
    public function clang_getCursorPlatformAvailability(?\FFI\CData $cursor, ?\FFI\CData $always_deprecated, ?\FFI\CData $deprecated_message, ?\FFI\CData $always_unavailable, ?\FFI\CData $unavailable_message, ?\FFI\CData $availability, ?int $availability_size): ?int
    {
        return static::getFFI()->clang_getCursorPlatformAvailability($cursor, $always_deprecated, $deprecated_message, $always_unavailable, $unavailable_message, $availability, $availability_size);
    }

    /**
     * @param \FFI\CData|null $availability CXPlatformAvailability*
     */
    public function clang_disposeCXPlatformAvailability(?\FFI\CData $availability): void
    {
        static::getFFI()->clang_disposeCXPlatformAvailability($availability);
    }

    /**
     * @param \FFI\CData|null $cursor CXCursor
     * @return int enum CXLanguageKind
     */
    public function clang_getCursorLanguage(?\FFI\CData $cursor): int
    {
        return static::getFFI()->clang_getCursorLanguage($cursor);
    }

    /**
     * @param \FFI\CData|null $cursor CXCursor
     * @return int enum CXTLSKind
     */
    public function clang_getCursorTLSKind(?\FFI\CData $cursor): int
    {
        return static::getFFI()->clang_getCursorTLSKind($cursor);
    }

    /**
     * @param \FFI\CData|null $arg0 CXCursor
     * @return \FFI\CData|null struct CXTranslationUnitImpl*
     */
    public function clang_Cursor_getTranslationUnit(?\FFI\CData $arg0): ?\FFI\CData
    {
        return static::getFFI()->clang_Cursor_getTranslationUnit($arg0);
    }

    /**
     * @return \FFI\CData|null struct CXCursorSetImpl*
     */
    public function clang_createCXCursorSet(): ?\FFI\CData
    {
        return static::getFFI()->clang_createCXCursorSet();
    }

    /**
     * @param \FFI\CData|null $cset struct CXCursorSetImpl*
     */
    public function clang_disposeCXCursorSet(?\FFI\CData $cset): void
    {
        static::getFFI()->clang_disposeCXCursorSet($cset);
    }

    /**
     * @param \FFI\CData|null $cset struct CXCursorSetImpl*
     * @param \FFI\CData|null $cursor CXCursor
     * @return int|null unsigned
     */
    public function clang_CXCursorSet_contains(?\FFI\CData $cset, ?\FFI\CData $cursor): ?int
    {
        return static::getFFI()->clang_CXCursorSet_contains($cset, $cursor);
    }

    /**
     * @param \FFI\CData|null $cset struct CXCursorSetImpl*
     * @param \FFI\CData|null $cursor CXCursor
     * @return int|null unsigned
     */
    public function clang_CXCursorSet_insert(?\FFI\CData $cset, ?\FFI\CData $cursor): ?int
    {
        return static::getFFI()->clang_CXCursorSet_insert($cset, $cursor);
    }

    /**
     * @param \FFI\CData|null $cursor CXCursor
     * @return \FFI\CData|null CXCursor
     */
    public function clang_getCursorSemanticParent(?\FFI\CData $cursor): ?\FFI\CData
    {
        return static::getFFI()->clang_getCursorSemanticParent($cursor);
    }

    /**
     * @param \FFI\CData|null $cursor CXCursor
     * @return \FFI\CData|null CXCursor
     */
    public function clang_getCursorLexicalParent(?\FFI\CData $cursor): ?\FFI\CData
    {
        return static::getFFI()->clang_getCursorLexicalParent($cursor);
    }

    /**
     * @param \FFI\CData|null $cursor CXCursor
     * @param \FFI\CData|null $overridden CXCursor**
     * @param \FFI\CData|null $num_overridden unsigned*
     */
    public function clang_getOverriddenCursors(?\FFI\CData $cursor, ?\FFI\CData $overridden, ?\FFI\CData $num_overridden): void
    {
        static::getFFI()->clang_getOverriddenCursors($cursor, $overridden, $num_overridden);
    }

    /**
     * @param \FFI\CData|null $overridden CXCursor*
     */
    public function clang_disposeOverriddenCursors(?\FFI\CData $overridden): void
    {
        static::getFFI()->clang_disposeOverriddenCursors($overridden);
    }

    /**
     * @param \FFI\CData|null $cursor CXCursor
     * @return \FFI\CData|object|string|null void*
     */
    public function clang_getIncludedFile(?\FFI\CData $cursor)
    {
        return static::getFFI()->clang_getIncludedFile($cursor);
    }

    /**
     * @param \FFI\CData|null $arg0 struct CXTranslationUnitImpl*
     * @param \FFI\CData|null $arg1 CXSourceLocation
     * @return \FFI\CData|null CXCursor
     */
    public function clang_getCursor(?\FFI\CData $arg0, ?\FFI\CData $arg1): ?\FFI\CData
    {
        return static::getFFI()->clang_getCursor($arg0, $arg1);
    }

    /**
     * @param \FFI\CData|null $arg0 CXCursor
     * @return \FFI\CData|null CXSourceLocation
     */
    public function clang_getCursorLocation(?\FFI\CData $arg0): ?\FFI\CData
    {
        return static::getFFI()->clang_getCursorLocation($arg0);
    }

    /**
     * @param \FFI\CData|null $arg0 CXCursor
     * @return \FFI\CData|null CXSourceRange
     */
    public function clang_getCursorExtent(?\FFI\CData $arg0): ?\FFI\CData
    {
        return static::getFFI()->clang_getCursorExtent($arg0);
    }

    /**
     * @param \FFI\CData|null $C CXCursor
     * @return \FFI\CData|null CXType
     */
    public function clang_getCursorType(?\FFI\CData $C): ?\FFI\CData
    {
        return static::getFFI()->clang_getCursorType($C);
    }

    /**
     * @param \FFI\CData|null $CT CXType
     * @return \FFI\CData|null CXString
     */
    public function clang_getTypeSpelling(?\FFI\CData $CT): ?\FFI\CData
    {
        return static::getFFI()->clang_getTypeSpelling($CT);
    }

    /**
     * @param \FFI\CData|null $C CXCursor
     * @return \FFI\CData|null CXType
     */
    public function clang_getTypedefDeclUnderlyingType(?\FFI\CData $C): ?\FFI\CData
    {
        return static::getFFI()->clang_getTypedefDeclUnderlyingType($C);
    }

    /**
     * @param \FFI\CData|null $C CXCursor
     * @return \FFI\CData|null CXType
     */
    public function clang_getEnumDeclIntegerType(?\FFI\CData $C): ?\FFI\CData
    {
        return static::getFFI()->clang_getEnumDeclIntegerType($C);
    }

    /**
     * @param \FFI\CData|null $C CXCursor
     * @return int|null long long
     */
    public function clang_getEnumConstantDeclValue(?\FFI\CData $C): ?int
    {
        return static::getFFI()->clang_getEnumConstantDeclValue($C);
    }

    /**
     * @param \FFI\CData|null $C CXCursor
     * @return int|null unsigned long long
     */
    public function clang_getEnumConstantDeclUnsignedValue(?\FFI\CData $C): ?int
    {
        return static::getFFI()->clang_getEnumConstantDeclUnsignedValue($C);
    }

    /**
     * @param \FFI\CData|null $C CXCursor
     * @return int|null int
     */
    public function clang_getFieldDeclBitWidth(?\FFI\CData $C): ?int
    {
        return static::getFFI()->clang_getFieldDeclBitWidth($C);
    }

    /**
     * @param \FFI\CData|null $C CXCursor
     * @return int|null int
     */
    public function clang_Cursor_getNumArguments(?\FFI\CData $C): ?int
    {
        return static::getFFI()->clang_Cursor_getNumArguments($C);
    }

    /**
     * @param \FFI\CData|null $C CXCursor
     * @param int|null $i unsigned
     * @return \FFI\CData|null CXCursor
     */
    public function clang_Cursor_getArgument(?\FFI\CData $C, ?int $i): ?\FFI\CData
    {
        return static::getFFI()->clang_Cursor_getArgument($C, $i);
    }

    /**
     * @param \FFI\CData|null $C CXCursor
     * @return int|null int
     */
    public function clang_Cursor_getNumTemplateArguments(?\FFI\CData $C): ?int
    {
        return static::getFFI()->clang_Cursor_getNumTemplateArguments($C);
    }

    /**
     * @param \FFI\CData|null $C CXCursor
     * @param int|null $I unsigned
     * @return int enum CXTemplateArgumentKind
     */
    public function clang_Cursor_getTemplateArgumentKind(?\FFI\CData $C, ?int $I): int
    {
        return static::getFFI()->clang_Cursor_getTemplateArgumentKind($C, $I);
    }

    /**
     * @param \FFI\CData|null $C CXCursor
     * @param int|null $I unsigned
     * @return \FFI\CData|null CXType
     */
    public function clang_Cursor_getTemplateArgumentType(?\FFI\CData $C, ?int $I): ?\FFI\CData
    {
        return static::getFFI()->clang_Cursor_getTemplateArgumentType($C, $I);
    }

    /**
     * @param \FFI\CData|null $C CXCursor
     * @param int|null $I unsigned
     * @return int|null long long
     */
    public function clang_Cursor_getTemplateArgumentValue(?\FFI\CData $C, ?int $I): ?int
    {
        return static::getFFI()->clang_Cursor_getTemplateArgumentValue($C, $I);
    }

    /**
     * @param \FFI\CData|null $C CXCursor
     * @param int|null $I unsigned
     * @return int|null unsigned long long
     */
    public function clang_Cursor_getTemplateArgumentUnsignedValue(?\FFI\CData $C, ?int $I): ?int
    {
        return static::getFFI()->clang_Cursor_getTemplateArgumentUnsignedValue($C, $I);
    }

    /**
     * @param \FFI\CData|null $A CXType
     * @param \FFI\CData|null $B CXType
     * @return int|null unsigned
     */
    public function clang_equalTypes(?\FFI\CData $A, ?\FFI\CData $B): ?int
    {
        return static::getFFI()->clang_equalTypes($A, $B);
    }

    /**
     * @param \FFI\CData|null $T CXType
     * @return \FFI\CData|null CXType
     */
    public function clang_getCanonicalType(?\FFI\CData $T): ?\FFI\CData
    {
        return static::getFFI()->clang_getCanonicalType($T);
    }

    /**
     * @param \FFI\CData|null $T CXType
     * @return int|null unsigned
     */
    public function clang_isConstQualifiedType(?\FFI\CData $T): ?int
    {
        return static::getFFI()->clang_isConstQualifiedType($T);
    }

    /**
     * @param \FFI\CData|null $C CXCursor
     * @return int|null unsigned
     */
    public function clang_Cursor_isMacroFunctionLike(?\FFI\CData $C): ?int
    {
        return static::getFFI()->clang_Cursor_isMacroFunctionLike($C);
    }

    /**
     * @param \FFI\CData|null $C CXCursor
     * @return int|null unsigned
     */
    public function clang_Cursor_isMacroBuiltin(?\FFI\CData $C): ?int
    {
        return static::getFFI()->clang_Cursor_isMacroBuiltin($C);
    }

    /**
     * @param \FFI\CData|null $C CXCursor
     * @return int|null unsigned
     */
    public function clang_Cursor_isFunctionInlined(?\FFI\CData $C): ?int
    {
        return static::getFFI()->clang_Cursor_isFunctionInlined($C);
    }

    /**
     * @param \FFI\CData|null $T CXType
     * @return int|null unsigned
     */
    public function clang_isVolatileQualifiedType(?\FFI\CData $T): ?int
    {
        return static::getFFI()->clang_isVolatileQualifiedType($T);
    }

    /**
     * @param \FFI\CData|null $T CXType
     * @return int|null unsigned
     */
    public function clang_isRestrictQualifiedType(?\FFI\CData $T): ?int
    {
        return static::getFFI()->clang_isRestrictQualifiedType($T);
    }

    /**
     * @param \FFI\CData|null $T CXType
     * @return int|null unsigned
     */
    public function clang_getAddressSpace(?\FFI\CData $T): ?int
    {
        return static::getFFI()->clang_getAddressSpace($T);
    }

    /**
     * @param \FFI\CData|null $CT CXType
     * @return \FFI\CData|null CXString
     */
    public function clang_getTypedefName(?\FFI\CData $CT): ?\FFI\CData
    {
        return static::getFFI()->clang_getTypedefName($CT);
    }

    /**
     * @param \FFI\CData|null $T CXType
     * @return \FFI\CData|null CXType
     */
    public function clang_getPointeeType(?\FFI\CData $T): ?\FFI\CData
    {
        return static::getFFI()->clang_getPointeeType($T);
    }

    /**
     * @param \FFI\CData|null $T CXType
     * @return \FFI\CData|null CXCursor
     */
    public function clang_getTypeDeclaration(?\FFI\CData $T): ?\FFI\CData
    {
        return static::getFFI()->clang_getTypeDeclaration($T);
    }

    /**
     * @param \FFI\CData|null $C CXCursor
     * @return \FFI\CData|null CXString
     */
    public function clang_getDeclObjCTypeEncoding(?\FFI\CData $C): ?\FFI\CData
    {
        return static::getFFI()->clang_getDeclObjCTypeEncoding($C);
    }

    /**
     * @param \FFI\CData|null $type CXType
     * @return \FFI\CData|null CXString
     */
    public function clang_Type_getObjCEncoding(?\FFI\CData $type): ?\FFI\CData
    {
        return static::getFFI()->clang_Type_getObjCEncoding($type);
    }

    /**
     * @param int $K enum CXTypeKind
     * @return \FFI\CData|null CXString
     */
    public function clang_getTypeKindSpelling(int $K): ?\FFI\CData
    {
        return static::getFFI()->clang_getTypeKindSpelling($K);
    }

    /**
     * @param \FFI\CData|null $T CXType
     * @return int enum CXCallingConv
     */
    public function clang_getFunctionTypeCallingConv(?\FFI\CData $T): int
    {
        return static::getFFI()->clang_getFunctionTypeCallingConv($T);
    }

    /**
     * @param \FFI\CData|null $T CXType
     * @return \FFI\CData|null CXType
     */
    public function clang_getResultType(?\FFI\CData $T): ?\FFI\CData
    {
        return static::getFFI()->clang_getResultType($T);
    }

    /**
     * @param \FFI\CData|null $T CXType
     * @return int|null int
     */
    public function clang_getExceptionSpecificationType(?\FFI\CData $T): ?int
    {
        return static::getFFI()->clang_getExceptionSpecificationType($T);
    }

    /**
     * @param \FFI\CData|null $T CXType
     * @return int|null int
     */
    public function clang_getNumArgTypes(?\FFI\CData $T): ?int
    {
        return static::getFFI()->clang_getNumArgTypes($T);
    }

    /**
     * @param \FFI\CData|null $T CXType
     * @param int|null $i unsigned
     * @return \FFI\CData|null CXType
     */
    public function clang_getArgType(?\FFI\CData $T, ?int $i): ?\FFI\CData
    {
        return static::getFFI()->clang_getArgType($T, $i);
    }

    /**
     * @param \FFI\CData|null $T CXType
     * @return \FFI\CData|null CXType
     */
    public function clang_Type_getObjCObjectBaseType(?\FFI\CData $T): ?\FFI\CData
    {
        return static::getFFI()->clang_Type_getObjCObjectBaseType($T);
    }

    /**
     * @param \FFI\CData|null $T CXType
     * @return int|null unsigned
     */
    public function clang_Type_getNumObjCProtocolRefs(?\FFI\CData $T): ?int
    {
        return static::getFFI()->clang_Type_getNumObjCProtocolRefs($T);
    }

    /**
     * @param \FFI\CData|null $T CXType
     * @param int|null $i unsigned
     * @return \FFI\CData|null CXCursor
     */
    public function clang_Type_getObjCProtocolDecl(?\FFI\CData $T, ?int $i): ?\FFI\CData
    {
        return static::getFFI()->clang_Type_getObjCProtocolDecl($T, $i);
    }

    /**
     * @param \FFI\CData|null $T CXType
     * @return int|null unsigned
     */
    public function clang_Type_getNumObjCTypeArgs(?\FFI\CData $T): ?int
    {
        return static::getFFI()->clang_Type_getNumObjCTypeArgs($T);
    }

    /**
     * @param \FFI\CData|null $T CXType
     * @param int|null $i unsigned
     * @return \FFI\CData|null CXType
     */
    public function clang_Type_getObjCTypeArg(?\FFI\CData $T, ?int $i): ?\FFI\CData
    {
        return static::getFFI()->clang_Type_getObjCTypeArg($T, $i);
    }

    /**
     * @param \FFI\CData|null $T CXType
     * @return int|null unsigned
     */
    public function clang_isFunctionTypeVariadic(?\FFI\CData $T): ?int
    {
        return static::getFFI()->clang_isFunctionTypeVariadic($T);
    }

    /**
     * @param \FFI\CData|null $C CXCursor
     * @return \FFI\CData|null CXType
     */
    public function clang_getCursorResultType(?\FFI\CData $C): ?\FFI\CData
    {
        return static::getFFI()->clang_getCursorResultType($C);
    }

    /**
     * @param \FFI\CData|null $C CXCursor
     * @return int|null int
     */
    public function clang_getCursorExceptionSpecificationType(?\FFI\CData $C): ?int
    {
        return static::getFFI()->clang_getCursorExceptionSpecificationType($C);
    }

    /**
     * @param \FFI\CData|null $T CXType
     * @return int|null unsigned
     */
    public function clang_isPODType(?\FFI\CData $T): ?int
    {
        return static::getFFI()->clang_isPODType($T);
    }

    /**
     * @param \FFI\CData|null $T CXType
     * @return \FFI\CData|null CXType
     */
    public function clang_getElementType(?\FFI\CData $T): ?\FFI\CData
    {
        return static::getFFI()->clang_getElementType($T);
    }

    /**
     * @param \FFI\CData|null $T CXType
     * @return int|null long long
     */
    public function clang_getNumElements(?\FFI\CData $T): ?int
    {
        return static::getFFI()->clang_getNumElements($T);
    }

    /**
     * @param \FFI\CData|null $T CXType
     * @return \FFI\CData|null CXType
     */
    public function clang_getArrayElementType(?\FFI\CData $T): ?\FFI\CData
    {
        return static::getFFI()->clang_getArrayElementType($T);
    }

    /**
     * @param \FFI\CData|null $T CXType
     * @return int|null long long
     */
    public function clang_getArraySize(?\FFI\CData $T): ?int
    {
        return static::getFFI()->clang_getArraySize($T);
    }

    /**
     * @param \FFI\CData|null $T CXType
     * @return \FFI\CData|null CXType
     */
    public function clang_Type_getNamedType(?\FFI\CData $T): ?\FFI\CData
    {
        return static::getFFI()->clang_Type_getNamedType($T);
    }

    /**
     * @param \FFI\CData|null $T CXType
     * @return int|null unsigned
     */
    public function clang_Type_isTransparentTagTypedef(?\FFI\CData $T): ?int
    {
        return static::getFFI()->clang_Type_isTransparentTagTypedef($T);
    }

    /**
     * @param \FFI\CData|null $T CXType
     * @return int enum CXTypeNullabilityKind
     */
    public function clang_Type_getNullability(?\FFI\CData $T): int
    {
        return static::getFFI()->clang_Type_getNullability($T);
    }

    /**
     * @param \FFI\CData|null $T CXType
     * @return int|null long long
     */
    public function clang_Type_getAlignOf(?\FFI\CData $T): ?int
    {
        return static::getFFI()->clang_Type_getAlignOf($T);
    }

    /**
     * @param \FFI\CData|null $T CXType
     * @return \FFI\CData|null CXType
     */
    public function clang_Type_getClassType(?\FFI\CData $T): ?\FFI\CData
    {
        return static::getFFI()->clang_Type_getClassType($T);
    }

    /**
     * @param \FFI\CData|null $T CXType
     * @return int|null long long
     */
    public function clang_Type_getSizeOf(?\FFI\CData $T): ?int
    {
        return static::getFFI()->clang_Type_getSizeOf($T);
    }

    /**
     * @param \FFI\CData|null $T CXType
     * @param string|null $S const char*
     * @return int|null long long
     */
    public function clang_Type_getOffsetOf(?\FFI\CData $T, ?string $S): ?int
    {
        return static::getFFI()->clang_Type_getOffsetOf($T, $S);
    }

    /**
     * @param \FFI\CData|null $T CXType
     * @return \FFI\CData|null CXType
     */
    public function clang_Type_getModifiedType(?\FFI\CData $T): ?\FFI\CData
    {
        return static::getFFI()->clang_Type_getModifiedType($T);
    }

    /**
     * @param \FFI\CData|null $C CXCursor
     * @return int|null long long
     */
    public function clang_Cursor_getOffsetOfField(?\FFI\CData $C): ?int
    {
        return static::getFFI()->clang_Cursor_getOffsetOfField($C);
    }

    /**
     * @param \FFI\CData|null $C CXCursor
     * @return int|null unsigned
     */
    public function clang_Cursor_isAnonymous(?\FFI\CData $C): ?int
    {
        return static::getFFI()->clang_Cursor_isAnonymous($C);
    }

    /**
     * @param \FFI\CData|null $C CXCursor
     * @return int|null unsigned
     */
    public function clang_Cursor_isAnonymousRecordDecl(?\FFI\CData $C): ?int
    {
        return static::getFFI()->clang_Cursor_isAnonymousRecordDecl($C);
    }

    /**
     * @param \FFI\CData|null $C CXCursor
     * @return int|null unsigned
     */
    public function clang_Cursor_isInlineNamespace(?\FFI\CData $C): ?int
    {
        return static::getFFI()->clang_Cursor_isInlineNamespace($C);
    }

    /**
     * @param \FFI\CData|null $T CXType
     * @return int|null int
     */
    public function clang_Type_getNumTemplateArguments(?\FFI\CData $T): ?int
    {
        return static::getFFI()->clang_Type_getNumTemplateArguments($T);
    }

    /**
     * @param \FFI\CData|null $T CXType
     * @param int|null $i unsigned
     * @return \FFI\CData|null CXType
     */
    public function clang_Type_getTemplateArgumentAsType(?\FFI\CData $T, ?int $i): ?\FFI\CData
    {
        return static::getFFI()->clang_Type_getTemplateArgumentAsType($T, $i);
    }

    /**
     * @param \FFI\CData|null $T CXType
     * @return int enum CXRefQualifierKind
     */
    public function clang_Type_getCXXRefQualifier(?\FFI\CData $T): int
    {
        return static::getFFI()->clang_Type_getCXXRefQualifier($T);
    }

    /**
     * @param \FFI\CData|null $C CXCursor
     * @return int|null unsigned
     */
    public function clang_Cursor_isBitField(?\FFI\CData $C): ?int
    {
        return static::getFFI()->clang_Cursor_isBitField($C);
    }

    /**
     * @param \FFI\CData|null $arg0 CXCursor
     * @return int|null unsigned
     */
    public function clang_isVirtualBase(?\FFI\CData $arg0): ?int
    {
        return static::getFFI()->clang_isVirtualBase($arg0);
    }

    /**
     * @param \FFI\CData|null $arg0 CXCursor
     * @return int enum CX_CXXAccessSpecifier
     */
    public function clang_getCXXAccessSpecifier(?\FFI\CData $arg0): int
    {
        return static::getFFI()->clang_getCXXAccessSpecifier($arg0);
    }

    /**
     * @param \FFI\CData|null $arg0 CXCursor
     * @return int enum CX_StorageClass
     */
    public function clang_Cursor_getStorageClass(?\FFI\CData $arg0): int
    {
        return static::getFFI()->clang_Cursor_getStorageClass($arg0);
    }

    /**
     * @param \FFI\CData|null $cursor CXCursor
     * @return int|null unsigned
     */
    public function clang_getNumOverloadedDecls(?\FFI\CData $cursor): ?int
    {
        return static::getFFI()->clang_getNumOverloadedDecls($cursor);
    }

    /**
     * @param \FFI\CData|null $cursor CXCursor
     * @param int|null $index unsigned
     * @return \FFI\CData|null CXCursor
     */
    public function clang_getOverloadedDecl(?\FFI\CData $cursor, ?int $index): ?\FFI\CData
    {
        return static::getFFI()->clang_getOverloadedDecl($cursor, $index);
    }

    /**
     * @param \FFI\CData|null $arg0 CXCursor
     * @return \FFI\CData|null CXType
     */
    public function clang_getIBOutletCollectionType(?\FFI\CData $arg0): ?\FFI\CData
    {
        return static::getFFI()->clang_getIBOutletCollectionType($arg0);
    }

    /**
     * @param \FFI\CData|null $parent CXCursor
     * @param \FFI\CData|\Closure $visitor enum CXChildVisitResult(CXCursorVisitor*)(CXCursor, CXCursor, void*)
     * @param \FFI\CData|object|string|null $client_data void*
     * @return int|null unsigned
     */
    public function clang_visitChildren(?\FFI\CData $parent, $visitor, $client_data): ?int
    {
        return static::getFFI()->clang_visitChildren($parent, $visitor, $client_data);
    }

    /**
     * @param \FFI\CData|null $arg0 CXCursor
     * @return \FFI\CData|null CXString
     */
    public function clang_getCursorUSR(?\FFI\CData $arg0): ?\FFI\CData
    {
        return static::getFFI()->clang_getCursorUSR($arg0);
    }

    /**
     * @param string|null $class_name const char*
     * @return \FFI\CData|null CXString
     */
    public function clang_constructUSR_ObjCClass(?string $class_name): ?\FFI\CData
    {
        return static::getFFI()->clang_constructUSR_ObjCClass($class_name);
    }

    /**
     * @param string|null $class_name const char*
     * @param string|null $category_name const char*
     * @return \FFI\CData|null CXString
     */
    public function clang_constructUSR_ObjCCategory(?string $class_name, ?string $category_name): ?\FFI\CData
    {
        return static::getFFI()->clang_constructUSR_ObjCCategory($class_name, $category_name);
    }

    /**
     * @param string|null $protocol_name const char*
     * @return \FFI\CData|null CXString
     */
    public function clang_constructUSR_ObjCProtocol(?string $protocol_name): ?\FFI\CData
    {
        return static::getFFI()->clang_constructUSR_ObjCProtocol($protocol_name);
    }

    /**
     * @param string|null $name const char*
     * @param \FFI\CData|null $classUSR CXString
     * @return \FFI\CData|null CXString
     */
    public function clang_constructUSR_ObjCIvar(?string $name, ?\FFI\CData $classUSR): ?\FFI\CData
    {
        return static::getFFI()->clang_constructUSR_ObjCIvar($name, $classUSR);
    }

    /**
     * @param string|null $name const char*
     * @param int|null $isInstanceMethod unsigned
     * @param \FFI\CData|null $classUSR CXString
     * @return \FFI\CData|null CXString
     */
    public function clang_constructUSR_ObjCMethod(?string $name, ?int $isInstanceMethod, ?\FFI\CData $classUSR): ?\FFI\CData
    {
        return static::getFFI()->clang_constructUSR_ObjCMethod($name, $isInstanceMethod, $classUSR);
    }

    /**
     * @param string|null $property const char*
     * @param \FFI\CData|null $classUSR CXString
     * @return \FFI\CData|null CXString
     */
    public function clang_constructUSR_ObjCProperty(?string $property, ?\FFI\CData $classUSR): ?\FFI\CData
    {
        return static::getFFI()->clang_constructUSR_ObjCProperty($property, $classUSR);
    }

    /**
     * @param \FFI\CData|null $arg0 CXCursor
     * @return \FFI\CData|null CXString
     */
    public function clang_getCursorSpelling(?\FFI\CData $arg0): ?\FFI\CData
    {
        return static::getFFI()->clang_getCursorSpelling($arg0);
    }

    /**
     * @param \FFI\CData|null $arg0 CXCursor
     * @param int|null $pieceIndex unsigned
     * @param int|null $options unsigned
     * @return \FFI\CData|null CXSourceRange
     */
    public function clang_Cursor_getSpellingNameRange(?\FFI\CData $arg0, ?int $pieceIndex, ?int $options): ?\FFI\CData
    {
        return static::getFFI()->clang_Cursor_getSpellingNameRange($arg0, $pieceIndex, $options);
    }

    /**
     * @param \FFI\CData|object|string|null $Policy void*
     * @param int $Property enum CXPrintingPolicyProperty
     * @return int|null unsigned
     */
    public function clang_PrintingPolicy_getProperty($Policy, int $Property): ?int
    {
        return static::getFFI()->clang_PrintingPolicy_getProperty($Policy, $Property);
    }

    /**
     * @param \FFI\CData|object|string|null $Policy void*
     * @param int $Property enum CXPrintingPolicyProperty
     * @param int|null $Value unsigned
     */
    public function clang_PrintingPolicy_setProperty($Policy, int $Property, ?int $Value): void
    {
        static::getFFI()->clang_PrintingPolicy_setProperty($Policy, $Property, $Value);
    }

    /**
     * @param \FFI\CData|null $arg0 CXCursor
     * @return \FFI\CData|object|string|null void*
     */
    public function clang_getCursorPrintingPolicy(?\FFI\CData $arg0)
    {
        return static::getFFI()->clang_getCursorPrintingPolicy($arg0);
    }

    /**
     * @param \FFI\CData|object|string|null $Policy void*
     */
    public function clang_PrintingPolicy_dispose($Policy): void
    {
        static::getFFI()->clang_PrintingPolicy_dispose($Policy);
    }

    /**
     * @param \FFI\CData|null $Cursor CXCursor
     * @param \FFI\CData|object|string|null $Policy void*
     * @return \FFI\CData|null CXString
     */
    public function clang_getCursorPrettyPrinted(?\FFI\CData $Cursor, $Policy): ?\FFI\CData
    {
        return static::getFFI()->clang_getCursorPrettyPrinted($Cursor, $Policy);
    }

    /**
     * @param \FFI\CData|null $arg0 CXCursor
     * @return \FFI\CData|null CXString
     */
    public function clang_getCursorDisplayName(?\FFI\CData $arg0): ?\FFI\CData
    {
        return static::getFFI()->clang_getCursorDisplayName($arg0);
    }

    /**
     * @param \FFI\CData|null $arg0 CXCursor
     * @return \FFI\CData|null CXCursor
     */
    public function clang_getCursorReferenced(?\FFI\CData $arg0): ?\FFI\CData
    {
        return static::getFFI()->clang_getCursorReferenced($arg0);
    }

    /**
     * @param \FFI\CData|null $arg0 CXCursor
     * @return \FFI\CData|null CXCursor
     */
    public function clang_getCursorDefinition(?\FFI\CData $arg0): ?\FFI\CData
    {
        return static::getFFI()->clang_getCursorDefinition($arg0);
    }

    /**
     * @param \FFI\CData|null $arg0 CXCursor
     * @return int|null unsigned
     */
    public function clang_isCursorDefinition(?\FFI\CData $arg0): ?int
    {
        return static::getFFI()->clang_isCursorDefinition($arg0);
    }

    /**
     * @param \FFI\CData|null $arg0 CXCursor
     * @return \FFI\CData|null CXCursor
     */
    public function clang_getCanonicalCursor(?\FFI\CData $arg0): ?\FFI\CData
    {
        return static::getFFI()->clang_getCanonicalCursor($arg0);
    }

    /**
     * @param \FFI\CData|null $arg0 CXCursor
     * @return int|null int
     */
    public function clang_Cursor_getObjCSelectorIndex(?\FFI\CData $arg0): ?int
    {
        return static::getFFI()->clang_Cursor_getObjCSelectorIndex($arg0);
    }

    /**
     * @param \FFI\CData|null $C CXCursor
     * @return int|null int
     */
    public function clang_Cursor_isDynamicCall(?\FFI\CData $C): ?int
    {
        return static::getFFI()->clang_Cursor_isDynamicCall($C);
    }

    /**
     * @param \FFI\CData|null $C CXCursor
     * @return \FFI\CData|null CXType
     */
    public function clang_Cursor_getReceiverType(?\FFI\CData $C): ?\FFI\CData
    {
        return static::getFFI()->clang_Cursor_getReceiverType($C);
    }

    /**
     * @param \FFI\CData|null $C CXCursor
     * @param int|null $reserved unsigned
     * @return int|null unsigned
     */
    public function clang_Cursor_getObjCPropertyAttributes(?\FFI\CData $C, ?int $reserved): ?int
    {
        return static::getFFI()->clang_Cursor_getObjCPropertyAttributes($C, $reserved);
    }

    /**
     * @param \FFI\CData|null $C CXCursor
     * @return \FFI\CData|null CXString
     */
    public function clang_Cursor_getObjCPropertyGetterName(?\FFI\CData $C): ?\FFI\CData
    {
        return static::getFFI()->clang_Cursor_getObjCPropertyGetterName($C);
    }

    /**
     * @param \FFI\CData|null $C CXCursor
     * @return \FFI\CData|null CXString
     */
    public function clang_Cursor_getObjCPropertySetterName(?\FFI\CData $C): ?\FFI\CData
    {
        return static::getFFI()->clang_Cursor_getObjCPropertySetterName($C);
    }

    /**
     * @param \FFI\CData|null $C CXCursor
     * @return int|null unsigned
     */
    public function clang_Cursor_getObjCDeclQualifiers(?\FFI\CData $C): ?int
    {
        return static::getFFI()->clang_Cursor_getObjCDeclQualifiers($C);
    }

    /**
     * @param \FFI\CData|null $C CXCursor
     * @return int|null unsigned
     */
    public function clang_Cursor_isObjCOptional(?\FFI\CData $C): ?int
    {
        return static::getFFI()->clang_Cursor_isObjCOptional($C);
    }

    /**
     * @param \FFI\CData|null $C CXCursor
     * @return int|null unsigned
     */
    public function clang_Cursor_isVariadic(?\FFI\CData $C): ?int
    {
        return static::getFFI()->clang_Cursor_isVariadic($C);
    }

    /**
     * @param \FFI\CData|null $C CXCursor
     * @param \FFI\CData|null $language CXString*
     * @param \FFI\CData|null $definedIn CXString*
     * @param \FFI\CData|null $isGenerated unsigned*
     * @return int|null unsigned
     */
    public function clang_Cursor_isExternalSymbol(?\FFI\CData $C, ?\FFI\CData $language, ?\FFI\CData $definedIn, ?\FFI\CData $isGenerated): ?int
    {
        return static::getFFI()->clang_Cursor_isExternalSymbol($C, $language, $definedIn, $isGenerated);
    }

    /**
     * @param \FFI\CData|null $C CXCursor
     * @return \FFI\CData|null CXSourceRange
     */
    public function clang_Cursor_getCommentRange(?\FFI\CData $C): ?\FFI\CData
    {
        return static::getFFI()->clang_Cursor_getCommentRange($C);
    }

    /**
     * @param \FFI\CData|null $C CXCursor
     * @return \FFI\CData|null CXString
     */
    public function clang_Cursor_getRawCommentText(?\FFI\CData $C): ?\FFI\CData
    {
        return static::getFFI()->clang_Cursor_getRawCommentText($C);
    }

    /**
     * @param \FFI\CData|null $C CXCursor
     * @return \FFI\CData|null CXString
     */
    public function clang_Cursor_getBriefCommentText(?\FFI\CData $C): ?\FFI\CData
    {
        return static::getFFI()->clang_Cursor_getBriefCommentText($C);
    }

    /**
     * @param \FFI\CData|null $arg0 CXCursor
     * @return \FFI\CData|null CXString
     */
    public function clang_Cursor_getMangling(?\FFI\CData $arg0): ?\FFI\CData
    {
        return static::getFFI()->clang_Cursor_getMangling($arg0);
    }

    /**
     * @param \FFI\CData|null $arg0 CXCursor
     * @return \FFI\CData|null CXStringSet*
     */
    public function clang_Cursor_getCXXManglings(?\FFI\CData $arg0): ?\FFI\CData
    {
        return static::getFFI()->clang_Cursor_getCXXManglings($arg0);
    }

    /**
     * @param \FFI\CData|null $arg0 CXCursor
     * @return \FFI\CData|null CXStringSet*
     */
    public function clang_Cursor_getObjCManglings(?\FFI\CData $arg0): ?\FFI\CData
    {
        return static::getFFI()->clang_Cursor_getObjCManglings($arg0);
    }

    /**
     * @param \FFI\CData|null $C CXCursor
     * @return \FFI\CData|object|string|null void*
     */
    public function clang_Cursor_getModule(?\FFI\CData $C)
    {
        return static::getFFI()->clang_Cursor_getModule($C);
    }

    /**
     * @param \FFI\CData|null $arg0 struct CXTranslationUnitImpl*
     * @param \FFI\CData|object|string|null $arg1 void*
     * @return \FFI\CData|object|string|null void*
     */
    public function clang_getModuleForFile(?\FFI\CData $arg0, $arg1)
    {
        return static::getFFI()->clang_getModuleForFile($arg0, $arg1);
    }

    /**
     * @param \FFI\CData|object|string|null $Module void*
     * @return \FFI\CData|object|string|null void*
     */
    public function clang_Module_getASTFile($Module)
    {
        return static::getFFI()->clang_Module_getASTFile($Module);
    }

    /**
     * @param \FFI\CData|object|string|null $Module void*
     * @return \FFI\CData|object|string|null void*
     */
    public function clang_Module_getParent($Module)
    {
        return static::getFFI()->clang_Module_getParent($Module);
    }

    /**
     * @param \FFI\CData|object|string|null $Module void*
     * @return \FFI\CData|null CXString
     */
    public function clang_Module_getName($Module): ?\FFI\CData
    {
        return static::getFFI()->clang_Module_getName($Module);
    }

    /**
     * @param \FFI\CData|object|string|null $Module void*
     * @return \FFI\CData|null CXString
     */
    public function clang_Module_getFullName($Module): ?\FFI\CData
    {
        return static::getFFI()->clang_Module_getFullName($Module);
    }

    /**
     * @param \FFI\CData|object|string|null $Module void*
     * @return int|null int
     */
    public function clang_Module_isSystem($Module): ?int
    {
        return static::getFFI()->clang_Module_isSystem($Module);
    }

    /**
     * @param \FFI\CData|null $arg0 struct CXTranslationUnitImpl*
     * @param \FFI\CData|object|string|null $Module void*
     * @return int|null unsigned
     */
    public function clang_Module_getNumTopLevelHeaders(?\FFI\CData $arg0, $Module): ?int
    {
        return static::getFFI()->clang_Module_getNumTopLevelHeaders($arg0, $Module);
    }

    /**
     * @param \FFI\CData|null $arg0 struct CXTranslationUnitImpl*
     * @param \FFI\CData|object|string|null $Module void*
     * @param int|null $Index unsigned
     * @return \FFI\CData|object|string|null void*
     */
    public function clang_Module_getTopLevelHeader(?\FFI\CData $arg0, $Module, ?int $Index)
    {
        return static::getFFI()->clang_Module_getTopLevelHeader($arg0, $Module, $Index);
    }

    /**
     * @param \FFI\CData|null $C CXCursor
     * @return int|null unsigned
     */
    public function clang_CXXConstructor_isConvertingConstructor(?\FFI\CData $C): ?int
    {
        return static::getFFI()->clang_CXXConstructor_isConvertingConstructor($C);
    }

    /**
     * @param \FFI\CData|null $C CXCursor
     * @return int|null unsigned
     */
    public function clang_CXXConstructor_isCopyConstructor(?\FFI\CData $C): ?int
    {
        return static::getFFI()->clang_CXXConstructor_isCopyConstructor($C);
    }

    /**
     * @param \FFI\CData|null $C CXCursor
     * @return int|null unsigned
     */
    public function clang_CXXConstructor_isDefaultConstructor(?\FFI\CData $C): ?int
    {
        return static::getFFI()->clang_CXXConstructor_isDefaultConstructor($C);
    }

    /**
     * @param \FFI\CData|null $C CXCursor
     * @return int|null unsigned
     */
    public function clang_CXXConstructor_isMoveConstructor(?\FFI\CData $C): ?int
    {
        return static::getFFI()->clang_CXXConstructor_isMoveConstructor($C);
    }

    /**
     * @param \FFI\CData|null $C CXCursor
     * @return int|null unsigned
     */
    public function clang_CXXField_isMutable(?\FFI\CData $C): ?int
    {
        return static::getFFI()->clang_CXXField_isMutable($C);
    }

    /**
     * @param \FFI\CData|null $C CXCursor
     * @return int|null unsigned
     */
    public function clang_CXXMethod_isDefaulted(?\FFI\CData $C): ?int
    {
        return static::getFFI()->clang_CXXMethod_isDefaulted($C);
    }

    /**
     * @param \FFI\CData|null $C CXCursor
     * @return int|null unsigned
     */
    public function clang_CXXMethod_isPureVirtual(?\FFI\CData $C): ?int
    {
        return static::getFFI()->clang_CXXMethod_isPureVirtual($C);
    }

    /**
     * @param \FFI\CData|null $C CXCursor
     * @return int|null unsigned
     */
    public function clang_CXXMethod_isStatic(?\FFI\CData $C): ?int
    {
        return static::getFFI()->clang_CXXMethod_isStatic($C);
    }

    /**
     * @param \FFI\CData|null $C CXCursor
     * @return int|null unsigned
     */
    public function clang_CXXMethod_isVirtual(?\FFI\CData $C): ?int
    {
        return static::getFFI()->clang_CXXMethod_isVirtual($C);
    }

    /**
     * @param \FFI\CData|null $C CXCursor
     * @return int|null unsigned
     */
    public function clang_CXXRecord_isAbstract(?\FFI\CData $C): ?int
    {
        return static::getFFI()->clang_CXXRecord_isAbstract($C);
    }

    /**
     * @param \FFI\CData|null $C CXCursor
     * @return int|null unsigned
     */
    public function clang_EnumDecl_isScoped(?\FFI\CData $C): ?int
    {
        return static::getFFI()->clang_EnumDecl_isScoped($C);
    }

    /**
     * @param \FFI\CData|null $C CXCursor
     * @return int|null unsigned
     */
    public function clang_CXXMethod_isConst(?\FFI\CData $C): ?int
    {
        return static::getFFI()->clang_CXXMethod_isConst($C);
    }

    /**
     * @param \FFI\CData|null $C CXCursor
     * @return int enum CXCursorKind
     */
    public function clang_getTemplateCursorKind(?\FFI\CData $C): int
    {
        return static::getFFI()->clang_getTemplateCursorKind($C);
    }

    /**
     * @param \FFI\CData|null $C CXCursor
     * @return \FFI\CData|null CXCursor
     */
    public function clang_getSpecializedCursorTemplate(?\FFI\CData $C): ?\FFI\CData
    {
        return static::getFFI()->clang_getSpecializedCursorTemplate($C);
    }

    /**
     * @param \FFI\CData|null $C CXCursor
     * @param int|null $NameFlags unsigned
     * @param int|null $PieceIndex unsigned
     * @return \FFI\CData|null CXSourceRange
     */
    public function clang_getCursorReferenceNameRange(?\FFI\CData $C, ?int $NameFlags, ?int $PieceIndex): ?\FFI\CData
    {
        return static::getFFI()->clang_getCursorReferenceNameRange($C, $NameFlags, $PieceIndex);
    }

    /**
     * @param \FFI\CData|null $TU struct CXTranslationUnitImpl*
     * @param \FFI\CData|null $Location CXSourceLocation
     * @return \FFI\CData|null CXToken*
     */
    public function clang_getToken(?\FFI\CData $TU, ?\FFI\CData $Location): ?\FFI\CData
    {
        return static::getFFI()->clang_getToken($TU, $Location);
    }

    /**
     * @param \FFI\CData|null $arg0 CXToken
     * @return int CXTokenKind
     */
    public function clang_getTokenKind(?\FFI\CData $arg0): int
    {
        return static::getFFI()->clang_getTokenKind($arg0);
    }

    /**
     * @param \FFI\CData|null $arg0 struct CXTranslationUnitImpl*
     * @param \FFI\CData|null $arg1 CXToken
     * @return \FFI\CData|null CXString
     */
    public function clang_getTokenSpelling(?\FFI\CData $arg0, ?\FFI\CData $arg1): ?\FFI\CData
    {
        return static::getFFI()->clang_getTokenSpelling($arg0, $arg1);
    }

    /**
     * @param \FFI\CData|null $arg0 struct CXTranslationUnitImpl*
     * @param \FFI\CData|null $arg1 CXToken
     * @return \FFI\CData|null CXSourceLocation
     */
    public function clang_getTokenLocation(?\FFI\CData $arg0, ?\FFI\CData $arg1): ?\FFI\CData
    {
        return static::getFFI()->clang_getTokenLocation($arg0, $arg1);
    }

    /**
     * @param \FFI\CData|null $arg0 struct CXTranslationUnitImpl*
     * @param \FFI\CData|null $arg1 CXToken
     * @return \FFI\CData|null CXSourceRange
     */
    public function clang_getTokenExtent(?\FFI\CData $arg0, ?\FFI\CData $arg1): ?\FFI\CData
    {
        return static::getFFI()->clang_getTokenExtent($arg0, $arg1);
    }

    /**
     * @param \FFI\CData|null $TU struct CXTranslationUnitImpl*
     * @param \FFI\CData|null $Range CXSourceRange
     * @param \FFI\CData|null $Tokens CXToken**
     * @param \FFI\CData|null $NumTokens unsigned*
     */
    public function clang_tokenize(?\FFI\CData $TU, ?\FFI\CData $Range, ?\FFI\CData $Tokens, ?\FFI\CData $NumTokens): void
    {
        static::getFFI()->clang_tokenize($TU, $Range, $Tokens, $NumTokens);
    }

    /**
     * @param \FFI\CData|null $TU struct CXTranslationUnitImpl*
     * @param \FFI\CData|null $Tokens CXToken*
     * @param int|null $NumTokens unsigned
     * @param \FFI\CData|null $Cursors CXCursor*
     */
    public function clang_annotateTokens(?\FFI\CData $TU, ?\FFI\CData $Tokens, ?int $NumTokens, ?\FFI\CData $Cursors): void
    {
        static::getFFI()->clang_annotateTokens($TU, $Tokens, $NumTokens, $Cursors);
    }

    /**
     * @param \FFI\CData|null $TU struct CXTranslationUnitImpl*
     * @param \FFI\CData|null $Tokens CXToken*
     * @param int|null $NumTokens unsigned
     */
    public function clang_disposeTokens(?\FFI\CData $TU, ?\FFI\CData $Tokens, ?int $NumTokens): void
    {
        static::getFFI()->clang_disposeTokens($TU, $Tokens, $NumTokens);
    }

    /**
     * @param int $Kind enum CXCursorKind
     * @return \FFI\CData|null CXString
     */
    public function clang_getCursorKindSpelling(int $Kind): ?\FFI\CData
    {
        return static::getFFI()->clang_getCursorKindSpelling($Kind);
    }

    /**
     * @param \FFI\CData|null $arg0 CXCursor
     * @param \FFI\CData|null $startBuf char**
     * @param \FFI\CData|null $endBuf char**
     * @param \FFI\CData|null $startLine unsigned*
     * @param \FFI\CData|null $startColumn unsigned*
     * @param \FFI\CData|null $endLine unsigned*
     * @param \FFI\CData|null $endColumn unsigned*
     */
    public function clang_getDefinitionSpellingAndExtent(?\FFI\CData $arg0, ?\FFI\CData $startBuf, ?\FFI\CData $endBuf, ?\FFI\CData $startLine, ?\FFI\CData $startColumn, ?\FFI\CData $endLine, ?\FFI\CData $endColumn): void
    {
        static::getFFI()->clang_getDefinitionSpellingAndExtent($arg0, $startBuf, $endBuf, $startLine, $startColumn, $endLine, $endColumn);
    }

    public function clang_enableStackTraces(): void
    {
        static::getFFI()->clang_enableStackTraces();
    }

    /**
     * @param \FFI\CData|\Closure $fn void(*)(void*)
     * @param \FFI\CData|object|string|null $user_data void*
     * @param int|null $stack_size unsigned
     */
    public function clang_executeOnThread($fn, $user_data, ?int $stack_size): void
    {
        static::getFFI()->clang_executeOnThread($fn, $user_data, $stack_size);
    }

    /**
     * @param \FFI\CData|object|string|null $completion_string void*
     * @param int|null $chunk_number unsigned
     * @return int enum CXCompletionChunkKind
     */
    public function clang_getCompletionChunkKind($completion_string, ?int $chunk_number): int
    {
        return static::getFFI()->clang_getCompletionChunkKind($completion_string, $chunk_number);
    }

    /**
     * @param \FFI\CData|object|string|null $completion_string void*
     * @param int|null $chunk_number unsigned
     * @return \FFI\CData|null CXString
     */
    public function clang_getCompletionChunkText($completion_string, ?int $chunk_number): ?\FFI\CData
    {
        return static::getFFI()->clang_getCompletionChunkText($completion_string, $chunk_number);
    }

    /**
     * @param \FFI\CData|object|string|null $completion_string void*
     * @param int|null $chunk_number unsigned
     * @return \FFI\CData|object|string|null void*
     */
    public function clang_getCompletionChunkCompletionString($completion_string, ?int $chunk_number)
    {
        return static::getFFI()->clang_getCompletionChunkCompletionString($completion_string, $chunk_number);
    }

    /**
     * @param \FFI\CData|object|string|null $completion_string void*
     * @return int|null unsigned
     */
    public function clang_getNumCompletionChunks($completion_string): ?int
    {
        return static::getFFI()->clang_getNumCompletionChunks($completion_string);
    }

    /**
     * @param \FFI\CData|object|string|null $completion_string void*
     * @return int|null unsigned
     */
    public function clang_getCompletionPriority($completion_string): ?int
    {
        return static::getFFI()->clang_getCompletionPriority($completion_string);
    }

    /**
     * @param \FFI\CData|object|string|null $completion_string void*
     * @return int enum CXAvailabilityKind
     */
    public function clang_getCompletionAvailability($completion_string): int
    {
        return static::getFFI()->clang_getCompletionAvailability($completion_string);
    }

    /**
     * @param \FFI\CData|object|string|null $completion_string void*
     * @return int|null unsigned
     */
    public function clang_getCompletionNumAnnotations($completion_string): ?int
    {
        return static::getFFI()->clang_getCompletionNumAnnotations($completion_string);
    }

    /**
     * @param \FFI\CData|object|string|null $completion_string void*
     * @param int|null $annotation_number unsigned
     * @return \FFI\CData|null CXString
     */
    public function clang_getCompletionAnnotation($completion_string, ?int $annotation_number): ?\FFI\CData
    {
        return static::getFFI()->clang_getCompletionAnnotation($completion_string, $annotation_number);
    }

    /**
     * @param \FFI\CData|object|string|null $completion_string void*
     * @param \FFI\CData|null $kind enum CXCursorKind*
     * @return \FFI\CData|null CXString
     */
    public function clang_getCompletionParent($completion_string, ?\FFI\CData $kind): ?\FFI\CData
    {
        return static::getFFI()->clang_getCompletionParent($completion_string, $kind);
    }

    /**
     * @param \FFI\CData|object|string|null $completion_string void*
     * @return \FFI\CData|null CXString
     */
    public function clang_getCompletionBriefComment($completion_string): ?\FFI\CData
    {
        return static::getFFI()->clang_getCompletionBriefComment($completion_string);
    }

    /**
     * @param \FFI\CData|null $cursor CXCursor
     * @return \FFI\CData|object|string|null void*
     */
    public function clang_getCursorCompletionString(?\FFI\CData $cursor)
    {
        return static::getFFI()->clang_getCursorCompletionString($cursor);
    }

    /**
     * @param \FFI\CData|null $results CXCodeCompleteResults*
     * @param int|null $completion_index unsigned
     * @return int|null unsigned
     */
    public function clang_getCompletionNumFixIts(?\FFI\CData $results, ?int $completion_index): ?int
    {
        return static::getFFI()->clang_getCompletionNumFixIts($results, $completion_index);
    }

    /**
     * @param \FFI\CData|null $results CXCodeCompleteResults*
     * @param int|null $completion_index unsigned
     * @param int|null $fixit_index unsigned
     * @param \FFI\CData|null $replacement_range CXSourceRange*
     * @return \FFI\CData|null CXString
     */
    public function clang_getCompletionFixIt(?\FFI\CData $results, ?int $completion_index, ?int $fixit_index, ?\FFI\CData $replacement_range): ?\FFI\CData
    {
        return static::getFFI()->clang_getCompletionFixIt($results, $completion_index, $fixit_index, $replacement_range);
    }

    /**
     * @return int|null unsigned
     */
    public function clang_defaultCodeCompleteOptions(): ?int
    {
        return static::getFFI()->clang_defaultCodeCompleteOptions();
    }

    /**
     * @param \FFI\CData|null $TU struct CXTranslationUnitImpl*
     * @param string|null $complete_filename const char*
     * @param int|null $complete_line unsigned
     * @param int|null $complete_column unsigned
     * @param \FFI\CData|null $unsaved_files struct CXUnsavedFile*
     * @param int|null $num_unsaved_files unsigned
     * @param int|null $options unsigned
     * @return \FFI\CData|null CXCodeCompleteResults*
     */
    public function clang_codeCompleteAt(?\FFI\CData $TU, ?string $complete_filename, ?int $complete_line, ?int $complete_column, ?\FFI\CData $unsaved_files, ?int $num_unsaved_files, ?int $options): ?\FFI\CData
    {
        return static::getFFI()->clang_codeCompleteAt($TU, $complete_filename, $complete_line, $complete_column, $unsaved_files, $num_unsaved_files, $options);
    }

    /**
     * @param \FFI\CData|null $Results CXCompletionResult*
     * @param int|null $NumResults unsigned
     */
    public function clang_sortCodeCompletionResults(?\FFI\CData $Results, ?int $NumResults): void
    {
        static::getFFI()->clang_sortCodeCompletionResults($Results, $NumResults);
    }

    /**
     * @param \FFI\CData|null $Results CXCodeCompleteResults*
     */
    public function clang_disposeCodeCompleteResults(?\FFI\CData $Results): void
    {
        static::getFFI()->clang_disposeCodeCompleteResults($Results);
    }

    /**
     * @param \FFI\CData|null $Results CXCodeCompleteResults*
     * @return int|null unsigned
     */
    public function clang_codeCompleteGetNumDiagnostics(?\FFI\CData $Results): ?int
    {
        return static::getFFI()->clang_codeCompleteGetNumDiagnostics($Results);
    }

    /**
     * @param \FFI\CData|null $Results CXCodeCompleteResults*
     * @param int|null $Index unsigned
     * @return \FFI\CData|object|string|null void*
     */
    public function clang_codeCompleteGetDiagnostic(?\FFI\CData $Results, ?int $Index)
    {
        return static::getFFI()->clang_codeCompleteGetDiagnostic($Results, $Index);
    }

    /**
     * @param \FFI\CData|null $Results CXCodeCompleteResults*
     * @return int|null unsigned long long
     */
    public function clang_codeCompleteGetContexts(?\FFI\CData $Results): ?int
    {
        return static::getFFI()->clang_codeCompleteGetContexts($Results);
    }

    /**
     * @param \FFI\CData|null $Results CXCodeCompleteResults*
     * @param \FFI\CData|null $IsIncomplete unsigned*
     * @return int enum CXCursorKind
     */
    public function clang_codeCompleteGetContainerKind(?\FFI\CData $Results, ?\FFI\CData $IsIncomplete): int
    {
        return static::getFFI()->clang_codeCompleteGetContainerKind($Results, $IsIncomplete);
    }

    /**
     * @param \FFI\CData|null $Results CXCodeCompleteResults*
     * @return \FFI\CData|null CXString
     */
    public function clang_codeCompleteGetContainerUSR(?\FFI\CData $Results): ?\FFI\CData
    {
        return static::getFFI()->clang_codeCompleteGetContainerUSR($Results);
    }

    /**
     * @param \FFI\CData|null $Results CXCodeCompleteResults*
     * @return \FFI\CData|null CXString
     */
    public function clang_codeCompleteGetObjCSelector(?\FFI\CData $Results): ?\FFI\CData
    {
        return static::getFFI()->clang_codeCompleteGetObjCSelector($Results);
    }

    /**
     * @return \FFI\CData|null CXString
     */
    public function clang_getClangVersion(): ?\FFI\CData
    {
        return static::getFFI()->clang_getClangVersion();
    }

    /**
     * @param int|null $isEnabled unsigned
     */
    public function clang_toggleCrashRecovery(?int $isEnabled): void
    {
        static::getFFI()->clang_toggleCrashRecovery($isEnabled);
    }

    /**
     * @param \FFI\CData|null $tu struct CXTranslationUnitImpl*
     * @param \FFI\CData|\Closure $visitor void(CXInclusionVisitor*)(void*, CXSourceLocation*, unsigned, void*)
     * @param \FFI\CData|object|string|null $client_data void*
     */
    public function clang_getInclusions(?\FFI\CData $tu, $visitor, $client_data): void
    {
        static::getFFI()->clang_getInclusions($tu, $visitor, $client_data);
    }

    /**
     * @param \FFI\CData|null $C CXCursor
     * @return \FFI\CData|object|string|null void*
     */
    public function clang_Cursor_Evaluate(?\FFI\CData $C)
    {
        return static::getFFI()->clang_Cursor_Evaluate($C);
    }

    /**
     * @param \FFI\CData|object|string|null $E void*
     * @return int CXEvalResultKind
     */
    public function clang_EvalResult_getKind($E): int
    {
        return static::getFFI()->clang_EvalResult_getKind($E);
    }

    /**
     * @param \FFI\CData|object|string|null $E void*
     * @return int|null int
     */
    public function clang_EvalResult_getAsInt($E): ?int
    {
        return static::getFFI()->clang_EvalResult_getAsInt($E);
    }

    /**
     * @param \FFI\CData|object|string|null $E void*
     * @return int|null long long
     */
    public function clang_EvalResult_getAsLongLong($E): ?int
    {
        return static::getFFI()->clang_EvalResult_getAsLongLong($E);
    }

    /**
     * @param \FFI\CData|object|string|null $E void*
     * @return int|null unsigned
     */
    public function clang_EvalResult_isUnsignedInt($E): ?int
    {
        return static::getFFI()->clang_EvalResult_isUnsignedInt($E);
    }

    /**
     * @param \FFI\CData|object|string|null $E void*
     * @return int|null unsigned long long
     */
    public function clang_EvalResult_getAsUnsigned($E): ?int
    {
        return static::getFFI()->clang_EvalResult_getAsUnsigned($E);
    }

    /**
     * @param \FFI\CData|object|string|null $E void*
     * @return float|null double
     */
    public function clang_EvalResult_getAsDouble($E): ?float
    {
        return static::getFFI()->clang_EvalResult_getAsDouble($E);
    }

    /**
     * @param \FFI\CData|object|string|null $E void*
     * @return string|null const char*
     */
    public function clang_EvalResult_getAsStr($E): ?string
    {
        return static::getFFI()->clang_EvalResult_getAsStr($E);
    }

    /**
     * @param \FFI\CData|object|string|null $E void*
     */
    public function clang_EvalResult_dispose($E): void
    {
        static::getFFI()->clang_EvalResult_dispose($E);
    }

    /**
     * @param string|null $path const char*
     * @return \FFI\CData|object|string|null void*
     */
    public function clang_getRemappings(?string $path)
    {
        return static::getFFI()->clang_getRemappings($path);
    }

    /**
     * @param \FFI\CData|null $filePaths char**
     * @param int|null $numFiles unsigned
     * @return \FFI\CData|object|string|null void*
     */
    public function clang_getRemappingsFromFileList(?\FFI\CData $filePaths, ?int $numFiles)
    {
        return static::getFFI()->clang_getRemappingsFromFileList($filePaths, $numFiles);
    }

    /**
     * @param \FFI\CData|object|string|null $arg0 void*
     * @return int|null unsigned
     */
    public function clang_remap_getNumFiles($arg0): ?int
    {
        return static::getFFI()->clang_remap_getNumFiles($arg0);
    }

    /**
     * @param \FFI\CData|object|string|null $arg0 void*
     * @param int|null $index unsigned
     * @param \FFI\CData|null $original CXString*
     * @param \FFI\CData|null $transformed CXString*
     */
    public function clang_remap_getFilenames($arg0, ?int $index, ?\FFI\CData $original, ?\FFI\CData $transformed): void
    {
        static::getFFI()->clang_remap_getFilenames($arg0, $index, $original, $transformed);
    }

    /**
     * @param \FFI\CData|object|string|null $arg0 void*
     */
    public function clang_remap_dispose($arg0): void
    {
        static::getFFI()->clang_remap_dispose($arg0);
    }

    /**
     * @param \FFI\CData|null $cursor CXCursor
     * @param \FFI\CData|object|string|null $file void*
     * @param \FFI\CData|null $visitor CXCursorAndRangeVisitor
     * @return int CXResult
     */
    public function clang_findReferencesInFile(?\FFI\CData $cursor, $file, ?\FFI\CData $visitor): int
    {
        return static::getFFI()->clang_findReferencesInFile($cursor, $file, $visitor);
    }

    /**
     * @param \FFI\CData|null $TU struct CXTranslationUnitImpl*
     * @param \FFI\CData|object|string|null $file void*
     * @param \FFI\CData|null $visitor CXCursorAndRangeVisitor
     * @return int CXResult
     */
    public function clang_findIncludesInFile(?\FFI\CData $TU, $file, ?\FFI\CData $visitor): int
    {
        return static::getFFI()->clang_findIncludesInFile($TU, $file, $visitor);
    }

    /**
     * @param int $arg0 CXIdxEntityKind
     * @return int|null int
     */
    public function clang_index_isEntityObjCContainerKind(int $arg0): ?int
    {
        return static::getFFI()->clang_index_isEntityObjCContainerKind($arg0);
    }

    /**
     * @param \FFI\CData|null $arg0 CXIdxDeclInfo*
     * @return \FFI\CData|null const CXIdxObjCContainerDeclInfo*
     */
    public function clang_index_getObjCContainerDeclInfo(?\FFI\CData $arg0): ?\FFI\CData
    {
        return static::getFFI()->clang_index_getObjCContainerDeclInfo($arg0);
    }

    /**
     * @param \FFI\CData|null $arg0 CXIdxDeclInfo*
     * @return \FFI\CData|null const CXIdxObjCInterfaceDeclInfo*
     */
    public function clang_index_getObjCInterfaceDeclInfo(?\FFI\CData $arg0): ?\FFI\CData
    {
        return static::getFFI()->clang_index_getObjCInterfaceDeclInfo($arg0);
    }

    /**
     * @param \FFI\CData|null $arg0 CXIdxDeclInfo*
     * @return \FFI\CData|null const CXIdxObjCCategoryDeclInfo*
     */
    public function clang_index_getObjCCategoryDeclInfo(?\FFI\CData $arg0): ?\FFI\CData
    {
        return static::getFFI()->clang_index_getObjCCategoryDeclInfo($arg0);
    }

    /**
     * @param \FFI\CData|null $arg0 CXIdxDeclInfo*
     * @return \FFI\CData|null const CXIdxObjCProtocolRefListInfo*
     */
    public function clang_index_getObjCProtocolRefListInfo(?\FFI\CData $arg0): ?\FFI\CData
    {
        return static::getFFI()->clang_index_getObjCProtocolRefListInfo($arg0);
    }

    /**
     * @param \FFI\CData|null $arg0 CXIdxDeclInfo*
     * @return \FFI\CData|null const CXIdxObjCPropertyDeclInfo*
     */
    public function clang_index_getObjCPropertyDeclInfo(?\FFI\CData $arg0): ?\FFI\CData
    {
        return static::getFFI()->clang_index_getObjCPropertyDeclInfo($arg0);
    }

    /**
     * @param \FFI\CData|null $arg0 CXIdxAttrInfo*
     * @return \FFI\CData|null const CXIdxIBOutletCollectionAttrInfo*
     */
    public function clang_index_getIBOutletCollectionAttrInfo(?\FFI\CData $arg0): ?\FFI\CData
    {
        return static::getFFI()->clang_index_getIBOutletCollectionAttrInfo($arg0);
    }

    /**
     * @param \FFI\CData|null $arg0 CXIdxDeclInfo*
     * @return \FFI\CData|null const CXIdxCXXClassDeclInfo*
     */
    public function clang_index_getCXXClassDeclInfo(?\FFI\CData $arg0): ?\FFI\CData
    {
        return static::getFFI()->clang_index_getCXXClassDeclInfo($arg0);
    }

    /**
     * @param \FFI\CData|null $arg0 CXIdxContainerInfo*
     * @return \FFI\CData|object|string|null void*
     */
    public function clang_index_getClientContainer(?\FFI\CData $arg0)
    {
        return static::getFFI()->clang_index_getClientContainer($arg0);
    }

    /**
     * @param \FFI\CData|null $arg0 CXIdxContainerInfo*
     * @param \FFI\CData|object|string|null $arg1 void*
     */
    public function clang_index_setClientContainer(?\FFI\CData $arg0, $arg1): void
    {
        static::getFFI()->clang_index_setClientContainer($arg0, $arg1);
    }

    /**
     * @param \FFI\CData|null $arg0 CXIdxEntityInfo*
     * @return \FFI\CData|object|string|null void*
     */
    public function clang_index_getClientEntity(?\FFI\CData $arg0)
    {
        return static::getFFI()->clang_index_getClientEntity($arg0);
    }

    /**
     * @param \FFI\CData|null $arg0 CXIdxEntityInfo*
     * @param \FFI\CData|object|string|null $arg1 void*
     */
    public function clang_index_setClientEntity(?\FFI\CData $arg0, $arg1): void
    {
        static::getFFI()->clang_index_setClientEntity($arg0, $arg1);
    }

    /**
     * @param \FFI\CData|object|string|null $CIdx void*
     * @return \FFI\CData|object|string|null void*
     */
    public function clang_IndexAction_create($CIdx)
    {
        return static::getFFI()->clang_IndexAction_create($CIdx);
    }

    /**
     * @param \FFI\CData|object|string|null $arg0 void*
     */
    public function clang_IndexAction_dispose($arg0): void
    {
        static::getFFI()->clang_IndexAction_dispose($arg0);
    }

    /**
     * @param \FFI\CData|object|string|null $arg0 void*
     * @param \FFI\CData|object|string|null $client_data void*
     * @param \FFI\CData|null $index_callbacks IndexerCallbacks*
     * @param int|null $index_callbacks_size unsigned
     * @param int|null $index_options unsigned
     * @param string|null $source_filename const char*
     * @param \FFI\CData|null $command_line_args const char**
     * @param int|null $num_command_line_args int
     * @param \FFI\CData|null $unsaved_files struct CXUnsavedFile*
     * @param int|null $num_unsaved_files unsigned
     * @param \FFI\CData|null $out_TU struct CXTranslationUnitImpl**
     * @param int|null $TU_options unsigned
     * @return int|null int
     */
    public function clang_indexSourceFile($arg0, $client_data, ?\FFI\CData $index_callbacks, ?int $index_callbacks_size, ?int $index_options, ?string $source_filename, ?\FFI\CData $command_line_args, ?int $num_command_line_args, ?\FFI\CData $unsaved_files, ?int $num_unsaved_files, ?\FFI\CData $out_TU, ?int $TU_options): ?int
    {
        return static::getFFI()->clang_indexSourceFile($arg0, $client_data, $index_callbacks, $index_callbacks_size, $index_options, $source_filename, $command_line_args, $num_command_line_args, $unsaved_files, $num_unsaved_files, $out_TU, $TU_options);
    }

    /**
     * @param \FFI\CData|object|string|null $arg0 void*
     * @param \FFI\CData|object|string|null $client_data void*
     * @param \FFI\CData|null $index_callbacks IndexerCallbacks*
     * @param int|null $index_callbacks_size unsigned
     * @param int|null $index_options unsigned
     * @param string|null $source_filename const char*
     * @param \FFI\CData|null $command_line_args const char**
     * @param int|null $num_command_line_args int
     * @param \FFI\CData|null $unsaved_files struct CXUnsavedFile*
     * @param int|null $num_unsaved_files unsigned
     * @param \FFI\CData|null $out_TU struct CXTranslationUnitImpl**
     * @param int|null $TU_options unsigned
     * @return int|null int
     */
    public function clang_indexSourceFileFullArgv($arg0, $client_data, ?\FFI\CData $index_callbacks, ?int $index_callbacks_size, ?int $index_options, ?string $source_filename, ?\FFI\CData $command_line_args, ?int $num_command_line_args, ?\FFI\CData $unsaved_files, ?int $num_unsaved_files, ?\FFI\CData $out_TU, ?int $TU_options): ?int
    {
        return static::getFFI()->clang_indexSourceFileFullArgv($arg0, $client_data, $index_callbacks, $index_callbacks_size, $index_options, $source_filename, $command_line_args, $num_command_line_args, $unsaved_files, $num_unsaved_files, $out_TU, $TU_options);
    }

    /**
     * @param \FFI\CData|object|string|null $arg0 void*
     * @param \FFI\CData|object|string|null $client_data void*
     * @param \FFI\CData|null $index_callbacks IndexerCallbacks*
     * @param int|null $index_callbacks_size unsigned
     * @param int|null $index_options unsigned
     * @param \FFI\CData|null $arg5 struct CXTranslationUnitImpl*
     * @return int|null int
     */
    public function clang_indexTranslationUnit($arg0, $client_data, ?\FFI\CData $index_callbacks, ?int $index_callbacks_size, ?int $index_options, ?\FFI\CData $arg5): ?int
    {
        return static::getFFI()->clang_indexTranslationUnit($arg0, $client_data, $index_callbacks, $index_callbacks_size, $index_options, $arg5);
    }

    /**
     * @param \FFI\CData|null $loc CXIdxLoc
     * @param \FFI\CData|object|string|null $indexFile void**
     * @param \FFI\CData|object|string|null $file void**
     * @param \FFI\CData|null $line unsigned*
     * @param \FFI\CData|null $column unsigned*
     * @param \FFI\CData|null $offset unsigned*
     */
    public function clang_indexLoc_getFileLocation(?\FFI\CData $loc, $indexFile, $file, ?\FFI\CData $line, ?\FFI\CData $column, ?\FFI\CData $offset): void
    {
        static::getFFI()->clang_indexLoc_getFileLocation($loc, $indexFile, $file, $line, $column, $offset);
    }

    /**
     * @param \FFI\CData|null $loc CXIdxLoc
     * @return \FFI\CData|null CXSourceLocation
     */
    public function clang_indexLoc_getCXSourceLocation(?\FFI\CData $loc): ?\FFI\CData
    {
        return static::getFFI()->clang_indexLoc_getCXSourceLocation($loc);
    }

    /**
     * @param \FFI\CData|null $T CXType
     * @param \FFI\CData|\Closure $visitor enum CXVisitorResult(CXFieldVisitor*)(CXCursor, void*)
     * @param \FFI\CData|object|string|null $client_data void*
     * @return int|null unsigned
     */
    public function clang_Type_visitFields(?\FFI\CData $T, $visitor, $client_data): ?int
    {
        return static::getFFI()->clang_Type_visitFields($T, $visitor, $client_data);
    }

    /**
     * @param \FFI\CData|null $string CXString*
     * @return string|null const char*
     */
    public function clang_getCString_wrap(?\FFI\CData $string): ?string
    {
        return static::getFFI()->clang_getCString_wrap($string);
    }

    /**
     * @param \FFI\CData|null $string CXString*
     */
    public function clang_disposeString_wrap(?\FFI\CData $string): void
    {
        static::getFFI()->clang_disposeString_wrap($string);
    }

    /**
     * @param \FFI\CData|null $cursor CXCursor*
     * @return int enum CXCursorKind
     */
    public function clang_getCursorKind_wrap(?\FFI\CData $cursor): int
    {
        return static::getFFI()->clang_getCursorKind_wrap($cursor);
    }

    /**
     * @param int $kind enum CXCursorKind
     * @return \FFI\CData|null CXString*
     */
    public function clang_getCursorKindSpelling_wrap(int $kind): ?\FFI\CData
    {
        return static::getFFI()->clang_getCursorKindSpelling_wrap($kind);
    }

    /**
     * @param \FFI\CData|null $cursor CXCursor*
     * @return \FFI\CData|null CXType*
     */
    public function clang_getCursorType_wrap(?\FFI\CData $cursor): ?\FFI\CData
    {
        return static::getFFI()->clang_getCursorType_wrap($cursor);
    }

    /**
     * @param \FFI\CData|null $type CXType*
     * @return \FFI\CData|null CXString*
     */
    public function clang_getTypeSpelling_wrap(?\FFI\CData $type): ?\FFI\CData
    {
        return static::getFFI()->clang_getTypeSpelling_wrap($type);
    }

    /**
     * @param int $typeKind enum CXTypeKind
     * @return \FFI\CData|null CXString*
     */
    public function clang_getTypeKindSpelling_wrap(int $typeKind): ?\FFI\CData
    {
        return static::getFFI()->clang_getTypeKindSpelling_wrap($typeKind);
    }

    /**
     * @param \FFI\CData|null $functionType CXType*
     * @return \FFI\CData|null CXType*
     */
    public function clang_getResultType_wrap(?\FFI\CData $functionType): ?\FFI\CData
    {
        return static::getFFI()->clang_getResultType_wrap($functionType);
    }

    /**
     * @param \FFI\CData|null $pointerType CXType*
     * @return \FFI\CData|null CXType*
     */
    public function clang_getPointeeType_wrap(?\FFI\CData $pointerType): ?\FFI\CData
    {
        return static::getFFI()->clang_getPointeeType_wrap($pointerType);
    }

    /**
     * @param \FFI\CData|null $typerefType CXType*
     * @return \FFI\CData|null CXType*
     */
    public function clang_getCanonicalType_wrap(?\FFI\CData $typerefType): ?\FFI\CData
    {
        return static::getFFI()->clang_getCanonicalType_wrap($typerefType);
    }

    /**
     * @param \FFI\CData|null $elaboratedType CXType*
     * @return \FFI\CData|null CXType*
     */
    public function clang_Type_getNamedType_wrap(?\FFI\CData $elaboratedType): ?\FFI\CData
    {
        return static::getFFI()->clang_Type_getNamedType_wrap($elaboratedType);
    }

    /**
     * @param \FFI\CData|null $cxtype CXType*
     * @return \FFI\CData|null CXCursor*
     */
    public function clang_getTypeDeclaration_wrap(?\FFI\CData $cxtype): ?\FFI\CData
    {
        return static::getFFI()->clang_getTypeDeclaration_wrap($cxtype);
    }

    /**
     * @param \FFI\CData|null $cxcursor CXCursor*
     * @return \FFI\CData|null CXType*
     */
    public function clang_getTypedefDeclUnderlyingType_wrap(?\FFI\CData $cxcursor): ?\FFI\CData
    {
        return static::getFFI()->clang_getTypedefDeclUnderlyingType_wrap($cxcursor);
    }

    /**
     * @param \FFI\CData|null $cursor CXCursor*
     * @return \FFI\CData|null CXString*
     */
    public function clang_getCursorSpelling_wrap(?\FFI\CData $cursor): ?\FFI\CData
    {
        return static::getFFI()->clang_getCursorSpelling_wrap($cursor);
    }

    /**
     * @param \FFI\CData|null $tu struct CXTranslationUnitImpl*
     * @return \FFI\CData|null CXCursor*
     */
    public function clang_getTranslationUnitCursor_wrap(?\FFI\CData $tu): ?\FFI\CData
    {
        return static::getFFI()->clang_getTranslationUnitCursor_wrap($tu);
    }

    /**
     * @param \FFI\CData|object|string|null $diag void*
     * @param int|null $opts int
     * @return \FFI\CData|null CXString*
     */
    public function clang_formatDiagnostic_wrap($diag, ?int $opts): ?\FFI\CData
    {
        return static::getFFI()->clang_formatDiagnostic_wrap($diag, $opts);
    }

    /**
     * @param \FFI\CData|null $parent CXCursor*
     * @param \FFI\CData|\Closure $_modifiedVisitor enum CXChildVisitResult(ModifiedCXCursorVisitor*)(CXCursor*, CXCursor*, void*)
     * @param int|null $uid long long
     * @return int|null unsigned
     */
    public function clang_visitChildren_wrap(?\FFI\CData $parent, $_modifiedVisitor, ?int $uid): ?int
    {
        return static::getFFI()->clang_visitChildren_wrap($parent, $_modifiedVisitor, $uid);
    }

    /**
     * @param \FFI\CData|null $cursor CXCursor*
     * @return int|null int
     */
    public function clang_Cursor_getNumArguments_wrap(?\FFI\CData $cursor): ?int
    {
        return static::getFFI()->clang_Cursor_getNumArguments_wrap($cursor);
    }

    /**
     * @param \FFI\CData|null $cursor CXCursor*
     * @param int|null $index unsigned
     * @return \FFI\CData|null CXCursor*
     */
    public function clang_Cursor_getArgument_wrap(?\FFI\CData $cursor, ?int $index): ?\FFI\CData
    {
        return static::getFFI()->clang_Cursor_getArgument_wrap($cursor, $index);
    }

    /**
     * @param \FFI\CData|null $cxtype CXType*
     * @return int|null int
     */
    public function clang_getNumArgTypes_wrap(?\FFI\CData $cxtype): ?int
    {
        return static::getFFI()->clang_getNumArgTypes_wrap($cxtype);
    }

    /**
     * @param \FFI\CData|null $cxtype CXType*
     * @param int|null $index unsigned
     * @return \FFI\CData|null CXType*
     */
    public function clang_getArgType_wrap(?\FFI\CData $cxtype, ?int $index): ?\FFI\CData
    {
        return static::getFFI()->clang_getArgType_wrap($cxtype, $index);
    }

    /**
     * @param \FFI\CData|null $cursor CXCursor*
     * @return int|null long long
     */
    public function clang_getEnumConstantDeclValue_wrap(?\FFI\CData $cursor): ?int
    {
        return static::getFFI()->clang_getEnumConstantDeclValue_wrap($cursor);
    }

    /**
     * @param \FFI\CData|null $c1 CXSourceRange*
     * @param \FFI\CData|null $c2 CXSourceRange*
     * @return int|null unsigned
     */
    public function clang_equalRanges_wrap(?\FFI\CData $c1, ?\FFI\CData $c2): ?int
    {
        return static::getFFI()->clang_equalRanges_wrap($c1, $c2);
    }

    /**
     * @param \FFI\CData|null $cursor CXCursor*
     * @return \FFI\CData|null CXSourceRange*
     */
    public function clang_Cursor_getCommentRange_wrap(?\FFI\CData $cursor): ?\FFI\CData
    {
        return static::getFFI()->clang_Cursor_getCommentRange_wrap($cursor);
    }

    /**
     * @param \FFI\CData|null $cursor CXCursor*
     * @return \FFI\CData|null CXString*
     */
    public function clang_Cursor_getRawCommentText_wrap(?\FFI\CData $cursor): ?\FFI\CData
    {
        return static::getFFI()->clang_Cursor_getRawCommentText_wrap($cursor);
    }

    /**
     * @param \FFI\CData|null $cursor CXCursor*
     * @return \FFI\CData|null CXString*
     */
    public function clang_Cursor_getBriefCommentText_wrap(?\FFI\CData $cursor): ?\FFI\CData
    {
        return static::getFFI()->clang_Cursor_getBriefCommentText_wrap($cursor);
    }

    /**
     * @param \FFI\CData|null $cursor CXCursor*
     * @return \FFI\CData|null CXSourceLocation*
     */
    public function clang_getCursorLocation_wrap(?\FFI\CData $cursor): ?\FFI\CData
    {
        return static::getFFI()->clang_getCursorLocation_wrap($cursor);
    }

    /**
     * @param \FFI\CData|null $location CXSourceLocation*
     * @param \FFI\CData|object|string|null $file void**
     * @param \FFI\CData|null $line unsigned*
     * @param \FFI\CData|null $column unsigned*
     * @param \FFI\CData|null $offset unsigned*
     */
    public function clang_getFileLocation_wrap(?\FFI\CData $location, $file, ?\FFI\CData $line, ?\FFI\CData $column, ?\FFI\CData $offset): void
    {
        static::getFFI()->clang_getFileLocation_wrap($location, $file, $line, $column, $offset);
    }

    /**
     * @param \FFI\CData|object|string|null $SFile void*
     * @return \FFI\CData|null CXString*
     */
    public function clang_getFileName_wrap($SFile): ?\FFI\CData
    {
        return static::getFFI()->clang_getFileName_wrap($SFile);
    }

    /**
     * @param \FFI\CData|null $cxtype CXType*
     * @return int|null unsigned long long
     */
    public function clang_getNumElements_wrap(?\FFI\CData $cxtype): ?int
    {
        return static::getFFI()->clang_getNumElements_wrap($cxtype);
    }

    /**
     * @param \FFI\CData|null $cxtype CXType*
     * @return \FFI\CData|null CXType*
     */
    public function clang_getArrayElementType_wrap(?\FFI\CData $cxtype): ?\FFI\CData
    {
        return static::getFFI()->clang_getArrayElementType_wrap($cxtype);
    }

    /**
     * @param \FFI\CData|null $cursor CXCursor*
     * @return int|null unsigned
     */
    public function clang_Cursor_isMacroFunctionLike_wrap(?\FFI\CData $cursor): ?int
    {
        return static::getFFI()->clang_Cursor_isMacroFunctionLike_wrap($cursor);
    }

    /**
     * @param \FFI\CData|null $cursor CXCursor*
     * @return int|null unsigned
     */
    public function clang_Cursor_isMacroBuiltin_wrap(?\FFI\CData $cursor): ?int
    {
        return static::getFFI()->clang_Cursor_isMacroBuiltin_wrap($cursor);
    }

    /**
     * @param \FFI\CData|null $cursor CXCursor*
     * @return \FFI\CData|object|string|null void*
     */
    public function clang_Cursor_Evaluate_wrap(?\FFI\CData $cursor)
    {
        return static::getFFI()->clang_Cursor_Evaluate_wrap($cursor);
    }

    /**
     * @param \FFI\CData|null $cursor CXCursor*
     * @return int|null unsigned
     */
    public function clang_Cursor_isAnonymous_wrap(?\FFI\CData $cursor): ?int
    {
        return static::getFFI()->clang_Cursor_isAnonymous_wrap($cursor);
    }

    /**
     * @param \FFI\CData|null $cursor CXCursor*
     * @return int|null unsigned
     */
    public function clang_Cursor_isAnonymousRecordDecl_wrap(?\FFI\CData $cursor): ?int
    {
        return static::getFFI()->clang_Cursor_isAnonymousRecordDecl_wrap($cursor);
    }

    /**
     * @param \FFI\CData|null $cursor CXCursor*
     * @return \FFI\CData|null CXString*
     */
    public function clang_getCursorUSR_wrap(?\FFI\CData $cursor): ?\FFI\CData
    {
        return static::getFFI()->clang_getCursorUSR_wrap($cursor);
    }

    /**
     * @param \FFI\CData|null $cursor CXCursor*
     * @return int|null int
     */
    public function clang_getFieldDeclBitWidth_wrap(?\FFI\CData $cursor): ?int
    {
        return static::getFFI()->clang_getFieldDeclBitWidth_wrap($cursor);
    }

    /**
     * @param \FFI\CData|null $cursor CXCursor*
     * @param \FFI\CData|object|string|null $policy void*
     * @return \FFI\CData|null CXString*
     */
    public function clang_getCursorPrettyPrinted_wrap(?\FFI\CData $cursor, $policy): ?\FFI\CData
    {
        return static::getFFI()->clang_getCursorPrettyPrinted_wrap($cursor, $policy);
    }

    /**
     * @param \FFI\CData|null $cursor CXCursor*
     * @return \FFI\CData|null CXCursor*
     */
    public function clang_getCursorReferenced_wrap(?\FFI\CData $cursor): ?\FFI\CData
    {
        return static::getFFI()->clang_getCursorReferenced_wrap($cursor);
    }

    /**
     * @param \FFI\CData|null $cxtype CXType*
     * @return int|null int
     */
    public function clang_isFunctionTypeVariadic_wrap(?\FFI\CData $cxtype): ?int
    {
        return static::getFFI()->clang_isFunctionTypeVariadic_wrap($cxtype);
    }

    /**
     * @param \FFI\CData|null $cxtype CXType*
     * @return int|null int
     */
    public function clang_isConstQualifiedType_wrap(?\FFI\CData $cxtype): ?int
    {
        return static::getFFI()->clang_isConstQualifiedType_wrap($cxtype);
    }

    /**
     * @param \FFI\CData|null $cursor CXCursor*
     * @return int|null int
     */
    public function clang_getNumOverloadedDecls_wrap(?\FFI\CData $cursor): ?int
    {
        return static::getFFI()->clang_getNumOverloadedDecls_wrap($cursor);
    }

    /**
     * @param \FFI\CData|null $cursor CXCursor*
     * @param int|null $index unsigned
     * @return \FFI\CData|null CXCursor*
     */
    public function clang_getOverloadedDecl_wrap(?\FFI\CData $cursor, ?int $index): ?\FFI\CData
    {
        return static::getFFI()->clang_getOverloadedDecl_wrap($cursor, $index);
    }

    /**
     * @param \FFI\CData|null $cursor CXCursor*
     * @return \FFI\CData|object|string|null void*
     */
    public function clang_getCursorPrintingPolicy_wrap(?\FFI\CData $cursor)
    {
        return static::getFFI()->clang_getCursorPrintingPolicy_wrap($cursor);
    }
}
