<?php

declare(strict_types=1);

namespace Xve\DbExport\Contracts;

use Xve\DbExport\Config\ExportConfig;
use Xve\DbExport\DTOs\ExportResult;
use Xve\DbExport\DTOs\TableInfo;

interface ExporterInterface
{
    /**
     * @param  array<int, TableInfo>  $tables
     */
    public function export(ExportConfig $config, array $tables): ExportResult;
}
