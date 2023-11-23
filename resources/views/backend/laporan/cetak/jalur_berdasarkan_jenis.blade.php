@extends('backend.template.app')

@section('title', 'Laporan Jalur')

@section('content')
<div class="row">
   <div class="col-12">
      <div class="card">
         <div class="card-header">
            <h4 class="card-title"></h4>
         </div>
         <div class="card-body">
            <div class="basic-list-group">
               <div class="list-group">

                  {{-- lokasi benar --}}
                  @foreach ($jenisKenderaan as $jenis)
                  <h5>JALUR PELAYANAN PENGANGKUTAN SAMPAH JENIS {{ $jenis->jenis_kenderaan }}</h5>
                  <ol>
                     @foreach ($jenis->kenderaans as $kenderaan)
                     <li class="fw-bold">
                        Jalur Kenderaan {{ $kenderaan->nama_kenderaan.' - '.$kenderaan->nomor_polisi.'
                        ('.$kenderaan->sopir->user->biodata->nama_lengkap.')' }}
                     </li>
                     <ul>
                        {{-- @php
                        // Mengelompokkan hari berdasarkan lokasi_id
                        $groupedDays = $kenderaan->jalurs->groupBy('hari');
                        @endphp

                        @foreach ($groupedDays as $hari => $days)
                        <li>
                           {{ $hari }} :
                           {{ $days->pluck('lokasi.nama_lokasi')->unique()->implode(', ') }}
                        </li>
                        @endforeach --}}
                        @foreach ($kenderaan->jalurs->groupBy('hari') as $jalur =>$test)
                        {{ $test }}
                        @endforeach
                        {{-- {{ $kenderaan->jalurs->pluck('hari')->unique()->implode(', ') }} --}}
                     </ul>
                     @endforeach
                  </ol>
                  @endforeach

                  {{-- Hari benar --}}
                  {{-- @foreach ($jenisKenderaan as $jenis)
                  <h5>JALUR PELAYANAN PENGANGKUTAN SAMPAH JENIS {{ $jenis->jenis_kenderaan }}</h5>
                  <ol>
                     @foreach ($jenis->kenderaans as $kenderaan)
                     <li class="fw-bold">
                        Jalur Kenderaan {{ $kenderaan->nama_kenderaan.' - '.$kenderaan->nomor_polisi.'
                        ('.$kenderaan->sopir->user->biodata->nama_lengkap.')' }}
                     </li>
                     <ul>
                        @php
                        // Mengelompokkan hari berdasarkan lokasi_id
                        $groupedDays = $kenderaan->jalurs->groupBy('lokasi_id');
                        @endphp

                        @foreach ($groupedDays as $lokasiId => $days)
                        <li>
                           {{ $days->pluck('hari')->unique()->implode(', ') }} :
                           {{ $days->first()->lokasi->nama_lokasi }}
                        </li>
                        @endforeach
                     </ul>
                     @endforeach
                  </ol>
                  @endforeach --}}
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection