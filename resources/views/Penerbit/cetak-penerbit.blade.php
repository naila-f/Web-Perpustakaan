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
    <title>Cetak Data Penerbit</title>
</head>
<body>
    <div class="form-group">
        <p align="center"><b>Laporan Data Penerbit</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%">
            <tr>
                <th>Id Penerbit</th>
                <th>Nama Penerbit</th>
                <th>Alamat</th>
                <th>No Hp</th>
            </tr>
                @foreach ($dtCetakPenerbit as $item)
                    <tr>
                        <td>{{ $item->id_penerbit }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>{{ $item->no_hp }}</td>
                    </tr>
                @endforeach
        </table>
    </div>

    <script type="text/javascript">
    window.print();
    </script>

</body>
</html>
