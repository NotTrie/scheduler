<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Room;
use Filament\Tables;
use App\Models\Period;
use App\Models\Schedule;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ScheduleResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ScheduleResource\RelationManagers;
use App\Models\Skill;

class ScheduleResource extends Resource
{
    protected static ?string $model = Schedule::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('period_id')
                    ->label('Period')
                    ->options(Period::pluck('code', 'id'))
                    ->required()
                    ->searchable(),
                Forms\Components\Select::make('room_id')
                    ->label('Room')
                    ->options(Room::pluck('name', 'id'))
                    ->required()
                    ->searchable(),
                Forms\Components\Select::make('skill_id')
                    ->label('Skill')
                    ->options(Skill::pluck('name', 'id'))
                    ->required()
                    ->searchable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('period.day.name')
                    ->label('Day')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('period.start')
                    ->label('Start')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('period.end')
                    ->label('End')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('room.name')
                    ->label('Room')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('skill.name')
                    ->label('Skill Required')
                    ->searchable()
                    ->sortable(),
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
            'index' => Pages\ListSchedules::route('/'),
            'create' => Pages\CreateSchedule::route('/create'),
            'edit' => Pages\EditSchedule::route('/{record}/edit'),
        ];
    }
}
