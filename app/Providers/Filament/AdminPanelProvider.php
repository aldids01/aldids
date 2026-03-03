<?php

namespace App\Providers\Filament;

use App\Filament\Home\Pages\Home;
use App\Models\Contact;
use App\Observers\ContactObserver;
use Filament\Actions\Action;
use Filament\Enums\UserMenuPosition;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
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

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->viteTheme('resources/css/filament/admin/theme.css')
            ->login()
            ->profile(isSimple: false)
//            ->registration()
            ->colors([
                'primary' => Color::Purple,
            ])
            ->userMenu(position: UserMenuPosition::Sidebar)
            ->maxContentWidth(Width::Full)
            ->sidebarFullyCollapsibleOnDesktop()
            ->databaseNotifications()
            ->sidebarWidth('12rem')
            ->simplePageMaxContentWidth(Width::Small)
            ->spa(hasPrefetching: true)
//            ->unsavedChangesAlerts()
            ->databaseTransactions()
//            ->strictAuthorization()
            ->registerErrorNotification(
                title: 'An error occurred',
                body: 'Please try again later.',
            )
            ->registerErrorNotification(
                title: 'Record not found',
                body: 'A record you are looking for does not exist.',
                statusCode: 404,
            )
            ->userMenuItems([
                Action::make('settings')
                    ->label('Website')
                    ->url(fn (): string => Home::getUrl(panel: 'home'))
                    ->icon(Heroicon::GlobeAlt),
            ])
            ->favicon('/favicon.ico')
            ->brandName('ALPHA DIGITAL DEVELOPERS')
//            ->brandLogo('/apple-touch-icon.png')
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\Filament\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\Filament\Pages')
            ->pages([
                Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\Filament\Widgets')
            ->widgets([
                AccountWidget::class,
                FilamentInfoWidget::class,
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
            ], isPersistent: true)
            ->renderHook(
                PanelsRenderHook::FOOTER,
                fn(): string => Blade::render('admin-footer'),
            )
            ->bootUsing(function (Panel $panel) {
                Contact::observe(ContactObserver::class);
            })
            ->viteTheme('resources/css/filament/admin/theme.css');
    }
}
