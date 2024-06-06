<?php

namespace App\Filament\Resources\AssistantResource\Pages;

use App\Models\Assistant;
use App\Filament\Resources\AssistantResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;

class ListAssistants extends ListRecords
{
    protected static string $resource = AssistantResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getTableQuery(): Builder
    {
        if (auth()->user()->hasRole('super_admin')) {
            return Assistant::query();
        } else {
            return Assistant::select('assistants.*')
                ->join('users', 'assistants.user_id', '=', 'users.id')
                ->where('users.id', auth()->id());
        }
    }
}
