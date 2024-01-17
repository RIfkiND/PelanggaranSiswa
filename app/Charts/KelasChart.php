<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class KelasChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {
        return $this->chart->pieChart()
            ->setTitle('Top Per angkatan')
            ->setSubtitle('Kelas')
            ->addData([40, 50, 30])
            ->setLabels(['Kelas 10', 'Kelas 11', 'Kelas 12']);
    }
}
