<?php

namespace App\Filament\Exports;

use App\Models\AssistantPeriod;
use Filament\Actions\Exports\ExportColumn;
use Filament\Actions\Exports\Exporter;
use Filament\Actions\Exports\Models\Export;

class AssistantPeriodExporter extends Exporter
{
    protected static ?string $model = AssistantPeriod::class;

    public static function getColumns(): array
    {
        return [
            ExportColumn::make('period.day.name')
                ->label('Day'),
            ExportColumn::make('room.name')
                ->label('Room'),
            ExportColumn::make('period.start')
                ->label('Start'),
            ExportColumn::make('period.end')
                ->label('End'),
            ExportColumn::make('period.assistants.code')
                ->label('Assistant'),
        ];
    }

    public static function getCompletedNotificationBody(Export $export): string
    {
        $body = 'Your assistant period export has completed and ' . number_format($export->successful_rows) . ' ' . str('row')->plural($export->successful_rows) . ' exported.';

        if ($failedRowsCount = $export->getFailedRowsCount()) {
            $body .= ' ' . number_format($failedRowsCount) . ' ' . str('row')->plural($failedRowsCount) . ' failed to export.';
        }

        return $body;
    }
}
