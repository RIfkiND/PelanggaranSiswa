<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class TotalHarianChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        return $this->chart->barChart()
            ->setTitle('Pelanggaran Per hari')
            ->setSubtitle('Total Perhari')
            ->addData('Kelas 10', [6, 9, 3, 4,  8])
            ->addData('Kelas 11', [7, 3, 8, 2, 6])
            ->addData('Kelas 12', [10, 4, 5, 9, 2])
            ->setXAxis(['Monday', 'Tesday', 'Wednesday', 'Thurstday', 'friday'])
            ->setWidth(1000) // Set width as per your requirements
            ->setHeight(400 );;
    }
}
