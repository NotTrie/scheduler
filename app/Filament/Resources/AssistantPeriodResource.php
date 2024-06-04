<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AssistantPeriodResource\Pages;
use App\Filament\Resources\AssistantPeriodResource\RelationManagers;
use App\Models\AssistantPeriod;
use Filament\Actions\CreateAction;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AssistantPeriodResource extends Resource
{
    protected static ?string $model = AssistantPeriod::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('period.code'),
                Tables\Columns\TextColumn::make('period.assistants.code')
                    ->badge(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAssistantPeriods::route('/'),
            'create' => Pages\CreateAssistantPeriod::route('/create'),
            'edit' => Pages\EditAssistantPeriod::route('/{record}/edit'),
        ];
    }
}
