<?php

namespace App\Filament\Widgets;

use App\Models\Period;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class ActivePeriodWidget extends BaseWidget
{
    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        $activePeriod = Period::active();

        $description = $activePeriod 
            ? "Kepengurusan Saat Ini: " . $activePeriod->cabinet_name 
            : 'Belum ada masa bakti yang aktif.';

        $value = $activePeriod 
            ? "Masa Bakti {$activePeriod->start_year}/{$activePeriod->end_year}" 
            : 'Tidak Ada Periode Aktif';

        return [
            Stat::make('Periode Aktif', $value)
                ->description($description)
                ->descriptionIcon('heroicon-m-check-badge')
                ->color($activePeriod ? 'success' : 'danger')
                ->url(route('filament.admin.resources.periods.index')),
        ];
    }
}
