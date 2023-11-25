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

    {{-- CONTENT --}}
    <table id="example" class="table table-striped" style="width: 100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Username</th>
                <th>Nama Lengkap</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>No HP</th>
                <th>Level</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->biodata->nama_lengkap }}</td>
                <td>{{ $user->biodata->alamat }}</td>
                <td>{{ Str::ucfirst($user->biodata->jenis_kelamin) }}</td>
                <td>{{ $user->biodata->no_hp }}</td>
                <td>{{ Str::ucfirst($user->role->level) }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="7" class="text-center">Data Kosong</td>
            </tr>
            @endforelse
        </tbody>
        <tfoot>
            <tr>
                <th>#</th>
                <th>Username</th>
                <th>Nama Lengkap</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>No HP</th>
                <th>Level</th>
            </tr>
        </tfoot>
    </table>
    {{-- END CONTENT --}}

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