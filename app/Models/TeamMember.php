<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Filament\Notifications\Notification;
use Spatie\Translatable\HasTranslations;
use Illuminate\Validation\ValidationException;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TeamMember extends Model
{
    use HasFactory,HasTranslations;


    protected $guarded = [];

    protected $casts = [
        'name' => 'json',
        'title' => 'json',
    ];

    //Start Translation

    public $translatable = ['name','title'];

    public function getLocalizedName()
    {
        return $this->getTranslation('name', app()->getLocale());
    }

    public function getLocalizedTitle()
    {
        return $this->getTranslation('title', app()->getLocale());
    }
    // Start Relation
    public function department():BelongsTo
    {
        return $this->belongsTo(Department::class);
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
        // title Input
        $title = $model->getTranslations('title');

        // Validate Arabic title
        if (empty($title['ar'])) {
            Notification::make()
                ->title(__('تحزير'))
                ->body(__('تاكد من ملئ جميع البيانات باللغة العربية'))
                ->warning()
                ->send();

            throw ValidationException::withMessages([
                'title.ar' => __('تاكد من ملئ جميع البيانات باللغة العربية'),
            ]);
        }

        // Validate English title
        if (empty($title['en'])) {
            Notification::make()
                ->title(__('تحزير'))
                ->body(__('تاكد من ملئ جميع البيانات باللغة الانجليزية'))
                ->warning()
                ->send();

            throw ValidationException::withMessages([
                'title.en' => __('تاكد من ملئ جميع البيانات باللغة الانجليزية'),
            ]);
        }


    });
}


}
