<?php

namespace App\Filament\Resources\PustakaResource\Pages;

use App\Filament\Resources\PustakaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPustakas extends ListRecords
{
    protected static string $resource = PustakaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
