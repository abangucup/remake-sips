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

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        // $tahun = date('Y');
        // $bulan = date('m');
        // for ($i = 1; $i <= $bulan; $i++) {
        //     $sampahOrganik = Sampah::where('kategori_id', 2)->whereYear('tanggal_lapor', $tahun)->whereMonth('tanggal_lapor', $i)->sum('jumlah_sampah');
        //     $sampahNonOrganik = Sampah::where('kategori_id', 3)->whereYear('tanggal_lapor', $tahun)->whereMonth('tanggal_lapor', $i)->sum('jumlah_sampah');
        //     $sampahB3 = Sampah::where('kategori_id', 4)->whereYear('tanggal_lapor', $tahun)->whereMonth('tanggal_lapor', $i)->sum('jumlah_sampah');
        //     $dataBulan[] = Carbon::create()->month($i)->format('F');
        //     $totalSampahOrganik[] = $sampahOrganik;
        //     $totalSampahNonOrganik[] = $sampahNonOrganik;
        //     $totalSampahB3[] = $sampahB3;
        // }
        // $kategori = Kategori::first();
        // dd($kategori);
        // $namaSampah = Sampah::pluck('nama_sampah')->toArray();
        // $sampahOrganik = Sampah::whereHas('kategori', function ($query) use ($kategoris) {
        //     $query->where('kategori_sampah', $kategoris[0]);
        // })->sum('jumlah_sampah');

        // $sampahNonOrganik = Sampah::whereHas('kategori', function ($query) use ($kategoris) {
        //     $query->where('kategori_sampah', $kategoris[1]);
        // })->sum('jumlah_sampah');

        // $sampahB3 = Sampah::whereHas('kategori', function ($query) use ($kategoris) {
        //     $query->where('kategori_sampah', $kategoris[2]);
        // })->sum('jumlah_sampah');
        $kategoris = Kategori::pluck('kategori_sampah')->toArray();
        $namaKategori = [];
        $dataSampah = [];

        foreach ($kategoris as $kategori) {
            $namaKategori[] = $kategori;
            $totalSampah = Sampah::whereHas('kategori', function ($query) use ($kategori) {
                $query->where('kategori_sampah', $kategori);
            })->sum('jumlah_sampah');
            $dataSampah[] = $totalSampah;
        }

        return $this->chart->barChart()
            ->setTitle('Jumlah Sampah Perkategori - Satuan KG')
            ->setSubtitle('Organik, Non Organik & B3')
            ->addData('Jumlah Sampah', $dataSampah)
            ->setHeight(300)
            ->setXAxis($namaKategori);
    }
}
