<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Filament\Notifications\Notification;
use Spatie\Translatable\HasTranslations;
use Illuminate\Validation\ValidationException;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class About extends Model
{
    use HasFactory,HasTranslations;
    protected $guarded = [];


    protected $casts = [
        'content1' => 'array',
        'content2' => 'array',
        'content3' => 'array',
        'features' => 'array',
    ];

    //Start Translation
    public $translatable = ['content1','content2','content3','features'];

    public function getLocalizedContent1()
    {
        return $this->getTranslation('content1', app()->getLocale());
    }
    public function getLocalizedContent2()
    {
        return $this->getTranslation('content2', app()->getLocale());
    }
    public function getLocalizedContent3()
    {
        return $this->getTranslation('content3', app()->getLocale());
    }
    public function getLocalizedFeatures()
    {
        return $this->getTranslation('features', app()->getLocale());
    }

    public function getLocalizedTitle()
    {
        return $this->getTranslation('title', app()->getLocale());
    }
    public function getLocalizedContent()
    {
        return $this->getTranslation('content', app()->getLocale());
    }



// Start Lang Requiered Messag

protected static function boot()
{
    parent::boot();

    static::saving(function ($model) {

        // content1 Input
        $content1 = $model->getTranslations('content1');

        // Validate Arabic name
        if (empty($content1['ar'])) {
            Notification::make()
                ->title(__('تحزير'))
                ->body(__('تاكد من ملئ جميع البيانات باللغة العربية'))
                ->warning()
                ->send();

            throw ValidationException::withMessages([
                'content1.ar' => __('تاكد من ملئ جميع البيانات باللغة العربية'),
            ]);
        }

        // Validate English name
        if (empty($content1['en'])) {
            Notification::make()
                ->title(__('تحزير'))
                ->body(__('تاكد من ملئ جميع البيانات باللغة الانجليزية'))
                ->warning()
                ->send();

            throw ValidationException::withMessages([
                'content1.en' => __('تاكد من ملئ جميع البيانات باللغة الانجليزية'),
            ]);
        }
        // content2 Input
        $content2 = $model->getTranslations('content2');

        // Validate Arabic content2
        if (empty($content2['ar'])) {
            Notification::make()
                ->title(__('تحزير'))
                ->body(__('تاكد من ملئ جميع البيانات باللغة العربية'))
                ->warning()
                ->send();

            throw ValidationException::withMessages([
                'content2.ar' => __('تاكد من ملئ جميع البيانات باللغة العربية'),
            ]);
        }

        // Validate English content2
        if (empty($content2['en'])) {
            Notification::make()
                ->title(__('تحزير'))
                ->body(__('تاكد من ملئ جميع البيانات باللغة الانجليزية'))
                ->warning()
                ->send();

            throw ValidationException::withMessages([
                'content2.en' => __('تاكد من ملئ جميع البيانات باللغة الانجليزية'),
            ]);
        }
        // content3 Input
        $content3 = $model->getTranslations('content3');

        // Validate Arabic content3
        if (empty($content3['ar'])) {
            Notification::make()
                ->title(__('تحزير'))
                ->body(__('تاكد من ملئ جميع البيانات باللغة العربية'))
                ->warning()
                ->send();

            throw ValidationException::withMessages([
                'content3.ar' => __('تاكد من ملئ جميع البيانات باللغة العربية'),
            ]);
        }

        // Validate English content3
        if (empty($content3['en'])) {
            Notification::make()
                ->title(__('تحزير'))
                ->body(__('تاكد من ملئ جميع البيانات باللغة الانجليزية'))
                ->warning()
                ->send();

            throw ValidationException::withMessages([
                'content3.en' => __('تاكد من ملئ جميع البيانات باللغة الانجليزية'),
            ]);
        }
        // features Input
        $features = $model->getTranslations('features');

        // Validate Arabic features
        if (empty($features['ar'])) {
            Notification::make()
                ->title(__('تحزير'))
                ->body(__('تاكد من ملئ جميع البيانات باللغة العربية'))
                ->warning()
                ->send();

            throw ValidationException::withMessages([
                'features.ar' => __('تاكد من ملئ جميع البيانات باللغة العربية'),
            ]);
        }

        // Validate English features
        if (empty($features['en'])) {
            Notification::make()
                ->title(__('تحزير'))
                ->body(__('تاكد من ملئ جميع البيانات باللغة الانجليزية'))
                ->warning()
                ->send();

            throw ValidationException::withMessages([
                'features.en' => __('تاكد من ملئ جميع البيانات باللغة الانجليزية'),
            ]);
        }



    });
}

}
