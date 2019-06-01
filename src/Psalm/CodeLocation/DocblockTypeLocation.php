<?php
namespace Psalm\CodeLocation;

use PhpParser;

class DocblockTypeLocation extends \Psalm\CodeLocation
{
    public function __construct(
        \Psalm\FileSource $file_source,
        int $file_start,
        int $file_end,
        int $line_number
    ) {
        $this->file_start = $file_start;
        $this->file_end = $file_end;
        $this->file_path = $file_source->getFilePath();
        $this->file_name = $file_source->getFileName();
        $this->single_line = false;

        $this->preview_start = $this->file_start;
        $this->line_number = $line_number;
    }
}
