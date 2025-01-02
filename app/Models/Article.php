<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Filament\Notifications\Notification;
use Spatie\Translatable\HasTranslations;
use Illuminate\Validation\ValidationException;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory,HasTranslations;

    protected $guarded = [];

    protected $casts = [
        'title' => 'json',
        'slug' => 'json',
        'subtitle' => 'json',
        'summary' => 'json',
        'content' => 'json',

    ];
// Start Translate
    public $translatable = ['title','slug','subtitle','summary','content'];

    public function getLocalizedTitle()
    {
        return $this->getTranslation('title', app()->getLocale());
    }
    public function getLocalizedSlug()
    {
        return $this->getTranslation('slug', app()->getLocale());
    }
    public function getLocalizedSubtitle()
    {
        return $this->getTranslation('subtitle', app()->getLocale());
    }
    public function getLocalizedSummary()
    {
        return $this->getTranslation('summary', app()->getLocale());
    }
    public function getLocalizedContent()
    {
        return $this->getTranslation('content', app()->getLocale());
    }

    // Start Relation

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class,'category_id');
    }

    public function author()
    {
        return $this->belongsTo(Author::class, 'author_id');
    }

    // Top 5 Viewed
    public static function getTop5MostViewed($limit)
    {
        return self::orderBy('views', 'desc')
            ->limit($limit)
            ->get();
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
            $subtitle = $model->getTranslations('subtitle');
                // Validate Arabic subtitle
                if (empty($subtitle['ar'])) {
                    Notification::make()
                        ->title(__('تحزير'))
                        ->body(__('تاكد من ملئ جميع البيانات باللغة العربية'))
                        ->warning()
                        ->send();

                    throw ValidationException::withMessages([
                        'subtitle.ar' => __('تاكد من ملئ جميع البيانات باللغة العربية'),
                    ]);
                }

                // Validate English subtitle
                if (empty($subtitle['en'])) {
                    Notification::make()
                        ->title(__('تحزير'))
                        ->body(__('تاكد من ملئ جميع البيانات باللغة الانجليزية'))
                        ->warning()
                        ->send();

                    throw ValidationException::withMessages([
                        'subtitle.en' => __('تاكد من ملئ جميع البيانات باللغة الانجليزية'),
                    ]);
                }
            // summary Input
            $summary = $model->getTranslations('summary');
                // Validate Arabic summary
                if (empty($summary['ar'])) {
                    Notification::make()
                        ->title(__('تحزير'))
                        ->body(__('تاكد من ملئ جميع البيانات باللغة العربية'))
                        ->warning()
                        ->send();

                    throw ValidationException::withMessages([
                        'summary.ar' => __('تاكد من ملئ جميع البيانات باللغة العربية'),
                    ]);
                }

                // Validate English summary
                if (empty($summary['en'])) {
                    Notification::make()
                        ->title(__('تحزير'))
                        ->body(__('تاكد من ملئ جميع البيانات باللغة الانجليزية'))
                        ->warning()
                        ->send();

                    throw ValidationException::withMessages([
                        'summary.en' => __('تاكد من ملئ جميع البيانات باللغة الانجليزية'),
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
}
