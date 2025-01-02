<?php

namespace App\Filament\Resources\ExpertArticleResource\Pages;

use App\Filament\Resources\ExpertArticleResource;
use App\Models\ExpertArticle;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;
use Illuminate\Support\Str;

class CreateExpertArticle extends CreateRecord
{
    protected static string $resource = ExpertArticleResource::class;
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
    // public function submit()
    // {
    //     $formState = $this->form->getState();
    //     $title = $formState['title'];
    //     $slug = Str::slug($title);
    
    //     // Check if the slug already exists
    //     $exists = ExpertArticle::where('slug', $slug)->exists();
    
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
