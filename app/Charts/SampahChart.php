<?php

namespace App\Charts;

use App\Models\Kategori;
use App\Models\Sampah;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use Carbon\Carbon;

class SampahChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\LineChart
    {
        $tahun = date('Y');
        $bulan = date('m');
        for ($i = 1; $i <= $bulan; $i++) {
            $sampahOrganik = Sampah::where('kategori_id', 2)->whereYear('tanggal_lapor', $tahun)->whereMonth('tanggal_lapor', $i)->sum('jumlah_sampah');
            $sampahNonOrganik = Sampah::where('kategori_id', 3)->whereYear('tanggal_lapor', $tahun)->whereMonth('tanggal_lapor', $i)->sum('jumlah_sampah');
            $sampahB3 = Sampah::where('kategori_id', 4)->whereYear('tanggal_lapor', $tahun)->whereMonth('tanggal_lapor', $i)->sum('jumlah_sampah');
            $dataBulan[] = Carbon::create()->month($i)->format('F');
            $totalSampahOrganik[] = $sampahOrganik;
            $totalSampahNonOrganik[] = $sampahNonOrganik;
            $totalSampahB3[] = $sampahB3;
        }

        return $this->chart->lineChart()
            ->setTitle('Data Sampah Perbulan - Satuan KG')
            ->setSubtitle('Organik, Non Organik & B3')
            ->addData('Organik', $totalSampahOrganik)
            ->addData('Non Organik', $totalSampahNonOrganik)
            ->addData('B3', $totalSampahB3)
            ->setHeight(300)
            ->setXAxis($dataBulan);
    }
}
