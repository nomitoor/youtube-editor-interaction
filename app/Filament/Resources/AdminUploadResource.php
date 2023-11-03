<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AdminUploadResource\Pages;
use App\Models\AdminUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Tables\Columns\Layout\Stack;

class AdminUploadResource extends Resource
{
    protected static ?string $model = AdminUpload::class;

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
                Stack::make([
                    ImageColumn::make('file_path'),
                    TextColumn::make('file_name'),
                    TextColumn::make('file_size'),
                    TextColumn::make('description'),
                    TextColumn::make('category'),
                    TextColumn::make('is_public'),
                ])->space(1)
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
            ])
            ->defaultSort('file_name')
            ->contentGrid([
                'md' => 2,
                'xl' => 3,
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
            'index' => Pages\ListAdminUpload::route('/'),
            'create' => Pages\CreateAdminUpload::route('/create'),
            'edit' => Pages\EditAdminUpload::route('/{record}/edit'),
        ];
    }
}
