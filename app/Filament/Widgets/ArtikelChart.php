<?php

namespace App\Filament\Widgets;

use App\Models\Artikel;
use Filament\Widgets\ChartWidget;
use Flowbite\Flowbite;
use Carbon\Carbon;

class ArtikelChart extends ChartWidget
{
    protected static ?string $heading = 'Artikel Baru per Bulan';

    protected function getType(): string
    {
        return 'line'; // Atau 'bar'
    }

    protected function getData(): array
    {
        $data = Artikel::select('created_at')
            ->get()
            ->groupBy(function ($d) {
                return Carbon::parse($d->created_at)->format('M');
            });

        $counts = [];
        $labels = [];

        foreach ($data as $month => $values) {
            $counts[] = $values->count();
            $labels[] = $month;
        }

        return [
            'datasets' => [
                [
                    'label' => 'Artikel',
                    'data' => $counts,
                ],
            ],
            'labels' => $labels,
        ];
    }
}