<!DOCTYPE html>
<html lang="en">

<head>
    {{-- <title>Laporan Jalur Pengangkutan</title> --}}


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


</head>

<body>
    <style type="text/css">
        p {
            margin: 5px 0 0 0;
            font-size: 9pt;
        }

        table tr td,
        table tr th {
            font-size: 9pt;
        }
    </style>
    <table width="100%">
        <tr>
            <td style="text-align: center">
                <p style="font-size: 1.17em"><b>
                        DINAS LINGKUNGAN HIDUP DAN PENGELOLAAN SAMPAH<br>

                        KECAMATAN MARISA, KABUPATEN POHUWATO <br>
                        PROVINSI GORONTALO</b>
                </p>
                FW6W+66J, Palopo, Kec. Marisa, Kabupaten Pohuwato, Gorontalo 96265
                Email: <u>blh.pohuwato@gmail.com</u>
            </td>
            <td align="right" width="100px">
                <p></p>
            </td>
        </tr>
    </table>

    <hr>

    <table>
        <tr>
            <th align="left"> Perihal </th>
            <td> : Laporan Jalur Pengangkutan</td>
        </tr>

    </table>

    <br>

    <p>
        Laporan Jalur Pengangkutan Kenderaan Tampilan Tabel :
    </p>
    <br>

    <table id="example" class="table table-striped" style="width: 100%">
        <thead>
            <tr>
                <th>#</th>
                <th class="text-center">Jenis</th>
                <th>Kenderaan</th>
                <th>Nama Sopir</th>
                <th>Hari</th>
                <th>Jalur</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kenderaans as $kenderaan)
            @php
            $rowspan = $kenderaan->jalurs->pluck('hari')->unique()->count();
            @endphp
            <tr>
                <td rowspan="{{ $rowspan }}" class="align-middle">{{ $loop->iteration }}</td>
                <td rowspan="{{ $rowspan }}" class="align-middle text-center">{{
                    $kenderaan->jenis->jenis_kenderaan }}</td>
                <td rowspan="{{ $rowspan }}" class="align-middle">{{ $kenderaan->nama_kenderaan.' -
                    '.$kenderaan->nomor_polisi }}
                </td>
                <td rowspan="{{ $rowspan }}" class="align-middle">{{ $kenderaan->sopir->user->biodata->nama_lengkap }}
                </td>

                @foreach ($kenderaan->jalurs->groupBy('hari') as $hari => $jalurs)
                @if ($loop->first)
                <td>{{ $hari }}</td>
                <td>
                    {{ implode(', ', $jalurs->pluck('lokasi.nama_lokasi')->toArray()) }}
                </td>
                @else
            <tr>
                <td>{{ $hari }}</td>
                <td>
                    {{ implode(', ', $jalurs->pluck('lokasi.nama_lokasi')->toArray()) }}
                </td>
            </tr>
            @endif
            @endforeach
            </tr>
            @endforeach
        </tbody>

        <tfoot>
            <tr>
                <th>#</th>
                <th class="text-center">Jenis</th>
                <th>Kenderaan</th>
                <th>Nama Sopir</th>
                <th>Hari</th>
                <th>Jalur</th>
            </tr>
        </tfoot>
    </table>
    <p>
        Demikian laporan ini dibuat dengan sebenar-benarnya melalui sistem, untuk diketahui dan digunakan dengan
        semestinya.
    </p>
    <br>
    <table width="100%">
        <tr>
            <td align="left" width="70%">
            </td>
            <td style="text-align: center">
                <div id="tanggal">
                    <?php echo "Gorontalo, " . date("j F Y"); ?>
                </div>

                <p>Admin Kantor</p><br><br><br>
                <p><b><u>{{ auth()->user()->biodata->nama_lengkap }}</u></b></p>
            </td>
        </tr>
    </table>

</body>

</html>