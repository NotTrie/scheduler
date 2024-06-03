<?php

namespace App\Filament\Resources\AssistantPeriodResource\Pages;

use App\Filament\Resources\AssistantPeriodResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAssistantPeriod extends EditRecord
{
    protected static string $resource = AssistantPeriodResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
