<?php

namespace App\Providers;

use Native\Laravel\Facades\Window;
use Native\Laravel\Contracts\ProvidesPhpIni;
use Native\Laravel\Facades\MenuBar;
use Native\Laravel\Menu\Menu;


class NativeAppServiceProvider implements ProvidesPhpIni
{
    /**
     * Executed once the native application has been booted.
     * Use this method to open windows, register global shortcuts, etc.
     */
    public function boot(): void
    {
        Window::open()
            ->rememberState()
            ->backgroundColor('#00000050') // Semi-transparent black
            ->title('PC Performances')
            ->width(1200)
            ->height(800);

        MenuBar::create()
            ->width(800)
            ->height(600)

            ->onlyShowContextMenu()
            ->withContextMenu(
                Menu::new()
                    ->label('PC Performances')
                    ->label('PC Components')
                    ->label('PC Settings')
                    ->separator()
                    ->label('Issues')
                    ->label('Documentation')
                    ->label('Quit')
                    ->quit()
            )
            ->showDockIcon()
            ->label('Status: Online');
        // ->url('https://google.com');



    }

    /**
     * Return an array of php.ini directives to be set.
     */
    public function phpIni(): array
    {
        return [];
    }
}
