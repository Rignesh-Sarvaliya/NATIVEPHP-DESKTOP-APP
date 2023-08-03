<?php

namespace App\Providers;

use Native\Laravel\Facades\ContextMenu;
use Native\Laravel\Facades\Dock;
use Native\Laravel\Facades\Window;
use Native\Laravel\Facades\GlobalShortcut;
use Native\Laravel\Menu\Menu;
use Native\Laravel\Facades\MenuBar;


class NativeAppServiceProvider
{
    /**
     * Executed once the native application has been booted.
     * Use this method to open windows, register global shortcuts, etc.
     */
    public function boot(): void
    {
        Menubar::create()
        // ->icon(storage_path('app/menuBarIconTemplate.png'))
        ->width(400)
        ->height(600)
        ->alwaysOnTop()
        ->withContextMenu(
            Menu::new()
                ->label('My Application')
                ->separator()
                ->link('https://nativephp.com', 'Learn more…')
                ->separator()
                ->quit()
        )
        ->hide();

        Menu::new()
            ->appMenu()
            ->submenu(
                'NativePHP',
                Menu::new()
                    ->link('https://nativephp.com', 'Documentation')
            )
            ->register();

        // Window::open()
        //     ->title('NativePHP App')
        //     ->minWidth(400)
        //     ->minHeight(600)
        //     ->alwaysOnTop(true, 'settings');

        GlobalShortcut::key('CmdOrCtrl+Shift+J')
            ->event(\App\Events\HandleGlobalShortcutRefresh::class)
            ->register();

    }
}
