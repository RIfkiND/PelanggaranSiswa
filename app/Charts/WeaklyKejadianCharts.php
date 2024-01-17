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

       
        $kejadians = Kejadian::select('created_at')->get();


        $weeklyCounts = [];


        foreach ($kejadians as $kejadian) {
            $weekNumber = Carbon::parse($kejadian->created_at)->weekOfYear;
            $weeklyCounts[$weekNumber] = isset($weeklyCounts[$weekNumber]) ? $weeklyCounts[$weekNumber] + 1 : 1;
        }


        $chartData = [
            'Total' => array_values($weeklyCounts),
        ];


        $weekNumbers = array_keys($weeklyCounts);
        $xAxisLabels = array_map(function ($weekNumber) {
            return 'minggu ' . $weekNumber;
        }, $weekNumbers);

        return $this->chart->lineChart()
            ->setTitle('Pelanggaran Per Minggu')
            ->setSubtitle('Data Pleanggaran')
            ->addData('Total', $chartData['Total'])
            ->setXAxis($xAxisLabels);
    }
}
