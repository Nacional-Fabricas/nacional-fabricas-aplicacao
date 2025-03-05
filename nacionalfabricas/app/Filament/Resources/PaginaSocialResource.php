<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PaginaSocialResource\Pages;
use App\Filament\Resources\PaginaSocialResource\RelationManagers;
use App\Models\PaginaSocial;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components;

class PaginaSocialResource extends Resource
{
    protected static ?string $model = PaginaSocial::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getGloballySearchableAttributes(): array
    {
        return ['username', 'nome'];
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Components\TextInput::make('username')->required(),
                Components\TextInput::make('nome'),
                Components\TextInput::make('biografia'),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id'),
                Tables\Columns\TextColumn::make('username'),
                Tables\Columns\TextColumn::make('nome'),
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
            'index' => Pages\ListPaginaSocials::route('/'),
            'create' => Pages\CreatePaginaSocial::route('/create'),
            'edit' => Pages\EditPaginaSocial::route('/{record}/edit'),
        ];
    }
}
