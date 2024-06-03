<?php

namespace App\Filament\Resources\AssistantPeriodResource\Pages;

use App\Filament\Resources\AssistantPeriodResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAssistantPeriods extends ListRecords
{
    protected static string $resource = AssistantPeriodResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\Action::make('Generate')
                ->label('Generate')
                ->action('generateAssistantPeriods')
                ->color('success')
                ->icon('heroicon-o-cog'),
        ];
    }
}
