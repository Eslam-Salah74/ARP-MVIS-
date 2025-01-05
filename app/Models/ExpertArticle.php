<?php

namespace App\Models;

use App\Models\Expert;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Filament\Notifications\Notification;
use Spatie\Translatable\HasTranslations;
use Illuminate\Validation\ValidationException;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Mcamara\LaravelLocalization\Interfaces\LocalizedUrlRoutable;


class ExpertArticle extends Model implements LocalizedUrlRoutable
{
    use HasFactory,HasTranslations;

    protected $guarded = [];

    protected $casts = [
        'title' => 'json',
        'slug' => 'json',
        'content' => 'json',
    ];

     //Start Translation

    public $translatable = ['title','slug','content'];

    public function getLocalizedTitle()
    {
        return $this->getTranslation('title', app()->getLocale());
    }
    public function getLocalizedContent()
    {
        return $this->getTranslation('content', app()->getLocale());
    }
    public function getLocalizedSlug()
    {
        return $this->getTranslation('slug', app()->getLocale());
    }


// Start Relation

    public function expert(): BelongsTo
    {
        return $this->belongsTo(Expert::class,'expert_id');
    }
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class,'category_id');
    }


    // Start Lang Requiered Messag

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($model) {

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

            // Validate English name
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
        // subtitle Input
       // content Input
        $content = $model->getTranslations('content');
            // Validate Arabic content
            if (empty($content['ar'])) {
                Notification::make()
                    ->title(__('تحزير'))
                    ->body(__('تاكد من ملئ جميع البيانات باللغة العربية'))
                    ->warning()
                    ->send();

                throw ValidationException::withMessages([
                    'content.ar' => __('تاكد من ملئ جميع البيانات باللغة العربية'),
                ]);
            }

            // Validate English content
            if (empty($content['en'])) {
                Notification::make()
                    ->title(__('تحزير'))
                    ->body(__('تاكد من ملئ جميع البيانات باللغة الانجليزية'))
                    ->warning()
                    ->send();

                throw ValidationException::withMessages([
                    'content.en' => __('تاكد من ملئ جميع البيانات باللغة الانجليزية'),
                ]);
            }
        // content Input
        $content = $model->getTranslations('content');
            // Validate Arabic content
            if (empty($content['ar'])) {
                Notification::make()
                    ->title(__('تحزير'))
                    ->body(__('تاكد من ملئ جميع البيانات باللغة العربية'))
                    ->warning()
                    ->send();

                throw ValidationException::withMessages([
                    'content.ar' => __('تاكد من ملئ جميع البيانات باللغة العربية'),
                ]);
            }

            // Validate English content
            if (empty($content['en'])) {
                Notification::make()
                    ->title(__('تحزير'))
                    ->body(__('تاكد من ملئ جميع البيانات باللغة الانجليزية'))
                    ->warning()
                    ->send();

                throw ValidationException::withMessages([
                    'content.en' => __('تاكد من ملئ جميع البيانات باللغة الانجليزية'),
                ]);
            }

        // Validate unique title (Arabic and English)
        $existing = $model::where('title->ar', $title['ar'])->orWhere('title->en', $title['en'])->first();

            if ($existing && $existing->getKey() != $model->getKey()) {
                Notification::make()
                    ->title(__('تحزير'))
                    ->body(__('الاسم موجود مسبقًا'))
                    ->warning()
                    ->send();

                throw ValidationException::withMessages([
                    'title' => __('الاسم موجود مسبقًا'),
                ]);
            }

        });
    }

    function getLocalizedRouteKey($locale)
	{
		return $this->getTranslation('slug' , $locale);
	}
	public function getRouteKeyName()
    {
        return "slug";
    }
	public function resolveRouteBinding($slug, $field = NULL)
	{
		return static::where("slug->".app()->getLocale(), $slug)->first() ?? abort(404);
	}

}
