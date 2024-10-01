<?php

namespace App\Filament\Resources\ScheduleResource\Pages;

use App\Filament\Imports\ScheduleImporter;
use App\Filament\Resources\ScheduleResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSchedules extends ListRecords
{
    protected static string $resource = ScheduleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ImportAction::make()
                ->importer(ScheduleImporter::class),
            Actions\CreateAction::make(),
        ];
    }
}
