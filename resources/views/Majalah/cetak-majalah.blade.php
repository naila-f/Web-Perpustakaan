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
    <title>Cetak Data Majalah</title>
</head>
<body>
    <div class="form-group">
        <p align="center"><b>Laporan Data Majalah</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%">
            <tr>
                <th>Id Majalah</th>
                <th>Nama Majalah</th>
                <th>Tahun Terbit</th>
            </tr>
                @foreach ($dtCetakMajalah as $item)
                    <tr>
                        <td>{{ $item->id_majalah }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->tahun_terbit }}</td>
                    </tr>
                @endforeach
        </table>
    </div>

    <script type="text/javascript">
    window.print();
    </script>

</body>
</html>
