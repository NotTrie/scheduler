<?php

namespace App\Filament\Resources\DayResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PeriodsRelationManager extends RelationManager
{
    protected static string $relationship = 'periods';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('code')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('start')
                    ->options([
                        '08:00' => '08:00',
                        '09:30' => '09:30',
                        '11:00' => '11:00',
                        '12:30' => '12:30',
                        '14:00' => '14:00',
                        '15:30' => '15:30',
                        '17:00' => '17:00',
                        '18:30' => '18:30',
                        '19:00' => '19:00',
                        '20:30' => '20:30',
                        '22:00' => '22:00',
                    ])
                    ->native(false),
                Forms\Components\Select::make('end')
                    ->options([
                        '08:00' => '08:00',
                        '09:30' => '09:30',
                        '11:00' => '11:00',
                        '12:30' => '12:30',
                        '14:00' => '14:00',
                        '15:30' => '15:30',
                        '17:00' => '17:00',
                        '18:30' => '18:30',
                        '19:00' => '19:00',
                        '20:30' => '20:30',
                        '22:00' => '22:00',
                    ])
                    ->native(false),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('code')
            ->columns([
                Tables\Columns\TextColumn::make('code'),
                Tables\Columns\TextColumn::make('start'),
                Tables\Columns\TextColumn::make('end'),
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
