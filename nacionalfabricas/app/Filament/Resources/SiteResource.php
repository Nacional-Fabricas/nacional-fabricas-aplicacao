<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SiteResource\Pages;
use App\Filament\Resources\SiteResource\RelationManagers;
use App\Models\Site;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components;

class SiteResource extends Resource
{
    protected static ?string $model = Site::class;

    protected static ?string $recordTitleAttribute = 'title';

    public static function getGloballySearchableAttributes(): array
    {
        return ['nome_industria', 'segmento', 'userCadastroCnpj.cadastro.cnpj'];
    }
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('id_conta')
                    ->relationship('userCadastroCnpj', 'name')
                    ->required(),
                Components\TextInput::make('instagram'),
                Components\TextInput::make('nome_industria'),
                Components\TextArea::make('descricao_industria'),
                Components\TextInput::make('segmento'),
                Components\TextInput::make('produtos_tipo'),
                Components\TextInput::make('tributacao'),
                Components\TextInput::make('tempo_resposta'),
                Components\TextArea::make('atendimento'),
                Components\TextInput::make('email'),
                Components\TextInput::make('telefone'),
                Components\TextInput::make('local_atuacao'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id'),
                Tables\Columns\TextColumn::make('nome_industria'),
                Tables\Columns\TextColumn::make('segmento'),
                Tables\Columns\TextColumn::make('userCadastroCnpj.cadastro.cnpj')->label('CNPJ'),            ])
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
            'index' => Pages\ListSites::route('/'),
            'create' => Pages\CreateSite::route('/create'),
            'edit' => Pages\EditSite::route('/{record}/edit'),
        ];
    }
}
