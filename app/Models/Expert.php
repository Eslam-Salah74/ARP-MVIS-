<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Filament\Notifications\Notification;
use Spatie\Translatable\HasTranslations;
use Illuminate\Validation\ValidationException;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Expert extends Model
{
    use HasFactory, HasTranslations;

    protected $guarded = [];


    protected $casts = [
        'name' => 'array',
    ];

    //Start Translation
    public $translatable = ['name'];

    public function getLocalizedName()
    {
        return $this->getTranslation('name', app()->getLocale());
    }

// Start Relation
    public function experts_articles(): HasMany
    {
        return $this->hasMany(ExpertArticle::class);
    }


    // Start Lang Requiered Messag

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($model) {

        // name Input
        $name = $model->getTranslations('name');

            // Validate Arabic name
            if (empty($name['ar'])) {
                Notification::make()
                    ->title(__('تحزير'))
                    ->body(__('تاكد من ملئ جميع البيانات باللغة العربية'))
                    ->warning()
                    ->send();

                throw ValidationException::withMessages([
                    'name.ar' => __('تاكد من ملئ جميع البيانات باللغة العربية'),
                ]);
            }

        // Validate English name
        if (empty($name['en'])) {
                Notification::make()
                    ->title(__('تحزير'))
                    ->body(__('تاكد من ملئ جميع البيانات باللغة الانجليزية'))
                    ->warning()
                    ->send();

                throw ValidationException::withMessages([
                    'name.en' => __('تاكد من ملئ جميع البيانات باللغة الانجليزية'),
                ]);
            }

        });
    }


}
