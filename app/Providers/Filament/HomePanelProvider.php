<?php

namespace App\Providers\Filament;

use App\Filament\Home\Pages\Home;
use Filament\Actions\Action;
use Filament\Facades\Filament;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Navigation\NavigationGroup;
use Filament\Navigation\NavigationItem;
use Filament\Pages\Dashboard;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Support\Enums\Width;
use Filament\Support\Icons\Heroicon;
use Filament\View\PanelsRenderHook;
use Filament\Widgets\AccountWidget;
use Filament\Widgets\FilamentInfoWidget;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Support\Facades\Blade;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class HomePanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->id('home')
            ->path('/')
            ->colors([
                'primary' => Color::Purple,
            ])
            ->topNavigation()
            ->brandName('ALPHA DIGITAL DEVELOPERS')
            ->favicon('/favicon.ico')
            ->navigationItems([
                NavigationItem::make('About Us')
                    ->url(fn(): string => '#about')
                    ->icon(Heroicon::OutlinedLightBulb),
                NavigationItem::make('Services')
                    ->url(fn(): string => '#services')
                    ->icon(Heroicon::OutlinedSignal),
                NavigationItem::make('Projects')
                    ->url(fn(): string => '#projects')
                    ->icon(Heroicon::OutlinedCodeBracket),
                NavigationItem::make('Testimonials')
                    ->url(fn(): string => '#testimonials')
                    ->icon(Heroicon::OutlinedIdentification),
                NavigationItem::make('Contact')
                    ->url(fn(): string => '#contact')
                    ->icon(Heroicon::OutlinedEnvelope),
            ])
            ->userMenuItems([
                Action::make('settings')
                    ->label('Admin')
                    ->url(fn (): string => Dashboard::getUrl(panel: 'admin'))
                    ->icon('heroicon-o-cog-6-tooth'),
            ])
            ->registerErrorNotification(
                title: 'An error occurred',
                body: 'Please try again later.',
            )
            ->registerErrorNotification(
                title: 'Record not found',
                body: 'A record you are looking for does not exist.',
                statusCode: 404,
            )
            ->maxContentWidth(Width::Full)
            ->discoverResources(in: app_path('Filament/Home/Resources'), for: 'App\Filament\Home\Resources')
            ->discoverPages(in: app_path('Filament/Home/Pages'), for: 'App\Filament\Home\Pages')
            ->pages([
                Home::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Home/Widgets'), for: 'App\Filament\Home\Widgets')
            ->widgets([
//                AccountWidget::class,
//                FilamentInfoWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
//                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->bootUsing(function (Panel $panel) {
                // ...
            })
            ->renderHook(
                PanelsRenderHook::FOOTER,
                fn(): string => Blade::render('footer'),
            )
            ->renderHook(
                PanelsRenderHook::TOPBAR_END, // This puts it on the far right of the top bar
                fn (): string => Blade::render('
                    @guest
                        <a href="/admin/login" class="fi-topbar-item-btn">
                            Login
                        </a>
                    @endguest
                '),
            )
            ->authMiddleware([
//                Authenticate::class,
            ])->viteTheme('resources/css/filament/home/theme.css');
    }
}
