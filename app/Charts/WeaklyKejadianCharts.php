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
            return Carbon::parse($kejadian->created_at)->weekOfYear;//ambil colum ceated_at dan gunakan library carbon jadikan week
        })->countBy()->all();

        ksort($weeklyCounts);

        //ambil Total Kejadian kembalikan sebagai array
        $chartData = [
            'Total' => array_values($weeklyCounts),
        ];

        $xAxisLabels = array_map(function ($weekNumber) {
            return 'minggu ' . $weekNumber;
        }, array_keys($weeklyCounts));
        //show
        return $this->chart->lineChart()
            ->setTitle('Pelanggaran Per Minggu')
            ->setSubtitle('Data Pelanggaran')
            ->addData('Total', $chartData['Total'])
            ->setXAxis($xAxisLabels);
    }
}
