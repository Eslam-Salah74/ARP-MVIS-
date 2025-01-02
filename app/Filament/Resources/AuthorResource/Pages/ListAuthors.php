<?php

namespace App\Filament\Resources\AuthorResource\Pages;

use App\Filament\Resources\AuthorResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAuthors extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = AuthorResource::class;



    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            // Actions\LocaleSwitcher::make(),

        ];
    }
}
