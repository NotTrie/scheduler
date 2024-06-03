<?php

namespace App\Filament\Resources\AssistantResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AvailabilitiesRelationManager extends RelationManager
{
    protected static string $relationship = 'availabilities';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('period_id')
                    ->label('Period')
                    ->options(\App\Models\Period::all()->pluck('code', 'id'))
                    ->searchable()
                    ->required()
                    ->native(false),
                Forms\Components\Select::make('is_available')
                    ->options([
                        '1' => 'Available',
                        '0' => 'Not Available',
                    ])
                    ->required()
                    ->native(false),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('is_available')
            ->columns([
                Tables\Columns\TextColumn::make('period.code'),
                Tables\Columns\IconColumn::make('is_available')
                    ->boolean(),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
