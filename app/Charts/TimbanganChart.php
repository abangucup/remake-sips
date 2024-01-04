<?php

namespace App\Charts;

use App\Models\Timbangan;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class TimbanganChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\LineChart
    {
        $beratSampah = Timbangan::where('created_at', '>=', now()->subDays(90))
            ->pluck('berat_sampah')
            ->toArray();

        $tanggalArray = Timbangan::where('created_at', '>=', now()->subDays(90))
            ->pluck('created_at')
            ->map(function ($timestamp) {
                return \Carbon\Carbon::parse($timestamp)->format('Y-m-d');
            })
            ->toArray();


        return $this->chart->lineChart()
            ->setTitle('Sampah Perkenderaan 3 Bulan Terakhir')
            ->setSubtitle('Satuan KG')
            ->addLine('Berat Sampah', $beratSampah)
            ->setHeight(300)
            ->setXAxis($tanggalArray);
    }
}
