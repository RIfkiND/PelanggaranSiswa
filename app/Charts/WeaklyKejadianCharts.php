<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\Kejadian;
use Carbon\Carbon;

class WeaklyKejadianCharts
{
    protected $chart;


    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\LineChart
{
    //ambil tanggal terbuat
    $kejadians = Kejadian::select('created_at')->get();

    //loop kejadian Ambil time menggunakan library Carbon PHP
    $weeklyCounts = $kejadians->map(function ($kejadian) { //buat function untuk ambil kejadian
        return Carbon::parse($kejadian->created_at)->weekOfMonth;//ambil colum ceated_at dan gunakan library carbon jadikan week
    })->countBy()->all();

    //ambil bulan
    $currentMonth = Carbon::now()->month;
    $previousMonth = Carbon::now()->subMonth()->month;

    $currentMonthCounts = array_filter($weeklyCounts, function ($week) use ($currentMonth) {
        return Carbon::now()->setISODate(Carbon::now()->year, $week)->month == $currentMonth;
    });

    $previousMonthCounts = array_filter($weeklyCounts, function ($week) use ($previousMonth) {
        return Carbon::now()->setISODate(Carbon::now()->year, $week)->month == $previousMonth;
    });


    $combinedCounts = $currentMonthCounts + $previousMonthCounts;


    $combinedCounts = array_values($combinedCounts);


    $chartData = [
        'Total' => $combinedCounts,
    ];

    $xAxisLabels = array_map(function ($weekNumber) {
        return 'minggu ' . $weekNumber;
    }, range(1, count($combinedCounts)));

    //show
    return $this->chart->lineChart()
        ->setTitle('Pelanggaran Per Minggu')
        ->setSubtitle('Data Pelanggaran')
        ->addData('Total', $chartData['Total'])
        ->setXAxis($xAxisLabels)
        ->setWidth(400) // Set width as per your requirements
        ->setHeight(300);
}

}
