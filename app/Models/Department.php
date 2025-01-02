<?php

namespace App\Models;

use App\Models\TeamMember;
use Illuminate\Database\Eloquent\Model;
use Filament\Notifications\Notification;
use Spatie\Translatable\HasTranslations;
use Illuminate\Validation\ValidationException;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Department extends Model
{
    use HasFactory,HasTranslations;

    protected $guarded = [];
    protected $casts = [
        'name' => 'json',
        'slug' => 'json',
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
    public function team(): HasMany
    {
        return $this->hasMany(TeamMember::class);
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
