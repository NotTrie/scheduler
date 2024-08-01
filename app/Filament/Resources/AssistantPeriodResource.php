<?php

namespace App\Filament\Resources;

use App\Filament\Exports\AssistantPeriodExporter;
use App\Filament\Resources\AssistantPeriodResource\Pages;
use App\Filament\Resources\AssistantPeriodResource\RelationManagers;
use App\Models\AssistantPeriod;
use Filament\Actions\CreateAction;
use Filament\Tables\Actions\ExportAction;
use Filament\Forms;
use Filament\Forms\Components\Group;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Filters\QueryBuilder;
use Filament\Tables\Filters\QueryBuilder\Constraints\RelationshipConstraint;
use Filament\Tables\Filters\QueryBuilder\Constraints\RelationshipConstraint\Operators\IsRelatedToOperator;
use Filament\Tables\Filters\QueryBuilder\Constraints\TextConstraint;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AssistantPeriodResource extends Resource
{
    protected static ?string $model = AssistantPeriod::class;

    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected static ?string $navigationLabel = 'Assistant Generator';

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
            ->headerActions([
                ExportAction::make()
                    ->exporter(AssistantPeriodExporter::class)
            ])
            ->columns([
                Tables\Columns\TextColumn::make('period.day.name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('room.name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('period.start')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('period.end')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('assistant.code')
                    ->badge()
                    ->searchable()
                    ->sortable(),
            ])
            ->filters([
                QueryBuilder::make()
                    ->constraints([
                        TextConstraint::make('room.name'),
                        RelationshipConstraint::make('period')
                            ->selectable(
                                IsRelatedToOperator::make()
                                    ->titleAttribute('code')
                                    ->searchable()
                            )
                    ]),

                ], layout: FiltersLayout::AboveContent)
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\ExportBulkAction::make()
                        ->exporter(AssistantPeriodExporter::class),
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
