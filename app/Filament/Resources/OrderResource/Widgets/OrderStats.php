<?php

namespace App\Filament\Resources\OrderResource\Widgets;

use App\Models\Order;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Number;

class OrderStats extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('New Order', Order::query()->where('status', 'new')->count())
            ->icon('heroicon-m-shopping-bag')
            ->description('32k increase')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->color('success')
            ->chart([1,2,15,5,4,30]),
            Stat::make('Order Processing', Order::query()->where('status', 'processing')->count())
            ->color('danger')
            ->chart([1,20,10,5,14,8]),
            Stat::make('Order Shipped', Order::query()->where('status', 'shipped')->count())
            ->color('warning')
            ->chart([1,2,15,5,4,8]),
        ];
    }
}
