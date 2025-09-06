<?php

namespace App\Filament\Widgets;

use App\Models\Budaya;
use App\Models\Artikel;
use App\Models\Event;
use App\Models\Pustaka;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Budaya', Budaya::count())
                ->descriptionIcon('heroicon-m-arrow-trending-up'),
            Stat::make('Total Artikel', Artikel::count())
                ->descriptionIcon('heroicon-m-arrow-trending-up'),
            Stat::make('Total Event', Event::count())
                ->descriptionIcon('heroicon-m-arrow-trending-up'),
            Stat::make('Total Bacaan', Pustaka::count())
        ];
    }
}