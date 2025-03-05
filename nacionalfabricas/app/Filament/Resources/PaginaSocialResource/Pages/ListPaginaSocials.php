<?php

namespace App\Filament\Resources\PaginaSocialResource\Pages;

use App\Filament\Resources\PaginaSocialResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPaginaSocials extends ListRecords
{
    protected static string $resource = PaginaSocialResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
