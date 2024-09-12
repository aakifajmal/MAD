<?php

namespace App\Filament\Widgets;

use App\Models\User;
use Filament\Widgets\ChartWidget;

class CustomerAge extends ChartWidget
{
    protected static ?int $sort = 4;

    protected static ?string $heading = 'User Age Group Distribution';

    protected function getData(): array
{
    // Step 1: Collect all users' DOB and calculate their ages
    $ages = User::all()->pluck('dob')->map(function ($dob) {
        return \Carbon\Carbon::parse($dob)->age;
    });

    // Step 2: Define age ranges
    $ageGroups = [
        '0-10' => 0,
        '11-20' => 0,
        '21-30' => 0,
        '31-40' => 0,
        '41-50' => 0,
        '51-60' => 0,
        '61-70' => 0,
        '71-80' => 0,
        '81-90' => 0,
        '91-100' => 0,
    ];

    // Step 3: Categorize ages into the defined age groups
    foreach ($ages as $age) {
        if ($age >= 0 && $age <= 10) {
            $ageGroups['0-10']++;
        } elseif ($age >= 11 && $age <= 20) {
            $ageGroups['11-20']++;
        } elseif ($age >= 21 && $age <= 30) {
            $ageGroups['21-30']++;
        } elseif ($age >= 31 && $age <= 40) {
            $ageGroups['31-40']++;
        } elseif ($age >= 41 && $age <= 50) {
            $ageGroups['41-50']++;
        } elseif ($age >= 51 && $age <= 60) {
            $ageGroups['51-60']++;
        } elseif ($age >= 61 && $age <= 70) {
            $ageGroups['61-70']++;
        } elseif ($age >= 71 && $age <= 80) {
            $ageGroups['71-80']++;
        } elseif ($age >= 81 && $age <= 90) {
            $ageGroups['81-90']++;
        } elseif ($age >= 91 && $age <= 100) {
            $ageGroups['91-100']++;
        }
    }

    // Step 4: Prepare data for the pie chart
    return [
        'labels' => array_keys($ageGroups),
        'datasets' => [
            [
                'label' => 'Age Distribution',
                'data' => array_values($ageGroups),
                'backgroundColor' => [
                    '#FF6384', // Colors for the pie chart
                    '#36A2EB',
                    '#FFCE56',
                    '#4BC0C0',
                    '#9966FF',
                    '#FF9F40',
                    '#FFCD56',
                    '#46BFBD',
                    '#FDB45C',
                    '#949FB1',
                ],
            ],
        ],
    ];
}

    protected function getType(): string
    {
        return 'pie';
    }
}
