<?php

namespace App\Filament\Widgets;

use App\Models\Order;
use Filament\Widgets\ChartWidget;

class OrderHistory extends ChartWidget
{
    protected static ?int $sort = 4;

    protected static ?string $heading = 'Order History';

    protected function getData(): array
    {
        // Retrieve the order count grouped by date
        $orderData = Order::selectRaw('DATE(created_at) as date, COUNT(*) as count')
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        // Extract the labels (dates) and the data (order counts)
        $labels = $orderData->pluck('date')->map(function ($date) {
            return \Carbon\Carbon::parse($date)->format('Y-m-d');
        });

        $data = $orderData->pluck('count');

        return [
            'labels' => $labels,
            'datasets' => [
                [
                    'label' => 'Orders',
                    'data' => $data,
                ],
            ],
        ];
    }


    protected function getType(): string
    {
        return 'line';
    }
}
