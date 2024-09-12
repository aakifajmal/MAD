<?php

namespace App\Filament\Resources\UserResource\Widgets;

use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class CustomerStats extends BaseWidget
{

    protected function getStats(): array
    {



        // Calculate the number of customers joined this month
        $currentMonthCount = User::query()->whereMonth('created_at', now()->month)->whereYear('created_at', now()->year)->count();

        // Calculate the number of customers joined last month
        $previousMonthCount = User::query()->whereMonth('created_at', now()->subMonth()->month)->whereYear('created_at', now()->subMonth()->year)->count();

        // Determine the trend direction and the difference
        $trendDifference = $currentMonthCount - $previousMonthCount;
        $description = '';
        $descriptionIcon = '';
        $color = '';
        $chartData = [];

        if ($trendDifference > 0) {
            $description = "Increase of {$trendDifference} customers compared to last month";
            $descriptionIcon = 'heroicon-m-arrow-trending-up'; // Up-trending icon
            $color = 'success'; // Green color for up-trending
            $chartData = [5, 10, 15, 20, 25, 30, 35]; // Up-trending fake data
        } elseif ($trendDifference < 0) {
            $description = "Decrease of " . abs($trendDifference) . " customers compared to last month";
            $descriptionIcon = 'heroicon-m-arrow-trending-down'; // Down-trending icon
            $color = 'danger'; // Red color for down-trending
            $chartData = [35, 30, 25, 20, 15, 10, 5]; // Down-trending fake data
        } else {
            $description = 'No significant change from last month';
            $descriptionIcon = 'heroicon-m-arrow-right'; // Neutral icon
            $color = 'secondary'; // Neutral color
            $chartData = [20, 20, 20, 20, 20, 20, 20]; // Flat fake data
        }

        return [
            // Total number of customers
            Stat::make('Total Customers', User::query()->count()),

            // Number of customers joined this month
            Stat::make('Customers Joined This Month', $currentMonthCount),

            // Display the trend difference, description, and chart based on the comparison with previous month's customer registrations
            Stat::make('Customers Trending', $trendDifference > 0 ? "+{$trendDifference}" : "{$trendDifference}")
                ->description($description)
                ->descriptionIcon($descriptionIcon)
                ->color($color)
                ->chart($chartData), // Add the chart data here
        ];


    }
}
