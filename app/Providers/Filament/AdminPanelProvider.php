<?php

namespace App\Providers\Filament;

use Filament\Pages;
use Filament\Panel;
use Filament\Widgets;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Filament\Http\Middleware\Authenticate;
use Filament\SpatieLaravelTranslatablePlugin;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Filament\Http\Middleware\AuthenticateSession;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
        ->plugin(SpatieLaravelTranslatablePlugin::make())
        ->plugin(
            SpatieLaravelTranslatablePlugin::make()
                ->defaultLocales(['ar', 'en']),
        )
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->profile()
            ->sidebarCollapsibleOnDesktop()
            ->colors([
                'primary' => Color::Amber,
            ])
            ->brandName($this->brandText())
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
                Widgets\AccountWidget::class,
                // Widgets\FilamentInfoWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);
    }

    protected function brandText(): string
    {
        if (!Schema::hasTable('settings')) {
            return 'ARP';
        }

        $brandTextJson = DB::table('settings')->value('sitename');

        if ($brandTextJson) {
            $brandText = json_decode($brandTextJson, true);
            $locale = app()->getLocale();

            return $brandText[$locale] ?? 'ARP';
        }

        return 'ARP';
    }
}
