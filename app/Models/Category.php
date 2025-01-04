<?php

namespace App\Models;

use Illuminate\Support\Str;
use App\Models\ExpertArticle;
use Illuminate\Database\Eloquent\Model;
use Filament\Notifications\Notification;
use Spatie\Translatable\HasTranslations;
use Illuminate\Validation\ValidationException;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory,HasTranslations;

    protected $guarded = [];

    protected $casts = [
        'name' => 'json',
    ];

    //Start Translation

    public $translatable = ['name','Slug'];

    public function getLocalizedName()
    {
        return $this->getTranslation('name', app()->getLocale());
    }
    public function getLocalizedSlug()
    {
        return $this->getTranslation('slug', app()->getLocale());
    }


    // Start Relation
    public function articles(): HasMany
    {
        return $this->hasMany(Article::class, 'category_id');
    }
    public function expert_articles(): HasMany
    {
        return $this->hasMany(ExpertArticle::class, 'expert_id');
    }

    
    // Start Lang Requiered Message && Creating Default Order

    protected static function boot()
    {
        parent::boot();

        // Create Default Order

        static::creating(function ($category) {
            if (is_null($category->order)) {
                $category->order = Category::max('order') + 1;
            }
        });
        
        // Create Message

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

            // Validate unique name (Arabic and English)
            $existing = $model::where('name->ar', $name['ar'])->orWhere('name->en', $name['en'])->first();

            if ($existing && $existing->getKey() != $model->getKey()) {
                Notification::make()
                    ->title(__('تحزير'))
                    ->body(__('الاسم موجود مسبقًا'))
                    ->warning()
                    ->send();

                throw ValidationException::withMessages([
                    'name' => __('الاسم موجود مسبقًا'),
                ]);
            }

        });
    }


}
