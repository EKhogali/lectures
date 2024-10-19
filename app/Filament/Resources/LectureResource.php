<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LectureResource\Pages;
use App\Filament\Resources\LectureResource\RelationManagers;
use App\Models\Lecture;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;

class LectureResource extends Resource
{
    protected static ?string $model = Lecture::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('school')
                    ->translateLabel(),
                TextInput::make('classdesc01')
                    ->translateLabel(),
                TextInput::make('classdesc02')
                    ->translateLabel(),
                TextInput::make('area')
                    ->translateLabel(),
                TextInput::make('manager_name')
                    ->translateLabel(),
                TextInput::make('manager_tel')
                    ->translateLabel(),
                TextInput::make('lecturer_name')
                    ->translateLabel(),
                Forms\Components\DatePicker::make('lecture_date')
                    ->translateLabel()
                    ->placeholder('YYYY-MM-DD'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('school'),
                Tables\Columns\TextColumn::make('classdesc01'),
                Tables\Columns\TextColumn::make('classdesc02'),
                Tables\Columns\TextColumn::make('area'),
                Tables\Columns\TextColumn::make('manager_name'),
                Tables\Columns\TextColumn::make('manager_tel'),
                Tables\Columns\TextColumn::make('lecturer_name'),
                Tables\Columns\TextColumn::make('lecture_date'),
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
            'index' => Pages\ListLectures::route('/'),
            'create' => Pages\CreateLecture::route('/create'),
            'edit' => Pages\EditLecture::route('/{record}/edit'),
        ];
    }
}
