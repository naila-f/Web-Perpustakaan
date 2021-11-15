<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        table.static {
            position: relative;
            border: 1px solid #543535;
        }
    </style>
    <title>Cetak Data Daftar Hadir</title>
</head>
<body>
    <div class="form-group">
        <p align="center"><b>Laporan Data Daftar Hadir</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%">
            <tr>
                <th>Id Hadir</th>
                <th>Keperluan</th>
                <th>Tanggal Kehadiran</th>
            </tr>
                @foreach ($dtCetakDaftarhadir as $item)
                    <tr>
                        <td>{{ $item->id_hadir }}</td>
                        <td>{{ $item->keperluan }}</td>
                        <td>{{ $item->tanggal_kehadiran }}</td>
                    </tr>
                @endforeach
        </table>
    </div>

    <script type="text/javascript">
    window.print();
    </script>

</body>
</html>
