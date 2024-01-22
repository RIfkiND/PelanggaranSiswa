<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\models\Kejadian;
use App\Models\Pelanggaran;

class KelasChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {

        // Ambil model
        $perkelas = Kejadian::with('siswa')
            ->get()
            ->groupBy('siswa.kelas.kelas');// Siswa relation to Siswa -> kelas -> Interger Kelas

        $totalPelanggaran = $perkelas->map->count();

        // untuk vie chart
        $chartData = $totalPelanggaran->values()->toArray();



        return $this->chart->pieChart()
            ->setTitle('Top Per angkatan')
            ->setSubtitle('Kelas')
            ->addData($chartData)
            ->setLabels(['Kelas 10' ,'Kelas 11' ,'Kelas 12']);
    }
}
