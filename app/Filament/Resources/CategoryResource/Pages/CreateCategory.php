<?php

namespace App\Filament\Resources\CategoryResource\Pages;

use App\Filament\Resources\CategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;
use App\Models\Category;
use Illuminate\Support\Str;

class CreateCategory extends CreateRecord
{
    protected static string $resource = CategoryResource::class;
    protected function getRedirectUrl(): string
    {
         return  $this->getResource()::getUrl('index');
        }
        use CreateRecord\Concerns\Translatable;
    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            // ...
        ];
    }
//     public function submit()
// {
//     $formState = $this->form->getState();
//     $title = $formState['title'];
//     $slug = Str::slug($title);

//     // Check if the slug already exists
//     $exists = Category::where('slug', $slug)->exists();

//     if ($exists) {
//         Notification::make()
//             ->title(__('app.warning'))
//             ->body(__('app.exists_before'))
//             ->danger()
//             ->send();

//         // Optionally, you can prevent form submission here by returning early
//         return;
//     }

// }
}
