<?php

namespace App\Filament\Resources\PaginaSocialResource\Pages;

use App\Filament\Resources\PaginaSocialResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPaginaSocial extends EditRecord
{
    protected static string $resource = PaginaSocialResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
