<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

use Illuminate\Validation\ValidationException;
use Filament\Notifications\Notification;
class Setting extends Model
{
    use HasTranslations;
    use HasFactory;
    protected $guarded = [];
    protected $casts = [
        'sitename' => 'array',
        'headerTitle' => 'array',
        'headerSubtitle' => 'array',
        'socialmedia' => 'array',
    ];



    public $translatable = [
        'sitename',
        'headerTitle',
        'headerSubtitle',
        
    ];


    public function getLocalizedSitename()
    {
        return $this->getTranslation('sitename', app()->getLocale());
    }
    public function getLocalizedHeaderTitle()
    {
        return $this->getTranslation('headerTitle', app()->getLocale());
    }
    public function getLocalizedHeaderSubtitle()
    {
        return $this->getTranslation('headerSubtitle',app()->getLocale());
    }
    // public function getLocalizedcontactus()
    // {
    //     return $this->getTranslation('contactus', app()->getLocale());
    // }



    protected static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            // sitename Input
            $sitename = $model->getTranslations('sitename');
            // Validate Arabic name
            if (empty($sitename['ar'])) {
                Notification::make()
                    ->title(__('تحزير'))
                    ->body(__('تاكد من ملئ جميع البيانات باللغة العربية'))
                    ->warning()
                    ->send();

                throw ValidationException::withMessages([
                    'sitename.ar' => __('تاكد من ملئ جميع البيانات باللغة العربية'),
                ]);
            }
            // Validate English name
            if (empty($sitename['en'])) {
                Notification::make()
                    ->title(__('تحزير'))
                    ->body(__('تاكد من ملئ جميع البيانات باللغة الانجليزية'))
                    ->warning()
                    ->send();

                throw ValidationException::withMessages([
                    'sitename.en' => __('تاكد من ملئ جميع البيانات باللغة الانجليزية'),
                ]);
            }

            // headerTitle Input
            $headerTitle = $model->getTranslations('headerTitle');
            // Validate Arabic name
            if (empty($headerTitle['ar'])) {
                Notification::make()
                    ->title(__('تحزير'))
                    ->body(__('تاكد من ملئ جميع البيانات باللغة العربية'))
                    ->warning()
                    ->send();

                throw ValidationException::withMessages([
                    'headerTitle.ar' => __('تاكد من ملئ جميع البيانات باللغة العربية'),
                ]);
            }
            // Validate English name
            if (empty($headerTitle['en'])) {
                Notification::make()
                    ->title(__('تحزير'))
                    ->body(__('تاكد من ملئ جميع البيانات باللغة الانجليزية'))
                    ->warning()
                    ->send();

                throw ValidationException::withMessages([
                    'headerTitle.en' => __('تاكد من ملئ جميع البيانات باللغة الانجليزية'),
                ]);
            }

            // headerSubtitle Input
            $headerSubtitle = $model->getTranslations('headerSubtitle');
            // Validate Arabic name
            if (empty($headerSubtitle['ar'])) {
                Notification::make()
                    ->title(__('تحزير'))
                    ->body(__('تاكد من ملئ جميع البيانات باللغة العربية'))
                    ->warning()
                    ->send();

                throw ValidationException::withMessages([
                    'headerSubtitle.ar' => __('تاكد من ملئ جميع البيانات باللغة العربية'),
                ]);
            }
            // Validate English name
            if (empty($headerSubtitle['en'])) {
                Notification::make()
                    ->title(__('تحزير'))
                    ->body(__('تاكد من ملئ جميع البيانات باللغة الانجليزية'))
                    ->warning()
                    ->send();

                throw ValidationException::withMessages([
                    'headerSubtitle.en' => __('تاكد من ملئ جميع البيانات باللغة الانجليزية'),
                ]);
            }

            // // contactus Input
            // $contactus = $model->getTranslations('contactus');
            // // Validate Arabic name
            // if (empty($contactus['ar'])) {
            //     Notification::make()
            //         ->title(__('تحزير'))
            //         ->body(__('تاكد من ملئ جميع البيانات باللغة العربية'))
            //         ->warning()
            //         ->send();

            //     throw ValidationException::withMessages([
            //         'contactus.ar' => __('تاكد من ملئ جميع البيانات باللغة العربية'),
            //     ]);
            // }
            // // Validate English name
            // if (empty($contactus['en'])) {
            //     Notification::make()
            //         ->title(__('تحزير'))
            //         ->body(__('تاكد من ملئ جميع البيانات باللغة الانجليزية'))
            //         ->warning()
            //         ->send();

            //     throw ValidationException::withMessages([
            //         'contactus.en' => __('تاكد من ملئ جميع البيانات باللغة الانجليزية'),
            //     ]);
            // }

        });
    }
}