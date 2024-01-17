<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\Kejadian;
use App\Models\Kelas;
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


        return $this->chart->lineChart()
        ->setTitle('Pelanggaran Per Minggu')
        ->setSubtitle('Data Pleanggaran')
        ->addData('Total', [40, 93, 35, 42, 18, 82])
        ->setXAxis(['minggu 1' ,'minggu 2' ,'minggu 4' ,' minggu 5' ,'minggu 6']);


        //$weeks = [];

        //for ($i = 0; $i <= 4; $i++) {
        //  $weeks[] = Carbon::create()->week($i)->format('W');
        //}

        //$kelas10Data = $this->getDataByClass('Kelas 10', $weeks);
        //$kelas11Data = $this->getDataByClass('Kelas 11', $weeks);
        //$kelas12Data = $this->getDataByClass('Kelas 12', $weeks);

        // return $this->chart->lineChart()
        //->setTitle('Pelanggaran Per Minggu')
        //->setSubtitle('Data Pelanggaran')
        //->addData('Kelas 10', $kelas10Data)
        //->addData('Kelas 11', $kelas11Data)
        //->addData('Kelas 12', $kelas12Data)
        // ->setXAxis($weeks);
    }

    //protected function getDataByClass(string $kelas, array $weeks): array
    //{
    //      $data = [];

    //        $siswas = Kelas::where('name', $kelas)->first()->siswa ?? collect();

    //    foreach ($siswas as $siswa) {
    //          $siswaData = [];
    //
    //    foreach ($weeks as $week) {
    //          $count = Kejadian::where('kelas_id', $kelas)
    //                ->where('siswa_id', $siswa->id)
    //                  ->whereWeek('Waktu', $week)
    //                    ->count();

    //              $siswaData[] = $count;
    //            }

    //   $data[$siswa->nama_siswa] = $siswaData;
    // }

    //   return $data;
    // }

}
