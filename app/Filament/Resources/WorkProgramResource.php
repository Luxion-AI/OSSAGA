<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WorkProgramResource\Pages;
use App\Filament\Resources\WorkProgramResource\RelationManagers;
use App\Models\WorkProgram;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class WorkProgramResource extends Resource
{
    protected static ?string $model = WorkProgram::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('period_id')
                    ->relationship('period', 'cabinet_name')
                    ->required(),
                Forms\Components\TextInput::make('name')
                    ->label('Nama Program')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('sekbid_owner')
                    ->label('Kepemilikan Sekbid')
                    ->maxLength(255),
                Forms\Components\Select::make('status')
                    ->options([
                        'planned' => 'Direncanakan',
                        'ongoing' => 'Sedang Berjalan',
                        'completed' => 'Selesai',
                    ])
                    ->required(),
                Forms\Components\DatePicker::make('target_date')
                    ->label('Tanggal Target'),
                Forms\Components\Textarea::make('description')
                    ->label('Deskripsi')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('period.cabinet_name')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('name')
                    ->label('Nama Program')
                    ->searchable()
                    ->sortable()
                    ->wrap(),
                Tables\Columns\TextColumn::make('sekbid_owner')
                    ->label('Sekbid')
                    ->searchable(),
                Tables\Columns\TextColumn::make('status')
                    ->badge()
                    ->colors([
                        'danger' => 'planned',
                        'warning' => 'ongoing',
                        'success' => 'completed',
                    ]),
                Tables\Columns\TextColumn::make('target_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListWorkPrograms::route('/'),
            'create' => Pages\CreateWorkProgram::route('/create'),
            'edit' => Pages\EditWorkProgram::route('/{record}/edit'),
        ];
    }
}
