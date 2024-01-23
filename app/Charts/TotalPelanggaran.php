<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class TotalPelanggaran
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\DonutChart
    {
        return $this->chart->donutChart()
            ->setTitle('Top 3 scorers of the team.')
            ->setSubtitle('Season 2021.')
            ->setLabels(['Player 7', 'Player 10', 'Player 9'])
            ->addData([20, 24, 30])
            ->setWidth(800) // Set width as per your requirements
            ->setHeight(400);
    }
}
