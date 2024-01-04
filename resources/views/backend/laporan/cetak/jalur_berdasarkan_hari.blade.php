<!DOCTYPE html>
<html lang="en">

<head>
   {{-- <title>Laporan Jalur Pengangkutan</title> --}}

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   {{--
   <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500&display=swap" rel="stylesheet"> --}}
   <style type="text/css">
      * {
         font-size: 8pt;
      }

      p {
         margin: 5px 0 0 0;
      }
   </style>


</head>

<body>

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
      Laporan Jalur Pengangkutan Kenderaan Tampilan Hari :
   </p>
   <br>
   @foreach ($jalurByHari as $hari => $jalurKenderaan)
   <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1"><u>{{ $hari }}</u></h5>
   </div>
   <ul>
      @foreach ($jalurKenderaan->unique('kenderaan.nomor_polisi') as $jalur)
      <li>
         <h6>Kenderaan: {{ $jalur->kenderaan->nama_kenderaan }} - {{
            $jalur->kenderaan->nomor_polisi }}</h6>
         <h6>Lokasi :</h6>
         <ul>
            @foreach ($jalur->kenderaan->lokasis->unique('nama_lokasi') as $lokasi)
            {{ $loop->iteration.'. '. $lokasi->nama_lokasi }} <br>
            @endforeach
         </ul>
      </li>
      @endforeach
   </ul>
   @endforeach

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

            <p>{{ auth()->user()->role->name }}</p><br><br><br>
            <p><b><u>{{ auth()->user()->biodata->nama_lengkap }}</u></b></p>
         </td>
      </tr>
   </table>

</body>

</html>