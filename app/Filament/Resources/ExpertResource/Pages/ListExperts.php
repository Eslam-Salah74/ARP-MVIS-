<?php

namespace App\Filament\Resources\ExpertResource\Pages;

use App\Filament\Resources\ExpertResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListExperts extends ListRecords
{
    protected static string $resource = ExpertResource::class;

    use ListRecords\Concerns\Translatable;

    protected function getHeaderActions(): array
    {

        return [
            Actions\CreateAction::make(),
            // Actions\LocaleSwitcher::make(),

        ];
    }

}
